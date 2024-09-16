@extends('admin.layout')
@section('title', 'Editar Home')

@section('conteudo')
  <!-- Start Content-->
  <div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Editar Home: {{ $home->titulo }}</h4>
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
                        
                    <form action="{{ route('admin.homes.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-lg-9">
                                <div class="row">
                                    <input type="hidden" name="id_user" value="{{ $home->id_user }}">
                                    <div class="mb-3 col-lg-10">
                                        <label for="titulo" class="form-label">Título</label>
                                        <input class="form-control" type="text" id="titulo" name="titulo" value="{{ $home->titulo }}" placeholder="Título">
                                    </div>
                  
                                    <div class="mb-3 col-lg-2">
                                        <label for="exibir" class="form-label">Exibir</label>
                                        <select id="exibir" name="exibir" class="selectize-drop-header" placeholder="Exibir no site">
                                            <option value="{{ $home->exibir }}">{{ $home->exibir }}</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="imagem" class="form-label">Imagem</label>
                                        <input class="form-control" type="file" id="imagem" name="imagem" value="{{ $home->imagem }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="video" class="form-label">Vídeo</label>
                                        <input class="form-control" type="text" id="video" name="video" placeholder="Vídeo" value="{{ $home->video }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="link" class="form-label">Título do Botão</label>
                                        <input class="form-control" type="text" id="titulo_link" name="titulo_link" placeholder="Título do Botão" value="{{ $home->titulo_link }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="link" class="form-label">Link</label>
                                        <input class="form-control" type="text" id="link" name="link" placeholder="Link" value="{{ $home->link }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="bg_imagem" class="form-label">Imagem de Fundo</label>
                                        <input class="form-control" type="file" id="bg_imagem" name="bg_imagem" value="{{ $home->bg_imagem }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-6">
                                        <label for="bg_cor" class="form-label">Cor de Fundo</label>
                                        <input class="form-control" id="bg_cor" type="color" name="bg_cor" value="{{ $home->bg_cor }}">
                                    </div>
                  
                                    <div class="mb-3 col-lg-12">
                                      <label for="descricao" class="form-label">Descrição</label>
                                      <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $home->descricao }}</textarea>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                @if($home->imagem)
                                    <p class="mb-1">Imagem Lateral</p>
                                    <img src="{{ url("storage/{$home->imagem}") }}" class="img-fluid img-thumbnail" />
                                @else
                                    <p class="mb-1">Imagem Lateral</p>
                                    <div class="alert alert-warning" role="alert">
                                        <i class="mdi mdi-alert-outline me-2"></i>
                                        Não há imagem disponível.
                                    </div>
                                @endif

                                @if($home->bg_imagem)
                                    <p class="mb-1">Imagem de Fundo</p>
                                    <img src="{{ url("storage/{$home->bg_imagem}") }}" class="img-fluid img-thumbnail" />
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