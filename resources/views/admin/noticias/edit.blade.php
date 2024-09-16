@extends('admin.layout')
@section('title', 'Editar Notícia')

@section('conteudo')
  <!-- Start Content-->
  <div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Editar Notícia: {{ $noticia->titulo }}</h4>
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
                        
                    <form action="{{ route('admin.noticias.update', $noticia->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-lg-9">
                                <div class="row">
                                    <input type="hidden" name="id_user" value="{{ $noticia->id_user }}">
                                    <div class="mb-3 col-lg-12">
                                        <label for="titulo" class="form-label">Titulo</label>
                                        <input class="form-control" type="text" id="titulo" name="titulo" value="{{ $noticia->titulo }}" placeholder="Titulo">
                                    </div>
                                
                                    <div class="mb-3 col-lg-12">
                                        <label for="slug" class="form-label">URL</label>
                                        <input class="form-control" type="text" id="slug" name="slug" value="{{ $noticia->slug }}" placeholder="URL">
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Criado em</label>
                                        <input type="text" id="datetime-datepicker" id="created_at" name="created_at" class="form-control" placeholder="Date and Time" value="{{ $noticia->created_at }}">
                                    </div>
                                
                                    <div class="mb-3 col-lg-6">
                                        <label for="exibir" class="form-label">Exibir</label>
                                        <select id="exibir" name="exibir" class="selectize-drop-header" placeholder="Exibir no site">
                                            <option value="{{ $noticia->exibir }}">{{ $noticia->exibir }}</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                    </div>
                                
                                    <div class="mb-3 col-lg-12">
                                        <label for="imagem" class="form-label">Escolha o arquivo</label>
                                        <input class="form-control" type="file" id="imagem" name="imagem"  value="{{ $noticia->imagem }}">
                                    </div>
                                
                                    <div class="mb-3 col-lg-12">
                                        <label for="descricao" class="form-label">Descrição</label>
                                        <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $noticia->descricao }}</textarea>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                @if($noticia->imagem)
                                    <img src="{{ asset(url("storage/{$noticia->imagem}")) }}" class="img-fluid img-thumbnail" />
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
@push('scripts')
  <script type="text/javascript">
    document.getElementById('titulo').addEventListener("keyup", function () {
        document.getElementById('slug').value = formatarSlug(document.getElementById('titulo').value);
    });

    function formatarSlug(texto) {
        // Remove acentos
        texto = texto.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');

        // Substitui espaços por traços
        texto = texto.replace(/ /g, '-');

        // Remove caracteres especiais (vírgulas, ponto e vírgula, etc.)
        texto = texto.replace(/[^\w\-]/g, '');

        return texto;
    }
  </script>
@endpush