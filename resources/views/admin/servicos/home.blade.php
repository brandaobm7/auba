@extends('admin.layout')
@section('title', 'Serviços')

@section('conteudo')
  <!-- Start Content-->
  <div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="#" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#ModalCadastrar"> <i class="fas fa-plus me-1"></i> Cadastrar</a>
                </div>
                <h4 class="page-title">Serviços</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!--============================ MODAL CADASTRAR ============================-->
    <div id="ModalCadastrar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalCadastrarLabel" aria-hidden="true">
      <div class="modal-dialog modal-full-width">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="ModalCadastrarLabel">Cadastrar Serviço</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('admin.servicos.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
              <div class="modal-body row">
                  
                  <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                  <div class="mb-3 col-lg-12">
                      <label for="titulo" class="form-label">Titulo</label>
                      <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Titulo">
                  </div>

                  <div class="mb-3 col-lg-12">
                      <label for="slug" class="form-label">URL</label>
                      <input class="form-control" type="text" id="slug" name="slug" placeholder="URL">
                  </div>

                  <div class="mb-3 col-lg-6">
                      <label for="exibir" class="form-label">Exibir</label>
                      <select id="exibir" name="exibir" class="selectize-drop-header" placeholder="Exibir no site">
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                      </select>
                  </div>

                  <div class="mb-3 col-lg-6">
                      <label for="imagem" class="form-label">Escolha o arquivo</label>
                      <input class="form-control" type="file" id="imagem" name="imagem">
                  </div>

                  <div class="mb-3 col-lg-12">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                  </div>
  
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--============================ end MODAL CADASTRAR ============================-->

    @include('custom.alert')

    <!--============================ TABELA DE CONTEUDO ============================-->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
              
            <div class="table-responsive">
              <table id="data-table" class="table table-hover">
                  <thead>
                      <tr>
                          <th width="40"></th>
                          <th>Título</th>
                          <th class="text-center">Criado em</th>
                          <th class="text-center">Action</th>
                      </tr>
                  </thead>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--============================ end TABELA DE CONTEUDO ============================-->

  </div> <!-- container -->
@endsection

@push('scripts')
<script type="text/javascript">
  $(document).ready(function() {
      $('#data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '/admin/servicos/data',
          columns: [
              { data: 'imagem', name: 'imagem' },
              { data: 'titulo', name: 'titulo' },
              { data: 'created_at', name: 'created_at', className: 'text-center' }, 
              { data: 'action', name: 'action', orderable: false, searchable: false, className: 'text-center' }, 
          ]
      });
  });
</script>

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