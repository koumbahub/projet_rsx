<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Plateforme Web avec Intégration des Services Réseau et Accès Distant de Smarttech </title>
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
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
            <!-- Navbar-->
            <div class=" ms-auto ">
               
            </div>
        </nav>
        <div class="layoutSidenav container">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4" style="margin-top:90px;">
                        <div class="text-end ">
                            <p>Vous avez dejà un compte? <a href="{{route('login')}}" class="link-success" >Connectez-vous ici</a></p>
                        </div>
                        <div class="card-header text-center">
                            <h4>Formulaire d'inscription</h4>
                        </div>
                        @if($message=Session::get('message'))
                        <span class="alert alert-success" role="alert">{{$message}}</span>
                        @endif
                        <form action="/clients/store" method="post"> 
                            @csrf
                                <div class="text-center">

                                    <div class="card mb-4 mt-5">
                                        <div class="card-header">
                                            <i class="fas fa-table me-1"></i>
                                            Créer un nouveau client
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3 row">
                                                
                                                <label for="inputClient" class="col-sm-2 col-form-label">Nom</label>
                                                <div class="col-sm-10 mb-3">
                                                    <input type="input" name="name" class="form-control" id="inputClient">
                                                </div>

                                                <label for="inputClient" class="col-sm-2 col-form-label">Prenom</label>
                                                <div class="col-sm-10 mb-3">
                                                    <input type="input" name="prenom" class="form-control" id="inputClient">
                                                </div>
                                                
                                                <label for="inputClient" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10 mb-3">
                                                    <input type="email" name="email" class="form-control" id="inputClient">
                                                </div>
                                                
                                                <label for="inputClient" class="col-sm-2 col-form-label">Téléphone</label>
                                                <div class="col-sm-10 mb-3">
                                                    <input type="text" name="tel" class="form-control" id="inputClient">
                                                </div>

                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            

                            <div class="text-center">
                                <button type="submit" class="btn btn-success">S'inscrire</button>
                            </div>
                        </form>
                    </div>    
                </main>    
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










