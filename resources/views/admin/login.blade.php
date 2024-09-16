<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

    <head>
        <meta charset="utf-8" />
        <title>Login | Gerenciador de Conteúdo</title>
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
                                        <a href="{{ route('admin.login') }}" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('dash/assets/images/logo-dark.png') }}" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="{{ route('admin.login') }}" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('dash/assets/images/logo-light.png') }}" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Entre com email e senha para acessar o gerenciador.</p>
                                </div>

                                @include('custom.alert')

                                <form action="{{ route('admin.auth') }}" method="POST">
                                  @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control" type="email" id="email" name="email" required="" placeholder="Digite o seu email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Senha</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Digite a sua senha">
                                            <div class="input-group-text" data-password="false">
                                                <i class="fas fa-eye" id="password-eye"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="remember" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Lembre-me</label>
                                        </div>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> Entrar </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="{{ route('admin.recuperarsenha') }}" class="text-white-50 ms-1">Esqueceu a senha?</a></p>
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
            document.querySelector('.input-group-text').addEventListener('click', function() {
                var passwordInput = document.getElementById('password');
                var passwordEye = this.querySelector('#password-eye');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordEye.classList.remove('fa-eye');
                    passwordEye.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    passwordEye.classList.remove('fa-eye-slash');
                    passwordEye.classList.add('fa-eye');
                }
            });
        </script>
    </body>
</html>