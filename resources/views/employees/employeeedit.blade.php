@extends('partials/master')
@section('contenu')
<form action="/employees/{{$employee->id}}/update" method="post"> 
    @csrf
    @method('put')
    
        <div class="text-center">
            <div class="card mb-4 mt-5">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Formulaire de mise à jour d'un employé
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                       
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10 mb-3">
                            <input type="text" name="name" class="form-control" id="inputName" value="{{ $employee->name }}">
                        </div>

                        <label for="inputPrenom" class="col-sm-2 col-form-label">Prénom</label>
                        <div class="col-sm-10 mb-3">
                            <input type="text" name="prenom" class="form-control" id="inputPrenom" value="{{ $employee->prenom }}">
                        </div>
                        
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10 mb-3">
                            <input type="email" name="email" class="form-control" id="inputEmail" value="{{ $employee->email }}">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-success btn-lg">Mettre à jour</button>
    </div>
</form> 
@endsection
