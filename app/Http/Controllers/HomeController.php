<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homes = Home::all();
        return view('admin.homes.home', compact('homes'));
    }

    public function getHomes()
    {
        $homes = Home::select(['id', 'imagem', 'titulo', 'created_at', 'updated_at'])->orderBy('created_at', 'desc');

        return DataTables::of($homes)
            ->addColumn('action', function($query) { 
                return $botoes ="<div style='display: flex; justify-content: center;'><a href='". route('admin.homes.edit', $query->id) ."' class='btn btn-primary btn-sm me-1'>Editar</a>
                <a href='delete-$query->id' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#delete-$query->id'><i class='dripicons-trash'></i></a></div>
                <!-- Danger Alert Modal -->
                <div id='delete-$query->id' class='modal fade' tabindex='-1' role='dialog' aria-hidden='true'>
                <div class='modal-dialog modal-sm'>
                    <div class='modal-content modal-filled bg-danger'>
                        <div class='modal-body p-4'>
                            <div class='text-center'>
                                <i class='dripicons-wrong h1 text-white'></i>
                                <h4 class='mt-2 text-white'>ATENÇÃO</h4>
                                <p class='mt-3 text-white'>Tem certeza que deseja excluir: <br> <strong>$query->titulo</strong></p>
                                <form action='".route('admin.homes.delete', $query->id)."' method='POST'>
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
            ->rawColumns(['imagem','titulo','created_at','action'])
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
        $request->validate([
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:25600',
            'bg_imagem' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:25600',
        ], [
            'imagem.image' => 'O arquivo deve ser uma imagem.',
            'imagem.mimes' => 'A imagem deve ser um arquivo do tipo: jpg, jpeg, png, gif.',
            'imagem.max' => 'A imagem não pode ser maior que 25 MB.',
            'bg_imagem.image' => 'O arquivo deve ser uma imagem.',
            'bg_imagem.mimes' => 'A imagem deve ser um arquivo do tipo: jpg, jpeg, png, gif.',
            'bg_imagem.max' => 'A imagem de fundo não pode ser maior que 25 MB.',
        ]);

        $home = $request->all();

        // Upload da primeira imagem (imagem)
        if($request->hasFile('imagem')) {
            $imagemOriginal = $request->file('imagem');
            $extensao = $imagemOriginal->getClientOriginalExtension();
            $nomeImagem = Str::slug($request->titulo) . '-' . time() . '.' . $extensao;
            $pathImagem = $request->imagem->storeAs('upload', $nomeImagem);
            $home['imagem'] = $pathImagem;
        }

        // Upload da segunda imagem (bg_imagem)
        if($request->hasFile('bg_imagem')) {
            $bgImagemOriginal = $request->file('bg_imagem');
            $extensaoBg = $bgImagemOriginal->getClientOriginalExtension();
            $nomeBgImagem = Str::slug($request->titulo) . '-bg-' . time() . '.' . $extensaoBg;
            $pathBgImagem = $request->bg_imagem->storeAs('upload', $nomeBgImagem);
            $home['bg_imagem'] = $pathBgImagem;
        }

        // Criar o registro no banco de dados
        $home = Home::create($home);

        return redirect()->route('admin.homes.home')->with('success', 'Post cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home, string|int $id)
    {
        if (!$home = Home::find($id)) {
            return redirect()->back();
        }
        return view('admin.homes.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home, string $id)
    {
        if (!$home = $home->find($id)) {
            return redirect()->back();
        }

        $request->validate([
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:25600', 
        ], [
            'imagem.image' => 'O arquivo deve ser uma imagem.',
            'imagem.mimes' => 'A imagem deve ser um arquivo do tipo: jpg, jpeg, png, gif.',
            'imagem.max' => 'A imagem não pode ser maior que 2 MB.',
        ]);

        // Atualizar os dados da notícia, exceto a imagem
        $home->update($request->except('imagem'));

        // Verificar se há uma nova imagem e fazer o upload
        if($request->hasFile('imagem')){
            // Deletar a imagem antiga, se existir
            if($home->imagem){
                Storage::delete($home->imagem);
            }

            $imagemOriginal = $request->file('imagem');
            $extensao = $imagemOriginal->getClientOriginalExtension();
            
            // Gerar um nome para a imagem a partir do título da notícia
            $nomeImagem = Str::slug($request->titulo) . '-' . time() . '.' . $extensao;

            // Armazenar a imagem no diretório "upload" com o novo nome
            $path = $request->imagem->storeAs('upload', $nomeImagem);

            // Atualizar o campo 'imagem' com o novo caminho
            $home->imagem = $path;
            $home->save();
        }

        return redirect()->route('admin.homes.home')->with('success', 'Post editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $home = Home::find($id);

        // Verificar se a notícia foi encontrada
        if ($home) {
            // Excluir a imagem associada, se existir
            if ($home->imagem) {
                Storage::delete($home->imagem);
            }

            // Excluir a notícia do banco de dados
            $home->delete();
            return redirect()->route('admin.homes.home')->with('success', 'Post excluído com sucesso!');
        } else {
            // Se a notícia não for encontrada, redirecionar de volta com uma mensagem de erro
            return redirect()->route('admin.homes.home')->with('error', 'Erro ao excluir post. Post não encontrado.');
        }
    }
}
