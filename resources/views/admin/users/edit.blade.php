@extends('admin.layout')
@section('title', 'Editar Usuário')

@section('conteudo')
  <!-- Start Content-->
  <div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Editar Usuário: {{ $user->titulo }}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @include('custom.alert')
  
    <!--============================ TABELA DE CONTEUDO ============================-->
    <div class="row">
        <div class="col-lg-12">

            <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card">
                    <div class="card-body">                    
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">                    
                                    <div class="mb-3 col-lg-12">
                                        <label for="name" class="form-label">Nome Completo</label>
                                        <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" placeholder="Nome Completo">
                                    </div>
                    
                                    <div class="mb-3 col-lg-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}" placeholder="Email">
                                    </div>
                    
                                    <div class="mb-3 col-lg-6">
                                        <label for="phone" class="form-label">Telefone</label>
                                        <input class="form-control" type="number" id="phone" name="phone" value="{{ $user->phone }}" placeholder="Telefone">
                                    </div>
                    
                                    <div class="mb-3 col-lg-6">
                                        <label for="instagram" class="form-label">Instagram</label>
                                        <input class="form-control" type="text" id="instagram" name="instagram" value="{{ $user->instagram }}" placeholder="Instagram">
                                    </div>
                    
                                    <div class="mb-3 col-lg-6">
                                        <label for="facebook" class="form-label">Facebook</label>
                                        <input class="form-control" type="text" id="facebook" name="facebook" value="{{ $user->facebook }}" placeholder="Facebook">
                                    </div>
                    
                                    <div class="mb-3 col-lg-6">
                                        <label for="linkedin" class="form-label">Linkedin</label>
                                        <input class="form-control" type="text" id="linkedin" name="linkedin" value="{{ $user->linkedin }}" placeholder="Linkedin">
                                    </div>
                    
                                    <div class="mb-3 col-lg-12">
                                        <label for="imagem" class="form-label">Escolha o arquivo</label>
                                        <input class="form-control" type="file" id="imagem" name="imagem">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                @if($user->imagem)
                                    <img src="{{ asset("storage/{$user->imagem}") }}" class="img-fluid img-thumbnail" />
                                @else
                                    <div class="alert alert-warning" role="alert">
                                        <i class="mdi mdi-alert-outline me-2"></i>
                                        Não há imagem disponível para este usuário.
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h5>Deseja Alterar a Senha?</h5>
                            <div class="mb-1 col-lg-6">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Senha">
                            </div> 
                            <div class="mb-1 col-lg-6">
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirme a Senha">
                            </div>
                            <div class="text-right">
                                <small id="passwordHelp" class="form-text text-danger" style="display: none;">As senhas não coincidem.</small>
                                <small id="passwordMatch" class="form-text text-success" style="display: none;">As senhas coincidem.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">  
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
    <!--============================ end TABELA DE CONTEUDO ============================-->

</div> <!-- container -->
@endsection