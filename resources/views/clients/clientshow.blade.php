@extends('partials/master')

@section('contenu')
<div class="row">
    
        

</div>  

<div class="justify-content-center">
    <div class="text-center">
        <div class="card mt-5">
            <div class="card-header">
                Client
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <footer class="blockquote-footer">    
                        <p><strong>Nom:</strong> {{$client->name}}</p>
                        <p><strong>Prénom:</strong> {{$client->prenom}}</p>
                        <p><strong>Email:</strong> {{$client->email}}</p>
                        <p><strong>Téléphone:</strong> {{$client->tel}}</p>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>

@endsection
