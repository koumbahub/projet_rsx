@extends('partials/master')

@section('contenu')
<div class="row">
        
@if($employee)

        <div class="mx-auto text-center">
            <div class="card mt-5">
                <div class="card-header">
                    Employé
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <footer class="blockquote-footer">
                            <p><strong>Nom:</strong> {{$employee->name}}</p>
                            <p><strong>Prenom:</strong> {{$employee->prenom}}</p>
                            <p><strong>Mail:</strong> {{$employee->email}}</p>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
