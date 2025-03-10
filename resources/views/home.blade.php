@extends('partials.master')
@section('contenu')
<div class="container-fluid px-4">
    <h2 class="mt-4">Home</h2>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">
         @if(Auth::check())
            <a class="dropdown-item" href="#">{{ Auth::user()->name }} ({{ Auth::user()->role }})</a>
        @else
            <a class="dropdown-item" href="{{ route('login') }}">Se connecter</a>
        @endif
    </li>
    </ol>
    <div class="row">
        <div class="col">
            <span class="display-6">Bienvenue sur la Plateforme Web de Smarttech !</span>
            <p>Cette application permet la gestion des employés, des clients, et le partage de fichiers.</p>
        </div>
        <div class="col">
            <img src="{{asset('logo-dgb.png')}}" alt="logo" width="200">
        </div>
    </div>

    