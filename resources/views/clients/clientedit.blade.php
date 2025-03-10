@extends('partials/master')

@section('contenu')
<form action="/clients/{{$client->id}}/update" method="post">
    @csrf
    @method('put')

        <div class="text-center">
            <div class="card mb-4 mt-5">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Formulaire de mise à jour d'un client
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputName" value="{{ $client->name }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
                        <div class="col-sm-10">
                            <input type="text" name="prenom" class="form-control" id="inputPrenom" value="{{ $client->prenom }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail" value="{{ $client->email }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputTel" class="col-sm-2 col-form-label">Tel</label>
                        <div class="col-sm-10">
                            <input type="text" name="tel" class="form-control" id="inputTel" value="{{ $client->tel }}" minlength="10" maxlength="15" required>
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
