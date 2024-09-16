<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $config = Config::first(); // Use 'get()' para recuperar todas as configurações
        return view('admin.config.home', compact('config'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string|int $id)
    {
        
        if (!$config = Config::find($id)) {
            return redirect()->back();
        }
        return view('admin.config.edit', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Config $config, string $id)
    {
        // Validação
        $request->validate([
            'titulo' => 'required|string|max:255',
            'rodape' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255 ',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'tiktok' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'google' => 'nullable|url',
            'endereco' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|url|max:255',
            'analytcs' => 'nullable|string',
            'maps' => 'nullable|string',
            'pixel' => 'nullable|string',
            'download' => 'nullable|url|max:255',
            'description' => 'nullable|string|max:255',
            'keywords' => 'nullable|string|max:255',
            'atendimento' => 'nullable|string|max:255',
            'site' => 'nullable|url|max:255',
            'imagem' => 'nullable|image|max:2048'
        ]);

        if (!$config = $config->find($id)) {
            return redirect()->back()->with('error', 'Configuração não encontrada.');
        }
        
        // Atualizar os dados da notícia, exceto a imagem
        $config->update($request->except('imagem'));

        // Verificar se há uma nova imagem e fazer o upload
        if($request->hasFile('imagem')){
            // Deletar a imagem antiga, se existir
            if($config->imagem){
                Storage::delete($config->imagem);
            }

            $imagemOriginal = $request->file('imagem');
            $nomeOriginal = $imagemOriginal->getClientOriginalName();
            
            // Gerar um nome único para a imagem
            $nomeUnico = time() . '-' . $nomeOriginal;

            // Armazenar a nova imagem no diretório "upload" com o nome original e único
            $path = $request->imagem->storeAs('upload', $nomeUnico);

            // Atualizar o campo 'imagem' com o novo caminho
            $config->imagem = $path;
            $config->save();
        }
        $config->save();

        return redirect()->route('admin.config.home')->with('success', 'Configurações editadas com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Config $config)
    {
        //
    }
}
