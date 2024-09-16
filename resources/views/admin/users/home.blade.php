@extends('admin.layout')
@section('title', 'Usuários')

@section('conteudo')

<!-- Start Content-->
<div class="container-fluid">
                          
  <!-- start page title -->
  <div class="row">
      <div class="col-12">
          <div class="page-title-box">
              <div class="page-title-right">
                  <a href="#" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#signup-modal"> <i class="fas fa-plus me-1"></i> Cadastrar</a>
              </div>
              <h4 class="page-title">Usuários</h4>
          </div>
      </div>
  </div>
  <!-- end page title -->

  <!--============================ CADASTRO DE USUÁRIO ============================-->
  <!-- Signup modal content -->
  <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-body">
            <div class="text-center mt-2 mb-4">
                <div class="auth-brand">
                    <h4>Cadastrar um novo usuário</h4>
                </div>
            </div>

          <form action="{{ route('admin.users.store') }}" method="POST" class="px-3">
            @csrf
              <div class="mb-3">
                  <label for="name" class="form-label">Nome Completo</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo">
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="mb-3">
                  <label for="password" class="form-label">Senha</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Senha">
              </div> 
              <div class="mb-1">
                  <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirme a Senha">
              </div>
              <div class="mb-3 text-right">
                  <small id="passwordHelp" class="form-text text-danger" style="display: none;">As senhas não coincidem.</small>
                  <small id="passwordMatch" class="form-text text-success" style="display: none;">As senhas coincidem.</small>
              </div>
              <div class="mb-3 text-center">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
          </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--============================ end CADASTRO DE USUÁRIO ============================-->

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
                        <th>Nome</th>
                        <th>Email</th>
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
          ajax: '/admin/users/data',
          columns: [
              { data: 'imagem', name: 'imagem' },
              { data: 'name', name: 'name' },
              { data: 'email', name: 'email' },
              { data: 'created_at', name: 'created_at', className: 'text-center' }, 
              { data: 'action', name: 'action', orderable: false, searchable: false, className: 'text-center' }, 
          ]
      });
  });
</script>

<script>
  const password = document.getElementById('password');
  const passwordConfirmation = document.getElementById('password_confirmation');
  const passwordHelp = document.getElementById('passwordHelp');
  const passwordMatch = document.getElementById('passwordMatch');

  function checkPasswords() {
      if (password.value !== passwordConfirmation.value) {
          passwordHelp.style.display = 'block';
          passwordMatch.style.display = 'none';
      } else if (password.value !== '' && passwordConfirmation.value !== '') {
          passwordHelp.style.display = 'none';
          passwordMatch.style.display = 'block';
      } else {
          passwordHelp.style.display = 'none';
          passwordMatch.style.display = 'none';
      }
  }

  password.addEventListener('input', checkPasswords);
  passwordConfirmation.addEventListener('input', checkPasswords);
</script>
@endpush