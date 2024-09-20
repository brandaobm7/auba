@extends('admin.layout')
@section('title', 'Editar Proteção Veicular')

@section('conteudo')
  <!-- Start Content-->
  <div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Editar Proteção Veicular: {{ $seguro->titulo }}</h4>
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
                        
                    <form action="{{ route('admin.seguros.update', $seguro->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-lg-9">
                                <div class="row">
                                    <input type="hidden" name="id_user" value="{{ $seguro->id_user }}">
                                    <div class="mb-3 col-lg-8">
                                        <label for="titulo" class="form-label">Título</label>
                                        <input class="form-control" type="text" id="titulo" name="titulo" value="{{ $seguro->titulo }}" placeholder="Título">
                                    </div>
                  
                                    <div class="mb-3 col-lg-2">
                                        <label for="cor_titulo" class="form-label">Cor do Titulo</label>
                                        <input class="form-control" id="cor_titulo" type="color" name="cor_titulo" value="{{ $seguro->cor_titulo }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-2">
                                        <label for="exibir" class="form-label">Exibir</label>
                                        <select id="exibir" name="exibir" class="selectize-drop-header" placeholder="Exibir no site">
                                            <option value="{{ $seguro->exibir }}">{{ $seguro->exibir }}</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="imagem" class="form-label">Imagem</label>
                                        <input class="form-control" type="file" id="imagem" name="imagem" value="{{ $seguro->imagem }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="video" class="form-label">Vídeo</label>
                                        <input class="form-control" type="text" id="video" name="video" placeholder="Vídeo" value="{{ $seguro->video }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-5">
                                        <label for="link" class="form-label">Link</label>
                                        <input class="form-control" type="text" id="link" name="link" placeholder="Link" value="{{ $seguro->link }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-5">
                                        <label for="link" class="form-label">Título do Botão</label>
                                        <input class="form-control" type="text" id="titulo_link" name="titulo_link" placeholder="Título do Botão" value="{{ $seguro->titulo_link }}">
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label for="cor_link" class="form-label">Cor do Botão</label>
                                        <select id="cor_link" name="cor_link" class="selectize-drop-header" placeholder="cor_link no site">
                                            <option value="{{ $seguro->cor_link }}">{{ $seguro->cor_link }}</option>
                                            <option value="btn-main">Laranja</option>
                                            <option value="btn-main-2">Preto</option>
                                            <option value="btn-white">Branco</option>
                                            <option value="btn-blue">Azul</option>
                                            <option value="btn-green">Verde</option>
                                            <option value="btn-yellow">Amarelo</option>
                                            <option value="btn-transparent">Transparente</option>
                                        </select>
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="bg_imagem" class="form-label">Imagem de Fundo</label>
                                        <input class="form-control" type="file" id="bg_imagem" name="bg_imagem" value="{{ $seguro->bg_imagem }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="bg_cor" class="form-label">Cor de Fundo</label>
                                        <input class="form-control" id="bg_cor" type="color" name="bg_cor" value="{{ $seguro->bg_cor }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-12">
                                      <label for="descricao" class="form-label">Descrição</label>
                                      <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $seguro->descricao }}</textarea>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                @if($seguro->imagem)
                                <div class="mt-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="delete_imagem" name="delete_imagem">
                                        <label class="form-check-label" for="delete_imagem">Excluir Imagem Lateral</label>
                                    </div>
                                </div>
                                    <img src="{{ url("storage/{$seguro->imagem}") }}" class="img-fluid img-thumbnail" />
                                @else
                                    <p class="mb-1">Imagem Lateral</p>
                                    <div class="alert alert-warning" role="alert">
                                        <i class="mdi mdi-alert-outline me-2"></i>
                                        Não há imagem disponível.
                                    </div>
                                @endif
                                    <hr>
                                @if($seguro->bg_imagem)
                                <div class="mt-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="delete_bg_imagem" name="delete_bg_imagem">
                                        <label class="form-check-label" for="delete_bg_imagem">Excluir Imagem de Fundo</label>
                                    </div>
                                </div>
                                    <img src="{{ url("storage/{$seguro->bg_imagem}") }}" class="img-fluid img-thumbnail" />
                                @else
                                    <p class="mb-1">Imagem de Fundo</p>
                                    <div class="alert alert-warning" role="alert">
                                        <i class="mdi mdi-alert-outline me-2"></i>
                                        Não há imagem disponível.
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
