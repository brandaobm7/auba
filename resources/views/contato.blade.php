
@extends('layout')
@section('title', 'Contato')

@push('metas')
    <meta itemprop="image" content="{{ asset('assets/images/img-social.jpg') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/img-social.jpg') }}">
    <link href="{{ asset('assets/images/img-social.jpg') }}" rel="image_src" />
    
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ $config->site }}">
    <meta property="og:title" content="Contato | {{ $config->titulo }}">
    <meta property="og:site_name" content="{{ $config->titulo }}">
    <meta property="og:description" content="{{ $config->description }}">
    <meta property="og:image" content="{{ asset('assets/images/img-social.jpg') }}">
    <meta property="og:image:alt" content="{{ $config->titulo }}">

    <meta name="twitter:title" content="Contato | {{ $config->titulo }}" />
    <meta name="twitter:description" content="{{ $config->description }}" />
    <meta name="twitter:url" content="{{ $config->site }}" />
    <meta name="twitter:image" content="{{ asset('assets/images/img-social.jpg') }}" />
@endpush

@section('conteudo')

	<section class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="mb-3 text-white">Atendimento</h2>
		
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('/') }}" class="text-white">Home</a></li>
						<li class="breadcrumb-item active"><a href="{{ route('contato.home') }}" class="text-white">Atendimento</a></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<!-- Atendimento -->
	<section class="atendimento pb-80">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow animate__animated animate__fadeInLeft" data-wow-delay="0.5s"> 
                    <h1 class="mb-2 primary-color">atendimento Online</h1>
                    <h3>Precisa de ajuda?<br>Estamos online e aguardando o seu contato!</h3>
                    <a class="btn-m btn-main round-full mt-2" href="{{ $config->whatsapp }}" target="_blank">Clique Aqui</a>
                    <div class="row mt-5">
                        <div class="col-lg-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-light rounded d-flex align-items-center p-4 mb-4">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                                    <i class="fa fa-phone-alt primary-color"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Whatsapp/Telefone</p>
                                    <h5 class="mb-0">(73) 3528-8750</h5>
                                </div>
                            </div>
                            <div class="bg-light rounded d-flex align-items-center p-4">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                                    <i class="fa fa-envelope-open primary-color"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Email de atendimento</p>
                                    <h5 class="mb-0 font-mail">atendimento@barretoconstrucao.com.br</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow animate__animated animate__fadeInRight" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('assets/images/about-3.jpg') }}" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('assets/images/about-4.jpg') }}" alt="" style="margin-top: -25%;">
                    </div>
                </div>

            </div>
        </div>
    </section>
	<!-- ./end Atendimento -->

	<div class="google-map ">
		{!! $config->maps !!}
	</div> 
@endsection