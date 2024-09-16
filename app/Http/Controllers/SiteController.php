<?php

namespace App\Http\Controllers;

use App\Models\Destaque;
use App\Models\Noticia;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index()
    {
        $destaques = Destaque::where('exibir', 'Sim')->get();
        $noticias = Noticia::where('exibir', 'Sim')
                                ->orderBy('created_at', 'desc')
                                ->paginate(3);
        $pagesToShow = Page::where('exibir', 'Sim')->get();
        $allPages = Page::all();
        return view('home', compact('destaques', 'noticias', 'pagesToShow', 'allPages'));
    }

    public function busca(Request $request, $year = null, $month = null, $slug = null)
    {
        $keyword = $request->input('keyword');

        // Buscar notícias
        $noticiasQuery = Noticia::where(function($query) use ($keyword) {
                                    $query->where('titulo', 'like', "%{$keyword}%")
                                        ->orWhere('descricao', 'like', "%{$keyword}%");
                                });

        if ($year) {
            $noticiasQuery->whereYear('created_at', $year);
        }

        if ($month) {
            $noticiasQuery->whereMonth('created_at', $month);
        }

        if ($slug) {
            $noticiasQuery->where('slug', $slug);
        }

        $noticias = $noticiasQuery->get();

        // Buscar Equipes
        // $equipes = Equipe::where(function($query) use ($keyword) {
        //     $query->where('titulo', 'like', "%{$keyword}%")
        //         ->orWhere('descricao', 'like', "%{$keyword}%");
        //     })
        //     ->get();

        $pagesToShow = Page::where('exibir', 'Sim')->get();
        $allPages = Page::all();
        return view('busca', compact('noticias', 'keyword', 'year', 'month', 'pagesToShow', 'allPages'));
    }

    public function cimento()
    {
        $pagesToShow = Page::where('exibir', 'Sim')->get();
        $allPages = Page::all();
        return view('cimento', compact('pagesToShow', 'allPages'));
    }

    public function contato()
    {
        $pagesToShow = Page::where('exibir', 'Sim')->get();
        $allPages = Page::all();
        return view('contato', compact('pagesToShow', 'allPages'));
    }

    public function noticias()
    {
        $pagesToShow = Page::where('exibir', 'Sim')->get();
        $allPages = Page::all();
        $noticias = Noticia::where('exibir', 'Sim')
                                ->orderBy('created_at', 'desc')
                                ->paginate(10);
        return view('noticias.home', compact('noticias', 'pagesToShow', 'allPages',));
    }

    public function detailsNoticias($year, $month, $slug)
    {
        $pagesToShow = Page::where('exibir', 'Sim')->get();
        $allPages = Page::all();
        $noticia = Noticia::where('exibir', 'Sim')
                            ->whereYear('created_at', $year)
                            ->whereMonth('created_at', $month)
                            ->where('slug', $slug)
                            ->firstOrFail();
        return view('noticias.details', compact('noticia', 'pagesToShow', 'allPages',));
    }

    public function detailsPages($slug)
    {
        $pagesToShow = Page::where('exibir', 'Sim')->get();
        $allPages = Page::all();
        $page = Page::where('slug', $slug)
                            ->firstOrFail();
        return view('pages.details', compact('page', 'pagesToShow', 'allPages',));
    }

}
