<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
        <link href="{{asset('template/contenu/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
                .bg-image-vertical {
                position: relative;
                overflow: hidden;
                background-repeat: no-repeat;
                background-position: right center;
                background-size: auto 100%;
                }

                @media (min-width: 1025px) {
                .h-custom-2 {
                height: 100%;
                }
                }
        </style>
    </head>

    <body>
        <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7 px-0 d-none d-sm-block">
                    <img src="https://img.freepik.com/vetores-premium/logotipo-da-smart-technology_18099-2342.jpg?w=2000"
                    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div> 

                <div class="col-sm-5 text-black">
                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 23rem;" method='post' action="{{route('login')}}">
                            @csrf
                            <div class="col text-center"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                            </div>
                            <h4 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">S'identifier</h4>

                            <div data-mdb-input-init class="form-outline mb-4 text-center">
                                <input type="email" id="form2Example18" name="email" class="form-control form-control-lg" required/>
                                <label class="form-label" for="form2Example18">Adresse e-mail</label>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4 text-center">
                                <input type="password" id="form2Example28" name="password" class="form-control form-control-lg" required/>
                                <label class="form-label" for="form2Example28">Mot de passe</label>
                            </div>

                            <div class="pt-1 mb-4 text-center">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg btn-block" type="submit">Connectez-vous</button>
                            </div>
                            <div class="col text-center">
                                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Mot de passe oublié?</a></p>            
                                <p>Vous n'avez pas de compte?<a href="/inscription" class="link-success">Inscrivez-vous ici</a></p>
                            </div>
                        </form>

                    </div>

                </div>
            
            </div>
        </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('template/contenu/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('template/contenu/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('template/contenu/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('template/contenu/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>


