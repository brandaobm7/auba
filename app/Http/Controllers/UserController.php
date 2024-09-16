<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.home', compact('users'));
    }

    public function getUsers()
    {
        $users = User::select(['id', 'imagem', 'name', 'email', 'created_at', 'updated_at'])->orderBy('created_at', 'desc');

        return DataTables::of($users)
            ->addColumn('action', function($query) { 
                return $botoes ="<div style='display: flex; justify-content: center;'><a href='". route('admin.users.edit', $query->id) ."' class='btn btn-primary btn-sm me-1'>Editar</a>
                <a href='delete-$query->id' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#delete-$query->id'><i class='dripicons-trash'></i></a></div>
                <!-- Danger Alert Modal -->
                <div id='delete-$query->id' class='modal fade' tabindex='-1' role='dialog' aria-hidden='true'>
                <div class='modal-dialog modal-sm'>
                    <div class='modal-content modal-filled bg-danger'>
                        <div class='modal-body p-4'>
                            <div class='text-center'>
                                <i class='dripicons-wrong h1 text-white'></i>
                                <h4 class='mt-2 text-white'>ATENÇÃO</h4>
                                <p class='mt-3 text-white'>Tem certeza que deseja excluir: <br> <strong>$query->name</strong></p>
                                <form action='".route('admin.users.delete', $query->id)."' method='POST'>
                                ". method_field('DELETE') ."
                                ". csrf_field() ."
                                    <button type='submit' class='btn btn-light my-2'>Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- end MODAL DELETE -->";
            })
            ->addColumn('imagem', function($query) {
                if ($query->imagem) {
                    return "<img src='". asset("storage/{$query->imagem}") ."' alt='imagem post' title='imagem post' class='rounded-circle avatar-sm' />";
                } else {
                    return "<img src='". asset("dash/assets/images/no-pictures.png") ."' alt='no-image' title='no-image' class='rounded-circle avatar-sm' />";
                }
            })   
            ->editColumn('created_at', function ($query) {
                Carbon::setLocale('pt_BR');
                $date = $query->created_at;
                return $formattedDate = Carbon::parse($date)->translatedFormat('d \d\e F \d\e Y');
            })    
            ->rawColumns(['imagem','name','email','created_at','action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mensagem = [
            'email.required' => 'O campo de e-mail é obrigatório.',
            'email.email' => 'Por favor, forneça um endereço de e-mail válido.',
            'email.unique' => 'Este e-mail já está registrado.',
            'password.required' => 'O campo de senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'password.confirmed' => 'As senhas não coincidem.',
            'password_confirmation.required' => 'Por favor, confirme sua senha.',
        ];
    
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ], $mensagem);

        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        $user = User::create($user);

        return redirect()->route('admin.users.home')->with('success', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, string|int $id)
    {
        if (!$user = User::find($id)) {
            return redirect()->back();
        }
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, string $id)
    {
        if (!$user = $user->find($id)) {
            return redirect()->back();
        }

        $mensagens = [
            'email.required' => 'O campo de e-mail é obrigatório.',
            'email.email' => 'Por favor, forneça um endereço de e-mail válido.',
            'email.unique' => 'Este e-mail já está registrado.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'password.confirmed' => 'As senhas não coincidem.',
            'imagem.image' => 'O arquivo deve ser uma imagem.',
            'imagem.mimes' => 'A imagem deve ser um arquivo do tipo: jpg, jpeg, png, gif.',
            'imagem.max' => 'A imagem não pode ser maior que 2 MB.',
        ];

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:25600', 
        ], $mensagens);

        // Atualizar os dados da notícia, exceto a imagem
        $user->update($request->except(['password', 'imagem', 'email_verified_at', 'remember_token']));

        if ($request->filled('password')) {
            $user['password'] = bcrypt($request->password);
            $user->save();
        }
        
        // Verificar se há uma nova imagem e fazer o upload
        if($request->hasFile('imagem')){
            // Deletar a imagem antiga, se existir
            if($user->imagem){
                Storage::delete($user->imagem);
            }

            $imagemOriginal = $request->file('imagem');
            $nomeOriginal = $imagemOriginal->getClientOriginalName();
            
            // Gerar um nome único para a imagem
            $nomeUnico = time() . '-' . $nomeOriginal;

            // Armazenar a nova imagem no diretório "upload" com o nome original e único
            $path = $request->imagem->storeAs('upload', $nomeUnico);

            // Atualizar o campo 'imagem' com o novo caminho
            $user->imagem = $path;
            $user->save();
        }

        return redirect()->route('admin.users.home')->with('success', 'Usuário editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);

        // Verificar se a notícia foi encontrada
        if ($user) {
            // Excluir a imagem associada, se existir
            if ($servico->imagem) {
                Storage::delete($servico->imagem);
            }
            // Excluir a notícia do banco de dados
            $user->delete();
            return redirect()->route('admin.users.home')->with('success', 'Usuário excluído com sucesso!');
        } else {
            // Se a notícia não for encontrada, redirecionar de volta com uma mensagem de erro
            return redirect()->route('admin.users.home')->with('error', 'Erro ao excluir Usuário. Usuário não encontrado.');
        }
    }
}
