@extends('partials/master')

@section('contenu')
<div class="row">
    
        

</div>  

<div class="justify-content-center">
    <div class="text-center">
        <div class="card mt-5">
            <div class="card-header">
                Document
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <footer class="blockquote-footer">    
                        <p><strong>Nom:</strong> {{$document->name}}</p>
                        <p><strong>Chemin:</strong> {{$document->file_path}}</p>
                        <p><strong>Type:</strong> {{$document->type}}</p>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>

@endsection
