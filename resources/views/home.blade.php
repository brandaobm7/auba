
@extends('layout')
@section('title', '')

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

<div class="col-lg-12 text-center mb-5">
	<a class="navbar-brand" href="{{ route('/') }}">
		<img src="{{ url("storage/{$config->imagem}") }}" alt="Logo {{ $config->titulo }}" class="img-fluid" style="max-height:50px">
	</a>
</div>

@foreach ($homes as $home)
	<section style="background:{{ $home->bg_cor }}" >
		<div class="p-100" style="background-image: url('{{ url("storage/{$home->bg_imagem}") }}')">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h1>
							{{ $home->titulo }}
						</h1>
						<p>
							{!! $home->descricao !!}	
						</p>

						<a href="{{ $home->link }}" class="btn-m btn-main mt-3">{{ $home->titulo_link }}</a>
					</div>
					<div class="col-lg-6">
						@if ($home->imagem) 
							<img src="{{ url("storage/{$home->bg_imagem}") }}" class="img-fluid" />
						@else 
							
						@endif

						@if ($home->video) 
							<div class="ratio ratio-4x3">
								<iframe src="https://www.youtube.com/embed/{{ $home->video }}?rel=0" title="YouTube video" allowfullscreen></iframe>
							</div>
						@else 
							
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>
@endforeach

	<div class="moving-container"></div>
@endsection