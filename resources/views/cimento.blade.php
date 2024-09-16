
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

    <section class="p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-12 text-center">
                <img class="img-fluid" src="{{ asset('assets/images/banner_cimento.jpg') }}" alt="">
                <div class="w-100">
                    <a href="{{ $config->whatsapp }}" class="btn btn-main round-full py-3 px-5 text-uppercase text-w700  wow animate__animated animate__fadeInDown" data-wow-delay="0.5s" style="margin-top: -30px;"><i class="fab fa-whatsapp"></i> COMPRE CIMENTO</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Videos Start -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/nKwwjTLTrMk?rel=0" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/bM3e6yB-Im4?rel=0" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/xf3bVCpjHYU?rel=0" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./end Videos -->

	<!-- Cimento -->
	<section class="cimento">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-5 wow animate__animated animate__fadeInLeft" data-wow-delay="0.8s">
                    <h4>A Barreto está a 30 anos no mercado do cimento. <br>
                        Nós nascemos a partir do cimento, nas rodas de um caminhão, e hoje atendemos Jequié e região, com mais de 20 cidades.<br>
                        Compromisso e seriedade são marca do nosso trabalho. </h4>
                        <h3>Por isso, falou em credibilidade, e em Cimento Montes Claros, falou em Barreto Material de Construção. <br>
                            Centro- Jequié</h3>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeInRight" data-wow-delay="0.8s">
                    <img class="img-fluid rounded" src="{{ asset('assets/images/reiscimento.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
	<!-- ./end Cimento -->

    <section class="bg-silver py-5">
        <div class="container-xxl" id="atendimento">
            <div class="container">
                <div class="row g-5">
                    
                    <div class="col-lg-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.6s">
                        <h2 class="mb-4">Compre cimento Montes Claros pelo atendimento online</h2>
                    </div>
    
                    <div class="col-lg-6 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
                        <a class="btn btn-main-2 round-full py-3 px-5 mt-3 text-uppercase text-w700" href="{{ $config->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i> Clique Aqui</a>
                    </div>
    
                </div>
            </div>
        </div>
    </section>

@endsection