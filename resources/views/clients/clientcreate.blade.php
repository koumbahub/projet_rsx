@extends('partials/master')
@section('contenu')
<form action="/clients/store" method="post"> 
    @csrf

        <div class="col-7" class='text-center'>
            <div class="card mb-4 mt-5">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Créer un nouveau Client
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
                        
                        <label for="inputClient" class="col-sm-2 col-form-label">Tel</label>
                        <div class="col-sm-10 mb-3">
                            <input type="text" name="tel" class="form-control" id="inputClient">
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        

    <div class='text-center'>
        <button type="submit" class="btn btn-success">Créer</button>
    </div>
</form>
@endsection