@extends('admin.layout')
@section('title', 'Configurações')

@section('conteudo')
<!-- Start Content-->
<div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{ route('admin.config.edit', $config->id) }}" class="btn btn-success waves-effect waves-light"> <i class="fe-edit me-1"></i> Editar</a>
                </div>
                <h4 class="page-title">Configurações</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @include('custom.alert')

    <!--============================ TABELA DE CONTEUDO ============================-->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid" src="{{ asset(url("storage/{$config->imagem}")) }}">
                    </div>

                    <div class="list-group list-group-flush mt-2 font-15">
                        @if ($config->facebook)
                            <a href="{{ $config->facebook }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='fab fa-facebook font-16 me-1'></i> Facebook</a>
                        @endif

                        @if ($config->instagram)
                            <a href="{{ $config->instagram }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='fab fa-instagram font-16 me-1'></i> Instagram</a>
                        @endif

                        @if ($config->tiktok)
                            <a href="{{ $config->tiktok }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='fab fa-tumblr font-16 me-1'></i> TikTok</a>
                        @endif

                        @if ($config->linkedin)
                            <a href="{{ $config->linkedin }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='fab fa-linkedin font-16 me-1'></i> Linkedin</a>
                        @endif

                        @if ($config->twitter)
                            <a href="{{ $config->twitter }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='fab fa-twitter font-16 me-1'></i> Twitter</a>
                        @endif

                        @if ($config->youtube)
                            <a href="{{ $config->youtube }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='fab fa-youtube font-16 me-1'></i> YouTube</a>
                        @endif

                        @if ($config->google)
                            <a href="{{ $config->google }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='fab fa-google font-16 me-1'></i> Google Meu Negócio</a>
                        @endif

                        @if ($config->download)
                            <a href="{{ $config->download }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='fas fa-download font-16 me-1'></i> Download</a>
                        @endif

                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="w-100 ps-1">
                            <p class="mb-1 mt-1">Decription: <strong>{{ $config->description }}</strong></p>
                            <p class="mb-1 mt-1">Keywords: <strong>{{ $config->keywords }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            @if ($config->maps)
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="w-100 ps-1">
                            <p class="mb-1 mt-1">Google Maps:</p>
                            <div class="ratio ratio-16x9">
                            {!! $config->maps !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>

    </div>
    <!--============================ end TABELA DE CONTEUDO ============================-->

</div> <!-- container -->
@endsection