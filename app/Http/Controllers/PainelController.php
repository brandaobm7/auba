<?php

namespace App\Http\Controllers;

use App\Models\Destaque;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PainelController extends Controller
{

    public function index(){
        $destaques = Destaque::all();
        $noticias = Noticia::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.painel', compact('noticias', 'destaques'));
    }

    public function upload(Request $request)
    {
       if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->storeAs('upload', $fileName);

            $url = asset('storage/upload/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
