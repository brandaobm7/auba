
@extends('layout')
@section('title', ''.$noticia->titulo.' |')
@php
    $date = $noticia->created_at;
    $year = $date->year;
    $month = $date->format('m'); // Usa dois dígitos para o mês
@endphp
@push('metas')
    <meta itemprop="image" content="{{ url(resize_image($noticia->imagem, 473, 315)) }}" />
    <meta name="msapplication-TileImage" content="{{ url(resize_image($noticia->imagem, 473, 315)) }}" />
    <link href="{{ url(resize_image($noticia->imagem, 473, 315)) }}" rel="image_src" />

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}" />
    <meta property="og:title" content="{{ $noticia->titulo }} | {{ $config->titulo }}" />
    <meta property="og:site_name" content="{{ $config->titulo }}" />
    <meta property="og:description" content="{!! Str::limit(strip_tags($noticia->descricao), 315, '...') !!}" />
    <meta property="og:image" content="{{ url(resize_image($noticia->imagem, 473, 315)) }}" />
    <meta property="og:image:alt" content="{{ $noticia->titulo }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <meta name="twitter:title" content="{{ $noticia->titulo }} | {{ $config->titulo }}" />
    <meta name="twitter:description" content="{!! Str::limit(strip_tags($noticia->descricao), 315, '...') !!}" />
    <meta name="twitter:url" content="{{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}" />
    <meta name="twitter:image" content="{{ url(resize_image($noticia->imagem, 473, 315)) }}" />
@endpush

@section('conteudo')

    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-3 text-white">{{ $noticia->titulo }}</h2>
        
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('noticias.home') }}" class="text-white">Blog da Barreto</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#93beff">{{ $noticia->titulo }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="blog-details">                    
                        <img src="{{ url("storage/{$noticia->imagem}") }}" alt="{{ $noticia->titulo }}" class="w-100">
                        <div class="mt-3">
                            <div class="mb-3">
                                <span class="text-w700 mr-3"><i class="far fa-calendar-alt me-2"></i> {{ formatDate($noticia->created_at) }}</span>

                                <ul class="float-end list-inline">
                                    <li class="list-inline-item"> Compartilhar: </li>
                              
                                    <li class="list-inline-item"><a href="javascript: void(0);" onclick="window.open('https://www.facebook.com/sharer.php?u={{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}', 'toolbar=0, status=0, width=650, height=450');"><i class="fab fa-facebook"></i></a></li>

                                    <li class="list-inline-item"><a href="javascript: void(0);" onclick="window.open('https://twitter.com/intent/tweet?original_referer={{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}&source=tweetbutton&text={{ $noticia->titulo }}&url={{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}', 'toolbar=0, status=0, width=650, height=450');"><i class="fab fa-twitter"></i></a></li>
                                            
                                    <li class="list-inline-item"><a href="javascript: void(0);" onclick="window.open('https://api.whatsapp.com/send?text={{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}', 'toolbar=0, status=0, width=650, height=450');"><i class="fab fa-whatsapp"></i></a></li>
                                            
                                    <li class="list-inline-item"><a href="javascript: void(0);" onclick="window.open('https://t.me/share/url?url={{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}&text={{ $noticia->titulo }}', 'toolbar=0, status=0, width=650, height=450');"><i class="fab fa-telegram"></i></a></li>
                                </ul>
                            </div> 
            
                            <hr>
            
                            {!! $noticia->descricao !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
            
@endsection