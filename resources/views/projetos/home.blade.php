
@extends('layout')
@section('title', 'Projetos e Indicações |')

@push('metas')
    <meta itemprop="image" content="{{ asset('assets/images/img-social.jpg') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/img-social.jpg') }}">
    <link href="{{ asset('assets/images/img-social.jpg') }}" rel="image_src" />
    
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ route('noticias.home') }}">
    <meta property="og:title" content="Projetos e Indicações | {{ $config->titulo }}">
    <meta property="og:site_name" content="{{ $config->titulo }}">
    <meta property="og:description" content="{{ $config->description }}">
    <meta property="og:image" content="{{ asset('assets/images/img-social.jpg') }}">
    <meta property="og:image:alt" content="{{ $config->titulo }}">

    <meta name="twitter:title" content="Projetos e Indicações | {{ $config->titulo }}" />
    <meta name="twitter:description" content="{{ $config->description }}" />
    <meta name="twitter:url" content="{{ route('noticias.home') }}" />
    <meta name="twitter:image" content="{{ asset('assets/images/img-social.jpg') }}" />
@endpush

@section('conteudo')

    <section class="pt-50 pb-30 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-3 text-white">Projetos e Indicações</h2>
        
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('projetos.home') }}" class="text-white">Projetos e Indicações</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
          
    <!-- Projetos -->
	<section class="pt-50 pb-100">
		<div class="container">
			<div class="row">

				@foreach ($projetos as $projeto)
				<div class="col-lg-4 col-md-4 mb-4">
					<div class="card  round-0 wow animate__animated animate__fadeInDown" data-wow-delay="0.7s">
						<div class="card-body">
						  <h5 class="card-title">{{ $projeto->titulo }}</h5>
						  <p class="card-text text-sm">{!! Str::limit(strip_tags($projeto->descricao), 100, '...') !!} 
							<a href="" data-bs-toggle="modal" data-bs-target="#projetosModal{{ $projeto->id }}">Leia Mais</a>
						  </p>
						</div>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="projetosModal{{ $projeto->id }}" tabindex="-1" aria-labelledby="projetosModal{{ $projeto->id }}Label" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="projetosModal{{ $projeto->id }}Label">{{ $projeto->titulo }}</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								{!! $projeto->descricao !!}
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Fechar</button>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>

            <div class="row">
                <div class="col-lg-12">
                    {{ $projetos->links('custom.pagination') }}    
                </div>
            </div>

		</div>
	</section>
	<!-- /end Blog -->
            
@endsection