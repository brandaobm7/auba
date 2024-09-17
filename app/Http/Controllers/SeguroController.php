<?php

namespace App\Http\Controllers;

use App\Models\Seguro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class SeguroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seguros = Seguro::all();
        return view('admin.seguros.home', compact('seguros'));
    }

    public function getSeguros()
    {
        $seguros = Seguro::select(['id', 'imagem', 'titulo', 'created_at', 'updated_at'])->orderBy('created_at', 'desc');

        return DataTables::of($seguros)
            ->addColumn('action', function($query) { 
                return $botoes ="<div style='display: flex; justify-content: center;'><a href='". route('admin.seguros.edit', $query->id) ."' class='btn btn-primary btn-sm me-1'>Editar</a>
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
                                <form action='".route('admin.seguros.delete', $query->id)."' method='POST'>
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

        $seguro = $request->all();

        // Upload da primeira imagem (imagem)
        if($request->hasFile('imagem')) {
            $imagemOriginal = $request->file('imagem');
            $extensao = $imagemOriginal->getClientOriginalExtension();
            $nomeImagem = Str::slug($request->titulo) . '-' . time() . '.' . $extensao;
            $pathImagem = $request->imagem->storeAs('upload', $nomeImagem);
            $seguro['imagem'] = $pathImagem;
        }

        // Upload da segunda imagem (bg_imagem)
        if($request->hasFile('bg_imagem')) {
            $bgImagemOriginal = $request->file('bg_imagem');
            $extensaoBg = $bgImagemOriginal->getClientOriginalExtension();
            $nomeBgImagem = Str::slug($request->titulo) . '-bg-' . time() . '.' . $extensaoBg;
            $pathBgImagem = $request->bg_imagem->storeAs('upload', $nomeBgImagem);
            $seguro['bg_imagem'] = $pathBgImagem;
        }

        // Criar o registro no banco de dados
        $seguro = Seguro::create($seguro);

        return redirect()->route('admin.se$seguros.home')->with('success', 'Post cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seguro $seguro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seguro $seguro, string|int $id)
    {
        if (!$seguro = Seguro::find($id)) {
            return redirect()->back();
        }
        return view('admin.seguros.edit', compact('seguro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seguro $seguro, string $id)
    {
        if (!$seguro = $seguro->find($id)) {
            return redirect()->back();
        }

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

        // Excluir imagem principal, se solicitado
        if ($request->has('delete_imagem') && $seguro->imagem) {
            Storage::delete($seguro->imagem);
            $seguro->imagem = null;
        }

        // Excluir imagem de fundo, se solicitado
        if ($request->has('delete_bg_imagem') && $seguro->bg_imagem) {
            Storage::delete($seguro->bg_imagem);
            $seguro->bg_imagem = null;
        }

        // Atualizar os dados da notícia, exceto as imagens
        $seguro->update($request->except(['imagem', 'bg_imagem']));

        // Upload da nova imagem, se enviada
        if ($request->hasFile('imagem')) {
            if ($seguro->imagem) {
                Storage::delete($seguro->imagem);
            }

            $imagemOriginal = $request->file('imagem');
            $extensao = $imagemOriginal->getClientOriginalExtension();
            $nomeImagem = Str::slug($request->titulo) . '-' . time() . '.' . $extensao;
            $path = $request->imagem->storeAs('upload', $nomeImagem);
            $seguro->imagem = $path;
        }

        // Upload da nova imagem de fundo, se enviada
        if ($request->hasFile('bg_imagem')) {
            if ($seguro->bg_imagem) {
                Storage::delete($seguro->bg_imagem);
            }

            $bgImagemOriginal = $request->file('bg_imagem');
            $extensao = $bgImagemOriginal->getClientOriginalExtension();
            $nomeBgImagem = Str::slug($request->titulo) . '-fundo-' . time() . '.' . $extensao;
            $path = $request->bg_imagem->storeAs('upload', $nomeBgImagem);
            $seguro->bg_imagem = $path;
        }

        $seguro->save();

        return redirect()->route('admin.seguros.home')->with('success', 'Post atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $seguro = Seguro::find($id);

        // Verificar se a notícia foi encontrada
        if ($seguro) {
            // Excluir a imagem associada, se existir
            if ($seguro->imagem) {
                Storage::delete($seguro->imagem);
            }

            if ($home->bg_imagem) {
                Storage::delete($home->bg_imagem);
            }

            // Excluir a notícia do banco de dados
            $seguro->delete();
            return redirect()->route('admin.seguros.home')->with('success', 'Post excluído com sucesso!');
        } else {
            // Se a notícia não for encontrada, redirecionar de volta com uma mensagem de erro
            return redirect()->route('admin.seguros.home')->with('error', 'Erro ao excluir post. Post não encontrado.');
        }
    }
}
