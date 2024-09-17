
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ $config->site }}">

    <title>@yield('title') {{ $config->titulo }}</title>

    <meta name="description" content="{{ $config->description }}" />
    <meta name="keywords" content="{{ $config->keywords }}">
    <meta itemprop="name" content="{{ $config->titulo }}">
    @stack('metas')
    
    <meta name="csrf-token" content="{{csrf_token()}}" />
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	{!! $config->pixel !!}
	{!! $config->analytcs !!}
</head>

<body id="top">

                                
    <!--=============================== CONTEUDO ===============================-->
    @yield('conteudo')
    <!--=============================== END CONTEUDO ===============================-->        
	
    <!-- footer Start -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="mb-5">
						<img src="{{ url("assets/images/logo-footer.png") }}" alt="Logo {{ $config->titulo }}" class="img-fluid" style="max-height:70px">
					</div>
					<div class="md-5 text-center text-white">
						<p>{{ $config->endereco }} </p>
						<h1 class="text-white mb-3">{{ $config->phone }}</h1>
						<p>{{ $config->atendimento }}</p>
						<p>{{ $config->email }}</p>
					</div>
					<div class="mt-5 mb-5">
						@if ($config->whatsapp)
							<a href="{{ $config->whatsapp }}" target="_blank"><i class='fab fa-whatsapp'></i></a>
						@endif

						@if ($config->instagram)
							<a href="{{ $config->instagram }}" target="_blank"><i class='fab fa-instagram'></i></a>
						@endif

						@if ($config->facebook)
							<a href="{{ $config->facebook }}" target="_blank"><i class='fab fa-facebook'></i></a>
						@endif

						@if ($config->tiktok)
							<a href="{{ $config->tiktok }}" target="_blank"><i class='fab fa-tumblr'></i></a>
						@endif

						@if ($config->linkedin)
							<a href="{{ $config->linkedin }}" target="_blank"><i class='fab fa-linkedin'></i></a>
						@endif

						@if ($config->twitter)
							<a href="{{ $config->twitter }}" target="_blank"><i class='fab fa-twitter'></i></a>
						@endif

						@if ($config->youtube)
							<a href="{{ $config->youtube }}" target="_blank"><i class='fab fa-youtube'></i></a>
						@endif

						@if ($config->google)
							<a href="{{ $config->google }}" target="_blank"><i class='fab fa-google'></i></a>
						@endif
					</div>
				</div>
			</div>
		</div>		
		<div class="footer-copy">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center footer-copy-text">
						<script>
							document.write(new Date().getFullYear())
						</script> © Copyright, {{ $config->rodape }}
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- Barra no Cookies -->
    <div class="modal fade" id="myModalCookies" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="width: 100%;
        max-width: 100%;
        bottom: -10px;
        position: fixed;
        margin: 0px;
        border: 0px;">
        <div class="modal-content" style="border:none;">
            <div class="modal-body" style="display: grid;
        grid-template-columns: 5fr 1fr;
        grid-gap: 40px;
        align-items: center;
        padding: 30px 20px 35px 20px;">
            <!-- Conteúdo da barra no Cookies -->
            <p style="margin: 0px; font-size: 13px;">Utilizamos cookies e outras tecnologias semelhantes para melhorar sua experiência em nossa plataforma. Ao utilizar nossos serviços, 
            você concorda com nossos <a href="{{ route('pages.details', ['slug' => 'politica-de-privacidade']) }}" class="text-dark">Termos de Uso e Politica de Privacidade.</a></p> 
            <button type="button" class="btn btn-main round-full d-block m-20" id="btnAceitar">Aceito</button>
            </div>
        </div>
        </div>
    </div>

    <div class="wpp-fix right shake">   
        <a class="wpp-fix" href="{{ $config->whatsapp }}" target="_blank"> 
            <svg height="682pt" viewBox="-23 -21 682 682.667" width="682pt" xmlns="http://www.w3.org/2000/svg">
                <path d="M544.387 93.008C484.512 33.063 404.883.035 320.05 0 145.246 0 2.98 142.262 2.91 317.113c-.024 55.895 14.577 110.457 42.331 
                158.551L.25 640l168.121-44.102c46.324 25.27 98.477 38.586 151.55 38.602h.134c174.785 0 317.066-142.273 
                317.132-317.133.036-84.742-32.921-164.418-92.8-224.36zM320.05 580.94h-.11c-47.296-.02-93.683-12.73-134.16-36.742l-9.62-5.715-99.766 
                26.172 26.628-97.27-6.27-9.972c-26.386-41.969-40.32-90.476-40.296-140.281.055-145.332 118.305-263.57 263.7-263.57 70.406.023 136.59 
                27.476 186.355 77.3s77.156 116.051 77.133 186.485C583.582 462.69 465.34 580.94 320.05 580.94zm144.586-197.418c-7.922-3.968-46.883-23.132-54.149-25.78-7.258-2.645-12.547-3.962-17.824 
                3.968-5.285 7.93-20.469 25.781-25.094 31.066-4.625 5.29-9.242 5.953-17.168 1.985-7.925-3.965-33.457-12.336-63.726-39.332-23.555-21.012-39.457-46.961-44.082-54.89-4.617-7.938-.04-11.813 
                3.476-16.173 8.578-10.652 17.168-21.82 19.809-27.105 2.644-5.29 1.32-9.918-.664-13.883-1.977-3.965-17.824-42.969-24.426-58.84-6.437-15.445-12.965-13.36-17.832-13.601-4.617-.231-9.902-.278-15.187-.278-5.282 0-13.868 1.98-21.133 9.918-7.262 
                7.934-27.73 27.102-27.73 66.106s28.394 76.683 32.355 81.972c3.96 5.29 55.879 85.328 135.367 119.649 18.906 8.172 33.664 13.043 45.176 16.695 18.984 6.031 36.254 5.18 49.91 3.14 15.226-2.277 46.879-19.171 53.488-37.68 6.602-18.51 6.602-34.374 
                4.617-37.683-1.976-3.304-7.261-5.285-15.183-9.254zm0 0" fill-rule="evenodd">
                </path>
            </svg> 
        </a>
    </div>

    <!-- Main jQuery -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/cookies.js') }}"></script>
    @stack('scripts')
</body>
</html>