
@extends('layout')
@section('title', 'Banco')

@push('metas')
    <meta itemprop="image" content="{{ asset('assets/images/img-social.jpg') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/img-social.jpg') }}">
    <link href="{{ asset('assets/images/img-social.jpg') }}" rel="image_src" />
    
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ $config->site }}">
    <meta property="og:title" content="{{ $config->titulo }}">
    <meta property="og:site_name" content="{{ $config->titulo }}">
    <meta property="og:description" content="{{ $config->description }}">
    <meta property="og:image" content="{{ asset('assets/images/img-social.jpg') }}">
    <meta property="og:image:alt" content="{{ $config->titulo }}">

    <meta name="twitter:title" content="{{ $config->titulo }}" />
    <meta name="twitter:description" content="{{ $config->description }}" />
    <meta name="twitter:url" content="{{ $config->site }}" />
    <meta name="twitter:image" content="{{ asset('assets/images/img-social.jpg') }}" />
@endpush

@section('conteudo')


@foreach ($bancos as $banco)
    <section style="background:{{ $banco->bg_cor }}">
        <div class="section-main" style="background: url('{{ url("storage/{$banco->bg_imagem}") }}') top center no-repeat">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    @if($loop->iteration % 2 == 0)

                        <!-- Imagem/Vídeo à esquerda e Texto à direita -->
						@if ($banco->imagem || $banco->video) 
                        <div class="col-lg-6 col-img text-center">
                            @if ($banco->imagem) 
                                <img src="{{ url("storage/{$banco->imagem}") }}" class="img-fluid" />
                            @endif

                            @if ($banco->video) 
                                <div class="ratio ratio-4x3">
                                    <iframe src="https://www.youtube.com/embed/{{ $banco->video }}?rel=0" allowfullscreen style="border-radius: 20px;
    box-shadow: 0px 0px 20px 0px rgb(0 0 0 / 60%);"></iframe>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <h2 style="color:{{ $banco->cor_titulo }}">
                                {{ $banco->titulo }}
                            </h2>
                            {!! $banco->descricao !!}
							
							@if ($banco->link) 
                                <div class="pt-30">
                                    <a href="{{ $banco->link }}" class="btn-m {{ $banco->cor_link }} mt-3">{{ $banco->titulo_link }}</a>
                                </div> 
                            @endif
                        </div>
						@else
						<div class="col-lg-12 text-center">
                            <h2 style="color:{{ $banco->cor_titulo }}">
                                {{ $banco->titulo }}
                            </h2>
                            {!! $banco->descricao !!}
							
							@if ($banco->link) 
                                <div class="pt-30">
                                    <a href="{{ $banco->link }}" class="btn-m {{ $banco->cor_link }} mt-3">{{ $banco->titulo_link }}</a>
                                </div> 
                            @endif
                        </div>
						@endif

                    @else

                        <!-- Texto à esquerda e Imagem/Vídeo à direita -->
						@if ($banco->imagem || $banco->video) 
                        <div class="col-lg-6">
                            <h2 style="color:{{ $banco->cor_titulo }}">
                                {{ $banco->titulo }}
                            </h2>
                            {!! $banco->descricao !!}

							@if ($banco->link) 
                            	<a href="{{ $banco->link }}" class="btn-m {{ $banco->cor_link }} mt-3">{{ $banco->titulo_link }}</a>
                            @endif
                        </div>
                        <div class="col-lg-6 col-img text-center">
                            @if ($banco->imagem) 
                                <img src="{{ url("storage/{$banco->imagem}") }}" class="img-fluid" />
                            @endif

                            @if ($banco->video) 
                                <div class="ratio ratio-4x3">
                                    <iframe src="https://www.youtube.com/embed/{{ $banco->video }}?rel=0" allowfullscreen style="border-radius: 20px;
    box-shadow: 0px 0px 20px 0px rgb(0 0 0 / 60%);"></iframe>
                                </div>
                            @endif
                        </div>
						@else
						<div class="col-lg-12 text-center">
                            <h2 style="color:{{ $banco->cor_titulo }}">
                                {{ $banco->titulo }}
                            </h2>
                            {!! $banco->descricao !!}
							
							@if ($banco->link)
                            <div class="pt-30">
                            	<a href="{{ $banco->link }}" class="btn-m {{ $banco->cor_link }} mt-3">{{ $banco->titulo_link }}</a>
                            </div> 
                            @endif
                        </div>
						@endif

                    @endif
                </div>
            </div>
        </div>
    </section>
@endforeach


@endsection
