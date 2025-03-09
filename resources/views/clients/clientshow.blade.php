@extends('partials/master')
@section('contenu')
<div class="row">
     
    @if (Auth::user()->candidat)
   
    @endif
        
    @if (Auth::user()->employee)
    <div >
        
    </div>
    @endif

</div>  

    <div class="col-7" class='text-center'>
        <div class="card mt-5">
                <div class="card-header">
                    Client
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <footer class="blockquote-footer">    
                        <p>Nom: {{$provider->name}}</p>
                        <p>Prenom: {{$provider->prenom}}</p>
                        <p>Mail: {{$provider->email}}</p>
                        <p>Tél: {{$provider->tel}}</p>
                    </footer>
                    </blockquote>
                </div>
        </div>
    </div>

    

@endsection