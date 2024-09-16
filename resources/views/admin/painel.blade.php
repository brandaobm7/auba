@extends('admin.layout')
@section('title', 'Painel')

@section('conteudo')
@php
    use Carbon\Carbon;
    Carbon::setLocale('pt_BR');
@endphp
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
      <div class="col-lg-12">
          @if ($mensagem = Session::get('error'))
              <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ $mensagem }}
              </div>
          @endif

          @if ($mensagem = Session::get('success'))
              <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ $mensagem }}
              </div>
          @endif

          @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ $error }}
                  </div>
              @endforeach
          @endif
      </div>
    </div>

    <!--============================ TABELA DE CONTEUDO ============================-->

    <div class="row">
        <!-- start profile info -->
        <div class="col-lg-3">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-end" style=" position: absolute; right: 25px; ">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{ route('admin.users.edit', auth()->user()->id) }}" class="dropdown-item">Editar Conta</a>
                        </div>
                    </div>

                    @if($img = auth()->user()->imagem)
                            <img class="rounded-circle avatar-lg img-thumbnail"src="{{ asset("storage/{$img}") }}" alt="{{ auth()->user()->name }}" height="48"/>
                        @else
                            <img class="rounded-circle avatar-lg img-thumbnail"src="{{ asset('dash/assets/images/users/user-1.jpg') }}" alt="{{ auth()->user()->name }}" height="48">
                        @endif

                    <h4 class="mb-0">{{ auth()->user()->name }}</h4>
                    <p class="text-muted">Admin</p>

                    <div class="text-start mt-3">
                        @if(auth()->user()->phone)
                        <p class="text-muted mb-2 font-13"><strong>Telefone :</strong><span class="ms-2">{{ auth()->user()->phone }}</span></p>
                        @else
                        @endif
                        
                        @if(auth()->user()->email)
                        <p class="text-muted mb-2 font-13"><strong>Email :</strong><span class="ms-2">{{ auth()->user()->email }}</span></p>
                        @else
                        @endif
                    </div>                                    

                    <ul class="social-list list-inline mt-3 mb-0">
                        @if(auth()->user()->instagram)
                        <li class="list-inline-item">
                            <a href="{{ auth()->user()->instagram }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class='mdi mdi-instagram font-16 me-1'></i></a>
                        </li>
                        @else
                        @endif

                        @if(auth()->user()->facebook)
                        <li class="list-inline-item">
                            <a href="{{ auth()->user()->facebook }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class='mdi mdi-facebook font-16 me-1'></i></a>
                        </li>
                        @else
                        @endif

                        @if(auth()->user()->linkedin)
                        <li class="list-inline-item">
                            <a href="{{ auth()->user()->linkedin }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class='mdi mdi-linkedin font-16 me-1'></i></a>
                        </li>
                        @else
                        @endif
                    </ul>   
                </div>
            </div>
        </div>
        <!-- end profile info -->

        <!-- start config info -->
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{ route('admin.config.edit', $config->id) }}" class="dropdown-item">Editar Configurações</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <img class="d-flex align-items-start rounded me-2" src="{{ asset(url("storage/{$config->imagem}")) }}" alt="Logo {{ $config->titulo }}" width="150">
                        <div class="w-100 ps-1">
                            <h3 class="mt-1 mb-0">{{ $config->titulo }}</h3>
                            <h4 class="mb-1 mt-1 text-muted">{{ $config->rodape }}</h4>
                            @if ($config->phone)
                            <h5 class="mt-1 mb-0">Telefone: {{ $config->phone }}</h5>
                            @endif
                            @if ($config->email)
                            <h5 class="mb-1 mt-1 text-muted">Email: {{ $config->email }}</h5>
                            @endif
                            @if ($config->whatsapp)
                            <p class="mb-1 mt-1 text-muted">Whatsapp: <a href="{{ $config->whatsapp }}" target="_blank">{{ $config->whatsapp }}</a></p>
                            @endif
                            <p class="mb-3 mt-1 text-muted">URL do Site: <a href="{{ $config->site }}" target="_blank">{{ $config->site }}</a></p>

                            @if ($config->atendimento)
                            <p class="mb-1 mt-1 text-muted">Atendiemnto: {{ $config->atendimento }}</p>
                            @endif

                            <ul class="social-list list-inline mt-3 mb-0">
                                @if ($config->instagram)
                                <li class="list-inline-item">
                                    <a href="{{ $config->instagram }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-instagram"></i></a>
                                </li>
                                @endif

                                @if ($config->facebook)
                                <li class="list-inline-item">
                                    <a href="{{ $config->facebook }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                @endif

                                @if ($config->linkedin)
                                <li class="list-inline-item">
                                    <a href="{{ $config->linkedin }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-linkedin"></i></a>
                                </li>
                                @endif

                                @if ($config->youtube)
                                <li class="list-inline-item">
                                    <a href="{{ $config->youtube }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-youtube"></i></a>
                                </li>
                                @endif

                                @if ($config->tiktok)
                                <li class="list-inline-item">
                                    <a href="{{ $config->tiktok }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class="fab fa-tumblr"></i></a>
                                </li>
                                @endif

                                @if ($config->google)
                                <li class="list-inline-item">
                                    <a href="{{ $config->google }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-google"></i></a>
                                </li>
                                @endif

                                @if ($config->twitter)
                                <li class="list-inline-item">
                                    <a href="{{ $config->twitter }}" target="_blank" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end config info -->
    </div>

    <div class="row">
        <!-- destaques -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Destaques</h4>

                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-centered m-0">

                            <thead class="table-light">
                                <tr>
                                    <th colspan="2">Título</th>
                                    <th class="text-center">Data</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($destaques as $destaque) 
                                @php
                                    $date = $destaque->created_at;
                                    $formattedDate = Carbon::parse($date)->translatedFormat('d \d\e F \d\e Y');
                                @endphp     
                                <tr>
                                    <td style="width: 36px;">
                                        <img src="{{ url("storage/{$destaque->imagem}") }}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </td>

                                    <td>
                                        <h5 class="m-0 fw-normal">{{ $destaque->titulo }}</h5>
                                    </td>

                                    <td class="text-center">
                                        {{ formatDate($destaque->created_at) }}
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('admin.destaques.edit', $destaque->id) }}" class="btn btn-primary btn-sm me-1">Editar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end destaques -->

        <!-- noticias -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Notícias</h4>

                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-centered m-0">

                            <thead class="table-light">
                                <tr>
                                    <th colspan="2">Título</th>
                                    <th class="text-center">Data</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($noticias as $noticia)     
                                @php
                                    $date = $noticia->created_at;
                                    $formattedDate = Carbon::parse($date)->translatedFormat('j \\de F \\de Y');
                                    $year = $date->year;
                                    $month = $date->format('m'); // Usa dois dígitos para o mês
                                @endphp   
                                <tr>
                                    <td style="width: 36px;">
                                        <img src="{{ url("storage/{$noticia->imagem}") }}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </td>

                                    <td>
                                        <h5 class="m-0 fw-normal"><a href="{{ route('noticias.details', ['year' => $year, 'month' => $month, 'slug' => $noticia->slug]) }}">{{ $noticia->titulo }}</a></h5>
                                    </td>

                                    <td class="text-center">
                                        {{ formatDate($noticia->created_at) }}
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('admin.noticias.edit', $noticia->id) }}" class="btn btn-primary btn-sm me-1">Editar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end noticias -->
    </div>
    <!--============================ end TABELA DE CONTEUDO ============================-->

</div> <!-- container -->
@endsection