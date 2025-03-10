<form action="/documents" method="post">
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
                Créer un nouveau Document
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputChemin" class="col-sm-2 col-form-label">Chemin</label>
                    <div class="col-sm-10">
                        <input type="text" name="file_path" class="form-control" id="inputChemin" value="{{ old('file_path') }}" >
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputType" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <input type="file" name="type" class="form-control" id="inputType" value="{{ old('type') }}" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/*" >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success">Créer</button>
    </div>
</form>
