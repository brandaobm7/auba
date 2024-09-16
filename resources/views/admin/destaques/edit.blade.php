@extends('admin.layout')
@section('title', 'Editar Destaques')

@section('conteudo')
  <!-- Start Content-->
  <div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Editar Destaque: {{ $destaque->titulo }}</h4>
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
                        
                    <form action="{{ route('admin.destaques.update', $destaque->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-lg-9">
                                <div class="row">
                                    <input type="hidden" name="id_user" value="{{ $destaque->id_user }}">
                                    <div class="mb-3 col-lg-12">
                                        <label for="titulo" class="form-label">Título</label>
                                        <input class="form-control" type="text" id="titulo" name="titulo" value="{{ $destaque->titulo }}" placeholder="Título">
                                    </div>
                                
                                    <div class="mb-3 col-lg-12">
                                        <label for="link" class="form-label">Link</label>
                                        <input class="form-control" type="text" id="link" name="link" value="{{ $destaque->link }}" placeholder="Link">
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label for="exibir" class="form-label">Exibir</label>
                                        <select id="exibir" name="exibir" class="selectize-drop-header" placeholder="Exibir no site">
                                            <option value="{{ $destaque->exibir }}">{{ $destaque->exibir }}</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                    </div>
                                
                                    <div class="mb-3 col-lg-6">
                                        <label for="imagem" class="form-label">Escolha o arquivo</label>
                                        <input class="form-control" type="file" id="imagem" name="imagem"  value="{{ $destaque->imagem }}">
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                @if($destaque->imagem)
                                    <img src="{{ asset(url("storage/{$destaque->imagem}")) }}" class="img-fluid img-thumbnail" />
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