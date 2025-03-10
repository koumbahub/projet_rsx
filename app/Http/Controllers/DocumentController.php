<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    // Afficher tous les documents
    public function index()
    {
        $documents = Document::all();
        return view('documents.documentindex', compact('documents'));
    }

    // Afficher le formulaire de téléchargement d'un document
    public function create()
    {
        return view('documents.documentcreate');
    }

    // Télécharger un document
    public function store(Request $request)
    {
        // Validation du fichier
        $request->validate([
            'document' => 'required|mimes:pdf,docx,xlsx,jpg,png,txt|max:2048',
        ]);

        // Récupérer le fichier téléchargé
        $file = $request->file('document');

        // Nom du fichier unique
        $filename = time() . '_' . $file->getClientOriginalName();

        // Télécharger le fichier sur le serveur FTP
        $path = Storage::disk('ftp')->put('documents/' . $filename, fopen($file, 'r+'));

        // Enregistrer les informations du fichier dans la base de données
        Document::create([
            'name' => $file->getClientOriginalName(),
            'file_path' => 'documents/' . $filename, // Chemin relatif du fichier
            'type' => $file->getClientOriginalExtension(), // Type du fichier
        ]);

        return redirect()->route('documents.documentindex')->with('success', 'Document téléchargé avec succès.');
    }

    // Afficher un document spécifique
    public function show($id)
    {
        $document = Document::findOrFail($id);
        return view('documents.documentshow', compact('document'));
    }

    // Supprimer un document
    public function destroy($id)
    {
        $document = Document::findOrFail($id);
        Storage::disk('ftp')->delete($document->file); // Supprimer le fichier du serveur FTP
        $document->delete();

        return redirect()->route('documents.documentindex')->with('success', 'Document supprimé avec succès.');
    }
}
