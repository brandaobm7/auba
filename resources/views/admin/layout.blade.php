<!DOCTYPE html>
<html lang="pt-br" data-topbar-color="dark">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title') | Gerenciador de Conteúdo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Gerenciador de Conteúdo" name="description" />
        <meta name="csrf-token" content="{{csrf_token()}}" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dash/assets/images/favicon.png') }}">
        <!-- Plugins css -->
        <link href="{{ asset('dash/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dash/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dash/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Theme Config Js -->
        <script src="{{ asset('dash/assets/js/head.js') }}"></script>
        <!-- Bootstrap css -->
        <link href="{{ asset('dash/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
        <!-- App css -->
        <link href="{{ asset('dash/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons css -->
        <link href="{{ asset('dash/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.0/ckeditor5.css">
        <style>
            .datatable-img{
                font-size: 0px !important;
                padding: .85rem !important;
            }
            .ck.ck-editor {
                max-width: 99.9% !important;
            }
            .ck-editor__editable[role="textbox"] {
                /* Editing area */
                min-height: 200px;
            }

        </style>
        @stack('css')
    </head>

    <body>
        
        <!-- Begin page -->
        <div id="wrapper">
            
            <!-- ========== Menu ========== -->
            <div class="app-menu">  

                <!-- Brand Logo -->
                <div class="logo-box">
                    <!-- Brand Logo Light -->
                    <a href="{{ route('admin.painel') }}" class="logo-light">
                        <img src="{{ asset('dash/assets/images/logo-light.png') }}" alt="logo" class="logo-lg">
                        <img src="{{ asset('dash/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                    </a>

                    <!-- Brand Logo Dark -->
                    <a href="{{ route('admin.painel') }}" class="logo-dark">
                        <img src="{{ asset('dash/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
                        <img src="{{ asset('dash/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                    </a>
                </div>

                <!-- menu-left -->
                <div class="scrollbar">
                    <!--- Menu -->
                    <ul class="menu">

                        <li class="menu-title">Navigation</li>

                        <li class="menu-item">
                            <a href="{{ route('admin.painel') }}" class="menu-link">
                                <span class="menu-icon"><i class="icon-home"></i></span>
                                <span class="menu-text"> Dashboard </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('admin.homes.home') }}" class="menu-link">
                                <span class="menu-icon"><i class="icon-folder-alt"></i></span>
                                <span class="menu-text"> Home </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.bancos.home') }}" class="menu-link">
                                <span class="menu-icon"><i class="icon-folder-alt"></i></span>
                                <span class="menu-text"> Banco </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.consorcios.home') }}" class="menu-link">
                                <span class="menu-icon"><i class="icon-folder-alt"></i></span>
                                <span class="menu-text"> Consórcio </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.seguros.home') }}" class="menu-link">
                                <span class="menu-icon"><i class="icon-folder-alt"></i></span>
                                <span class="menu-text"> Proteção Veicular </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.saudes.home') }}" class="menu-link">
                                <span class="menu-icon"><i class="icon-folder-alt"></i></span>
                                <span class="menu-text"> Saúde </span>
                            </a>
                        </li>

                        <li class="menu-title">Apps</li>
                        
                        <li class="menu-item">
                            <a href="{{ route('admin.config.home') }}" class="menu-link">
                                <span class="menu-icon"><i class="fe-settings"></i></span>
                                <span class="menu-text"> Configurações </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('admin.users.home') }}" class="menu-link">
                                <span class="menu-icon"><i class="fe-user"></i></span>
                                <span class="menu-text"> Usuários </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('admin.timeline.home') }}" class="menu-link">
                                <span class="menu-icon"><i class="mdi mdi-timeline-alert-outline"></i></span>
                                <span class="menu-text"> Timeline </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('admin.logout') }}" class="menu-link">
                                <span class="menu-icon"><i class="fe-log-out"></i></span>
                                <span class="menu-text"> Sair </span>
                            </a>
                        </li>

                    </ul>
                    <!--- End Menu -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left menu End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">

                <!-- ========== Topbar Start ========== -->
                <div class="navbar-custom">
                    <div class="topbar">
                        <div class="topbar-menu d-flex align-items-center gap-1">

                            <!-- Topbar Brand Logo -->
                            <div class="logo-box">
                                <!-- Brand Logo Light -->
                                <a href="{{ route('admin.painel') }}" class="logo-light">
                                    <img src="{{ asset('dash/assets/images/logo-light.png') }}" alt="logo" class="logo-lg">
                                    <img src="{{ asset('dash/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                                </a>

                                <!-- Brand Logo Dark -->
                                <a href="{{ route('admin.painel') }}" class="logo-dark">
                                    <img src="{{ asset('dash/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
                                    <img src="{{ asset('dash/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                                </a>
                            </div>

                            <!-- Sidebar Menu Toggle Button -->
                            <button class="button-toggle-menu">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </div>

                        <ul class="topbar-menu d-flex align-items-center">
                            <!-- Fullscreen Button -->
                            <li class="d-none d-md-inline-block">
                                <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                                    <i class="fe-maximize font-22"></i>
                                </a>
                            </li>

                            <!-- Light/Dark Mode Toggle Button -->
                            <li class="d-none d-sm-inline-block">
                                <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                                    <i class="ri-moon-line font-22"></i>
                                </div>
                            </li>

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    @if($img = auth()->user()->imagem)
                                        <img class="rounded-circle" src="{{ asset("storage/{$img}") }}" alt="{{ auth()->user()->name }}"/>
                                    @else
                                        <img class="rounded-circle" src="{{ asset('dash/assets/images/users/user-1.jpg') }}" alt="{{ auth()->user()->name }}">
                                    @endif
                                    <span class="ms-1 d-none d-md-inline-block">
                                      {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">

                                    <!-- item-->
                                    <a href="{{ route('/') }}" target="_blank" class="dropdown-item notify-item">
                                        <i class="fe-external-link me-1"></i>
                                        <span>Meu Site</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('admin.config.home') }}" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>Configurações</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('admin.users.home') }}" class="dropdown-item notify-item">
                                        <i class="fe-user me-1"></i>
                                        <span>Usuários</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                                      <i class="fe-log-out me-1"></i>
                                      <span>Sair</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ========== Topbar End ========== -->

                <!-- ========== Conteudo ========== -->
                <div class="content">
                    @yield('conteudo')
                </div> 
                <!-- ========== Conteudo End ========== -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div><script>document.write(new Date().getFullYear())</script> © Agência BM7</div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{ asset('dash/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('dash/assets/js/app.min.js') }}"></script>

        <!-- Plugins js -->
        <script src="{{ asset('dash/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
        <!-- Init js-->
        <script src="{{ asset('dash/assets/js/pages/form-advanced.init.js') }}"></script>
        
        <!-- Datatables init -->
        <script src="{{ asset('dash/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>

        <script src="{{ asset('dash/assets/js/pages/datatables.init.js') }}"></script>

        <!-- Plugins js -->
        <script src="{{ asset('dash/assets/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/autonumeric/autoNumeric.min.js') }}"></script>

        <!-- Init js-->
        <script src="{{ asset('dash/assets/js/pages/form-masks.init.js') }}"></script>

         <!-- Plugins js-->
         <script src="{{ asset('dash/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
         <script src="{{ asset('dash/assets/js/pages/form-pickers.init.js') }}"></script>
 

        <script type="importmap">
            {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.0/ckeditor5.js",
				    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.0/"
                }
            }
        </script>
        <script type="module" src="{{ asset('dash/assets/js/ckeditor.js') }}"></script>
        <script>
            const ckeditorUploadUrl = @json(route('ckeditor.upload', ['_token' => csrf_token()]));
        </script>
        {{-- <script>
            ClassicEditor
                .create( document.querySelector( '#descricao' ) , {
                ckfinder:
                {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token'=>csrf_token()]) }}"
                }
                } )
                .then(editor => {
                console.log(editor);
                })
                .catch( error => {
                    console.error( error );
                } );
        </script> --}}

        
      @stack('scripts')
    </body>
</html>