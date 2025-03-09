@extends('partials/master')
@section('contenu')
<div class="container-fluid px-4">
    <h2 class="mt-4">Accueil</h2>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">{{Auth::user()->name}}</li>
    </ol>
    @if(Auth::user()->client)
    <div class="row">
        <div class="col">
            <span class="display-6">Bienvenue sur la Plateforme Web avec Intégration des Services Réseau et Accès Distant de Smarttech !</span>
            <p>Cette application permet la gestion des employés et le partage de fichiers.</p>
            <p>L'objectif de cette plateforme est de .</p>

        </div>
        <div class="col">
            <br>
            <br>
            <br>
            <br>
            <br>
            <img src="{{asset('logo-dgb.png')}}" >
        </div>
    </div>
    @else
    <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Nombre de founisseurs partenaires
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="/providers/index">{{$nombredefournisseurs}}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Nombre de demandes d'agrement
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">{{$nombrededemandes}}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Nombre de demandes d'agrement accordées
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">{{$nombreagrementsaccordes}}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Nombre de demandes d'agrement rejetées
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">{{$nombreagrementsrejetes}}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endif
</div>
@endsection