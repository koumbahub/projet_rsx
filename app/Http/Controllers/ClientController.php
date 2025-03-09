<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Afficher tous les clients
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    // Afficher le formulaire de création d'un client
    public function create()
    {
        return view('clients.create');
    }

    // Créer un client
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'tel' => 'required|string|max:15',
        ]);

        Client::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'tel' => $request->tel,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client ajouté avec succès.');
    }

    // Afficher un client spécifique
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }

    // Afficher le formulaire d'édition du client
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    // Mettre à jour un client existant
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $id,
            'tel' => 'required|string|max:15',
        ]);

        $client = Client::findOrFail($id);
        $client->update([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'tel' => $request->tel,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client mis à jour avec succès.');
    }

    // Supprimer un client
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès.');
    }
}
