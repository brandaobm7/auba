<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    public function index(){
        return view('admin.recuperarsenha');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
    
        $token = Str::random(length: 64);
    
        $tokenData = [
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(), // Armazena o horário de criação do token
        ];
    
        DB::table('password_reset_tokens')->insert($tokenData);
    
        Mail::send('custom.recuperarsenha', ['token' => $token], function ($mensagem) use ($request){
            $mensagem->to($request->email);
            $mensagem->subject('Recuperar Senha');
        });
    
        return redirect()->to(route('admin.recuperarsenha'))->with('success', 'Enviamos um email para a recuperação de senha.');
    }

    public function edit($token){
        return view('admin.novasenha', compact('token'));
    }

    public function update(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
    
        $update = DB::table('password_reset_tokens')
                    ->where("email", $request->email)
                    ->where("token", $request->token)
                    ->first();
    
        if (!$update || Carbon::parse($update->created_at)->addMinutes(60)->isPast()) {
            return redirect()->to(route('admin.resetarsenha', ['token' => $request->token]))->with('error', 'O token de redefinição de senha é inválido ou expirou.');
        }
    
        User::where("email", $request->email)->update(["password" => bcrypt($request->password)]);
    
        DB::table('password_reset_tokens')->where(["email" => $request->email])->delete();
    
        return redirect()->to(route('admin.login'))->with('success', 'Senha alterada com sucesso!');
    }
}
