
@extends('layout')
@section('title', 'Blog |')

@push('metas')
    <meta itemprop="image" content="{{ asset('assets/images/img-social.jpg') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/img-social.jpg') }}">
    <link href="{{ asset('assets/images/img-social.jpg') }}" rel="image_src" />
    
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ route('noticias.home') }}">
    <meta property="og:title" content="Blog | {{ $config->titulo }}">
    <meta property="og:site_name" content="{{ $config->titulo }}">
    <meta property="og:description" content="{{ $config->description }}">
    <meta property="og:image" content="{{ asset('assets/images/img-social.jpg') }}">
    <meta property="og:image:alt" content="{{ $config->titulo }}">

    <meta name="twitter:title" content="Blog | {{ $config->titulo }}" />
    <meta name="twitter:description" content="{{ $config->description }}" />
    <meta name="twitter:url" content="{{ route('noticias.home') }}" />
    <meta name="twitter:image" content="{{ asset('assets/images/img-social.jpg') }}" />
@endpush

@section('conteudo')

    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-3 text-white">Blog da Barreto</h2>
        
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('noticias.home') }}" class="text-white">Blog da Barreto</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
          
    <!-- Blog -->
	<section class="pt-50 pb-100">
		<div class="container">
			<div class="row">

				@foreach ($noticias as $noticia)
				@php
					$date = $noticia->created_at;
					$year = $date->year;
					$month = $date->format('m'); // Usa dois dígitos para o mês
				@endphp			
				<div class="col-lg-4 col-md-4 mb-3">
					<div class="card mb-5 round">
						<a href="{{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}">
							<img src="{{ url(resize_image($noticia->imagem, 430, 300)) }}" alt="{{ $noticia->titulo }}" class="card-img-top img-fluid round">
						</a>
						<div class="card-body">
							<small><i class="far fa-calendar-alt me-1"></i> {{ formatDate($noticia->created_at) }}</small>
							<h5 class="card-title mt-2">
								<a href="{{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}">
									{{ $noticia->titulo }}
								</a>
							</h5>
						</div>
					</div>
				</div>
				@endforeach

			</div>

            <div class="row">
                <div class="col-lg-12">
                    {{ $noticias->links('custom.pagination') }}    
                </div>
            </div>

		</div>
	</section>
	<!-- /end Blog -->
            
@endsection