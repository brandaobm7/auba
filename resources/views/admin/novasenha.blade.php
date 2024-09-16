<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

    <head>
        <meta charset="utf-8" />
        <title>Log In | Gerenciador de Conteúdo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dash/assets/images/favicon.ico') }}">
        
        <!-- Theme Config Js -->
        <script src="{{ asset('dash/assets/js/head.js') }}"></script>

        <!-- Bootstrap css -->
        <link href="{{ asset('dash/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- App css -->
        <link href="{{ asset('dash/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Icons css -->
        <link href="{{ asset('dash/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-brand">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('dash/assets/images/logo-dark.png') }}" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('dash/assets/images/logo-light.png') }}" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Digite o seu email para recuperar a senha.</p>
                                </div>

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


                                <form action="{{ route('admin.resetarsenha.update') }}" method="POST">
                                  @csrf

                                    <input type="hidden" name="token" value="{{  $token }}">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control" type="email" id="email" name="email" required="" placeholder="Digite o seu email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Digite a nova senha</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Digite a nova sua senha">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirme a nova senha</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirme a nova sua senha">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 text-right">
                                        <small id="passwordHelp" class="form-text text-danger" style="display: none;">As senhas não coincidem.</small>
                                        <small id="passwordMatch" class="form-text text-success" style="display: none;">As senhas coincidem.</small>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> Cadastrar Nova Senha </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="{{ route('admin.login') }}" class="text-white-50 ms-1">Voltar ao Login</a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            <div><script>document.write(new Date().getFullYear())</script> © Agência BM7</div>
        </footer>

        <script src="{{ asset('dash/assets/js/pages/authentication.init.js') }}"></script>

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
    </body>
</html>