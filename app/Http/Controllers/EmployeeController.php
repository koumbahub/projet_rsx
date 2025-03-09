<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Afficher tous les employés
    public function index()
    {
        $employees = Employee::all(); // Récupérer tous les employés
        return view('employees.index', compact('employees'));
    }

    // Afficher le formulaire de création d'un nouvel employé
    public function create()
    {
        return view('employees.create');
    }

    // Créer un nouvel employé
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
        ]);

        // Créer l'employé
        Employee::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employé ajouté avec succès.');
    }

    // Afficher un employé spécifique
    public function show($id)
    {
        $employee = Employee::findOrFail($id); // Trouver l'employé par son ID
        return view('employees.show', compact('employee'));
    }

    // Afficher le formulaire d'édition de l'employé
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    // Mettre à jour un employé existant
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employé mis à jour avec succès.');
    }

    // Supprimer un employé
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employé supprimé avec succès.');
    }
}
