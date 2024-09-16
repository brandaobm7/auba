<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authRedirect()
    {
        if (Auth::check()) {
            // Redirecionar para o painel admin se o usuário já estiver logado
            return redirect()->route('admin.painel');
        }
        return view('admin.login'); // Se não permanece no login
    }

    // Logando e indo para o painel
    public function auth(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'O email é obrigatório',
            'email.email' => 'Email inválido',
            'password.required' => 'A senha é obrigatória'
        ]);

        if(Auth::attempt($credenciais, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/painel');
        } else {
            return redirect()->back()->with('error', 'Email ou senha inválido');
        }
    
    }

    // Fazendo logout do painel
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    // public function create() {
    //     return view('admin.users.home');
    // }
}
