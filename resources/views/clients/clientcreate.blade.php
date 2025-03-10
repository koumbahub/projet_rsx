<form action="/clients" method="post">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf

    <div class="text-center">
        <div class="card mb-4 mt-5">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Créer un nouveau Client
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
                    <div class="col-sm-10">
                        <input type="text" name="prenom" class="form-control" id="inputPrenom" value="{{ old('prenom') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail" value="{{ old('email') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputTel" class="col-sm-2 col-form-label">Tel</label>
                    <div class="col-sm-10">
                        <input type="text" name="tel" class="form-control" id="inputTel" value="{{ old('tel') }}" minlength="10" maxlength="15" required>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success">Créer</button>
    </div>
</form>
