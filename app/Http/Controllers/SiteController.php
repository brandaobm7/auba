<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Banco;
use App\Models\Consorcio;
use App\Models\Saude;
use App\Models\Seguro;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index()
    {
        $homes = Home::where('exibir', 'Sim')->get();
        return view('home', compact('homes'));
    }

    public function bancos()
    {
        $bancos = Banco::where('exibir', 'Sim')->get();
        return view('bancos', compact('bancos'));
    }

    public function consorcios()
    {
        $consorcios = Consorcio::where('exibir', 'Sim')->get();
        return view('consorcios', compact('consorcios'));
    }

    public function saudes()
    {
        $saudes = Saude::where('exibir', 'Sim')->get();
        return view('saudes', compact('saudes'));
    }

    public function seguros()
    {
        $seguros = Seguro::where('exibir', 'Sim')->get();
        return view('seguros', compact('seguros'));
    }

}
