
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
    <!-- Slider Start -->
	<section class="slider">
		<div id="carouselExample" class="carousel slide">
			<div class="carousel-inner wow animate__animated animate__fadeInRight img-fluid" data-wow-delay="0.5s"> 
			  
				@foreach ($destaques as $index => $destaque) 
					<div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
						<img src="{{ url("storage/{$destaque->imagem}") }}" class="d-block img-fluid" data-wow-delay="0.5s" alt="{{ $destaque->titulo }}">					
					</div>
				@endforeach

			</div>
		    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		  </div>
	</section>
	<!-- ./end Slider -->

	<!-- Loja Online -->
	<section class="store">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 pt-20 pb-10 text-center align-self-center wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s">
					<h2 class="text-white">
						Você pode fazer suas compras totalmente online, no conforto da sua casa!
					</h2>
					<a href="#" class="btn-m btn-main-3 round-full wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">CLique Aqui</a>
				</div>
				<div class="col-lg-2 col-6 pt-20 text-center">
					<img src="{{ asset('assets/images/mascote_barreto.png') }}" alt="" class="wow animate__animated animate__fadeInLeft img-fluid round" data-wow-delay="0.8s">
				</div>
			</div>
		</div>
	</section>
	<!-- ./end Loja Online -->

	<div class="moving-container"></div>

	<!-- Quem Somos -->
	<section class="about">
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
							<h3>{!! Str::limit(strip_tags($page->descricao), 430, '...') !!} </h3>
						</div>
						<a href="{{ route('pages.details', ['slug' => 'quem-somos']) }}" class="btn-m btn-main round-full wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">Conheça Nossa História</a>
					</div>
                    @endif
				@endforeach
			</div>
		</div>
	</section>
	<!-- ./end Quem Somos -->
	
	<!-- Redes Sociais -->
	<section class="social">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 social-text text-center pt-80 pb-50">
					<h1 class="text-white wow animate__animated animate__zoomIn text-center" data-wow-delay="0.6s">
						siga as nossas redes sociais</h1>

					<div class="d-flex justify-content-between p-40 wow animate__animated animate__fadeInDown" data-wow-delay="0.7s">
						<a href="https://www.facebook.com/BarretoMaterialDeConstrucao/" target="_blank" style="display: flex; flex-direction: column; align-items: center;">
							<div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px; font-size: 30px;">
								<i class="fab fa-instagram main-color-primary"></i>
							</div>
							<p class="text-white mt-2 mb-2">Instagram</p>
						</a>
						<a href="https://www.facebook.com/BarretoMaterialDeConstrucao/" target="_blank" style="display: flex; flex-direction: column; align-items: center;">
							<div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px; font-size: 30px;">
								<i class="fab fa-facebook-f main-color-primary"></i>
							</div>
							<p class="text-white mt-2 mb-2">Facebook</p>
						</a>
						<a href="https://www.facebook.com/BarretoMaterialDeConstrucao/" target="_blank" style="display: flex; flex-direction: column; align-items: center;">
							<div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px; font-size: 30px;">
								<i class="fab fa-linkedin-in main-color-primary"></i>
							</div>
							<p class="text-white mt-2 mb-2">Linkedin</p>
						</a>
					</div>
				</div>
				<div class="col-lg-6 pe-lg-0 ">
					<div class="position-relative h-100">
                        <img src="{{ asset('assets/images/feature.jpg') }}" style="object-fit: cover;" class="position-absolute img-fluid w-100 h-100 wow animate__animated animate__fadeInRight" data-wow-delay="0.8s" >
                    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./end Redes Sociais -->

	<!-- Atendimento -->
	<section class="atendimento">
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

	<!-- Blog -->
	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4">
					<h2 class="primary-color wow animate__animated animate__zoomIn text-center" data-wow-delay="0.5s">Blog da Barreto</h2>
				</div>

				@foreach ($noticias as $noticia)
				@php
					$date = $noticia->created_at;
					$year = $date->year;
					$month = $date->format('m'); // Usa dois dígitos para o mês
				@endphp			
				<div class="col-lg-4 col-md-4 mb-3 wow animate__animated animate__fadeInDown" data-wow-delay="0.6s">
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

				<div class="col-lg-12 text-center">
					<a href="{{ route('noticias.home') }}" class="btn-m btn-main btn-sm round-full">Mais novidades</a>
				</div>
			</div>
		</div>
	</section>
	<!-- ./end Blog -->
@endsection