
@extends('layout')
@section('title', ''.$page->titulo.' |')
@push('metas')
    <meta itemprop="image" content="{{ url("storage/{$page->imagem}") }}" />
    <meta name="msapplication-TileImage" content="{{ url("storage/{$page->imagem}") }}" />
    <link href="{{ url("storage/{$page->imagem}") }}" rel="image_src" />

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ route('pages.details', $page->slug) }}" />
    <meta property="og:title" content="{{ $page->titulo }} | {{ $config->titulo }}" />
    <meta property="og:site_name" content="{{ $config->titulo }}" />
    <meta property="og:description" content="{!! Str::limit(strip_tags($page->descricao), 300, '...') !!}" />
    <meta property="og:image" content="{{ url("storage/{$page->imagem}") }}" />
    <meta property="og:image:alt" content="{{ $page->titulo }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <meta name="twitter:title" content="{{ $page->titulo }} | {{ $config->titulo }}" />
    <meta name="twitter:description" content="{!! Str::limit(strip_tags($page->descricao), 300, '...') !!}" />
    <meta name="twitter:url" content="{{ route('pages.details', $page->slug) }}" />
    <meta name="twitter:image" content="{{ url("storage/{$page->imagem}") }}" />
@endpush

@section('conteudo')

    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-3 text-white">{{ $page->titulo }}</h2>
        
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#93beff">{{ $page->titulo }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

     <!-- Quem Somos -->
	<section class="about">
        @if($page->slug == 'quem-somos')
        <div class="container">
			<div class="row align-items-center">
				@foreach ($allPages as $page)
                    @if($page->slug == 'quem-somos')			
					<div class="col-lg-5">
						<img src="{{ url("storage/{$page->imagem}") }}" alt="{{ $page->titulo }}" class="wow animate__animated animate__fadeInLeft img-fluid round" data-wow-delay="0.6s">
					</div>	
					<div class="col-lg-7">
						<div class="pl-4 mt-4 mb-4 mt-lg-0 wow animate__animated animate__fadeInRight" data-wow-delay="0.7s">
							<p class="mb-0 main-secondary-color">Quem somos</p>
							<h1 class="primary-color">{{ $page->titulo }}</h1>
							<h3>{{ $page->descricao }} </h3>
						</div>
					</div>
                    @endif
				@endforeach
			</div>
		</div>
        
        @elseif($page->slug == 'politica-de-privacidade')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                        
                    <p>{!! $page->descricao !!}</p>                                
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        @else
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <p>{!! $page->descricao !!}</p>
                </div><!-- /.col-lg -->
                
                <div class="col-lg-5">
                    <img src="{{ url("storage/{$page->imagem}") }}" alt="{{ $page->titulo }}" class="img-fluid"> 
                </div><!-- /.col-lg -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        @endif
		
	</section>
	<!-- ./end Quem Somos -->

@endsection