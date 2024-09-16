<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Seguro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PainelController extends Controller
{

    public function index(){
        $homes = Home::all();
        $seguros = Seguro::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.painel', compact('seguros', 'homes'));
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
