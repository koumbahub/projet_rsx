<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Smarttech</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset('template/contenu/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/">
                <img src="{{asset('logo_white.png')}}" alt="" width="120px">
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <div class=" ms-auto ">
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                @if(Auth::check())
                                    <a class="dropdown-item" href="#!">{{ Auth::user()->name }}</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('login') }}">Se connecter</a>
                                @endif
                            </li>
                            <li>
                                @if(Auth::check())
                                    <a class="dropdown-item" href="#!">{{ Auth::user()->name }}</a>
                                    <a class="dropdown-item" href="#!">{{ Auth::user()->role }}</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('login') }}">Se connecter</a>
                                @endif

                        
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="btn btn-sn btn-light" type="submit">Se déconnecter</button>
                                </form>    
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Accueil
                            </a>
                            













                            <a class="nav-link" href="/users/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Utilisateurs
                            </a>
                            









                            
                            <a class="nav-link" href="/employees/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                                Employés
                            </a>
                            <a class="nav-link" href="/clients/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Clients
                            </a>
                            <a class="nav-link" href="/documents/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Documents
                            </a>
                            <a class="nav-link" href="/services/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                                Services Réseau
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @yield('contenu')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">© 2025-Smarttech.</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('template/contenu/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('template/contenu/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('template/contenu/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('template/contenu/js/datatables-simple-demo.js')}}"></script>

    </body>
</html>

  
