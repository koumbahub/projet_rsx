<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; // Ton modèle pour les employés
use App\Models\Client; // Ton modèle pour les clients
use App\Models\Document; // Ton modèle pour les documents

class HomeController extends Controller
{
    public function index()
    {
        $nombreEmployes = Employee::count();
        $nombreClients = Client::count();
        $nombreDocuments = Document::count();
        $nombreAlertes = 0; // Exemple : Mettre une requête qui compte les erreurs ou alertes si tu en as

        return view('home', compact('nombreEmployes', 'nombreClients', 'nombreDocuments', 'nombreAlertes'));
    }
}



