@extends('admin.layout')
@section('title', 'Editar Configurações')

@section('conteudo')
  <!-- Start Content-->
  <div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Editar Configurações</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @include('custom.alert')
  
    <!--============================ TABELA DE CONTEUDO ============================-->
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                        
                    <form action="{{ route('admin.config.update', $config->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="mb-3 col-lg-12">
                                        <label for="titulo" class="form-label">Título</label>
                                        <input class="form-control" type="text" id="titulo" name="titulo" value="{{ $config->titulo }}" placeholder="Título">
                                    </div>

                                    <div class="mb-3 col-lg-12">
                                        <label for="rodape" class="form-label">Rodapé</label>
                                        <input class="form-control" type="text" id="rodape" name="rodape" value="{{ $config->rodape }}" placeholder="Rodapé">
                                    </div>
                                
                                    <div class="mb-3 col-lg-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control" type="text" id="email" name="email" value="{{ $config->email }}" placeholder="Email">
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label for="phone" class="form-label">Telefone</label>
                                        <input class="form-control" type="text" id="phone" name="phone" value="{{ $config->phone }}" placeholder="Telefone">
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label for="endereco" class="form-label">Endereço</label>
                                        <input class="form-control" type="text" id="endereco" name="endereco" value="{{ $config->endereco }}" placeholder="Endereço">
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label for="atendimento" class="form-label">Atendimento</label>
                                        <input class="form-control" type="text" id="atendimento" name="atendimento" value="{{ $config->atendimento }}" placeholder="Atendimento">
                                    </div>
                                
                                    <div class="mb-3 col-lg-4">
                                        <label for="facebook" class="form-label">Facebook</label>
                                        <input class="form-control" type="text" id="facebook" name="facebook" value="{{ $config->facebook }}" placeholder="Facebook">
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="instagram" class="form-label">Instagram</label>
                                        <input class="form-control" type="text" id="instagram" name="instagram" value="{{ $config->instagram }}" placeholder="Instagram">
                                    </div>
                                
                                    <div class="mb-3 col-lg-4">
                                        <label for="tiktok" class="form-label">Tiktok</label>
                                        <input class="form-control" type="text" id="tiktok" name="tiktok" value="{{ $config->tiktok }}" placeholder="Tiktok">
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="linkedin" class="form-label">Linkedin</label>
                                        <input class="form-control" type="text" id="linkedin" name="linkedin" value="{{ $config->linkedin }}" placeholder="Linkedin">
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="twitter" class="form-label">Twitter</label>
                                        <input class="form-control" type="text" id="twitter" name="twitter" value="{{ $config->twitter }}" placeholder="Twitter">
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="youtube" class="form-label">Youtube</label>
                                        <input class="form-control" type="text" id="youtube" name="youtube" value="{{ $config->youtube }}" placeholder="Youtube">
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label for="google" class="form-label">Google Meu Negócio</label>
                                        <input class="form-control" type="text" id="google" name="google" value="{{ $config->google }}" placeholder="Google Meu Negócio">
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label for="whatsapp" class="form-label">Whatsapp</label>
                                        <input class="form-control" type="text" id="whatsapp" name="whatsapp" value="{{ $config->whatsapp }}" placeholder="Whatsapp">
                                    </div>

                                    <div class="mb-3 col-lg-12">
                                        <label for="download" class="form-label">Download</label>
                                        <input class="form-control" type="text" id="download" name="download" value="{{ $config->download }}" placeholder="Download">
                                    </div>
                                
                                    <div class="mb-3 col-lg-12">
                                        <label for="maps" class="form-label">Googel Maps</label>
                                        <textarea class="form-control" id="maps" name="maps" >{{ $config->maps }}</textarea>
                                    </div>
                                
                                    <div class="mb-3 col-lg-12">
                                        <label for="analytcs" class="form-label">Google Analytcs</label>
                                        <textarea class="form-control" id="analytcs" name="analytcs" >{{ old('analytcs', $config->analytcs) }}</textarea>
                                    </div>
                                
                                    <div class="mb-3 col-lg-12">
                                        <label for="pixel" class="form-label">Facebook Pixel</label>
                                        <textarea class="form-control" id="pixel" name="pixel" >{{ old('pixel', $config->pixel) }}</textarea>
                                    </div>

                                    <div class="mb-3 col-lg-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" >{{ $config->description }}</textarea>
                                    </div>

                                    <div class="mb-3 col-lg-12">
                                        <label for="keywords" class="form-label">Keywords</label>
                                        <textarea class="form-control" id="keywords" name="keywords" >{{ $config->keywords }}</textarea>
                                    </div>

                                    <div class="mb-3 col-lg-12">
                                        <label for="site" class="form-label">Site</label>
                                        <input class="form-control" type="text" id="site" name="site" value="{{ $config->site }}" placeholder="Site">
                                    </div>
                                
                                    <div class="mb-3 col-lg-12">
                                        <label for="imagem" class="form-label">Escolha o arquivo</label>
                                        <input class="form-control" type="file" id="imagem" name="imagem"  value="{{ $config->imagem }}">
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                @if($config->imagem)
                                    <img src="{{ asset(url("storage/{$config->imagem}")) }}" class="img-fluid img-thumbnail" />
                                @else
                                    <div class="alert alert-warning" role="alert">
                                        <i class="mdi mdi-alert-outline me-2"></i>
                                        Não há imagem disponível para esta notícia.
                                    </div>
                                @endif
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <!--============================ end TABELA DE CONTEUDO ============================-->

</div> <!-- container -->
@endsection