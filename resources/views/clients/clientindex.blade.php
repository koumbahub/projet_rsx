@extends('partials/master')
@section('contenu')
<div class="container-fluid px-4">
    <h3 class="mt-4">Clients</h3>
    <ol class="breadcrumb mb-4">
    </ol>
    <div class="card mb-4">
        <div class="card-body">
        
        <a  href="/clients/create">
            <button type="button" class="btn btn-success">Nouveau client</button>
        </a>
        
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Listes des clients
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Paramètres</th>
                    </tr>
                </thead>

                <tbody>
                    
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{$client->name}}</td>
                        <td>{{$client->prenom}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->tel}}</td>
                        
                        <td>
                            
                            <a href="{{ route('clients.clientedit', $client->id) }}">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>

                            <a href='#' data-bs-toggle="modal" data-bs-target="#exampleModal{{$client->id}}"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                </svg>
                            </a>
                            
                            <a href='#' data-bs-toggle="modal" data-bs-target="#resetModal{{$client->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise text-success" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                                </svg>
                            </a>


                            
                            <a href="{{ route('clients.clientshow', $client->id) }}">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                                </svg>
                            </a>

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de suppression</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Voulez vous vraiment supprimer cet utilisateur {{$client->name}}
                                    </div>
                                    
                                    <form action="{{ route('clients.clientdestroy', $client->id) }}" method="post">


                                        @csrf
                                        @method('delete')
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="resetModal{{$client->id}}" tabindex="-1" aria-labelledby="resetModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="resetModalLabel">Confirmation de reinitiallisation</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Voulez vous vraiment reinitialliser le mot de passe de l'utilisateur {{$client->name}}
                                    </div>
                                    <form action="{{ route('clients.reset', $client->id) }}" method="post">

                                        @csrf
                                        @method('put')
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-danger">Confirmer</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 
