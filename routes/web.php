<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DocumentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('auth.login'); })->name('login');



Route::get('/inscription', function () {
    return view('formulaire');
});









Route::middleware('auth')->group(function(){
   
    // Page d'accueil
    Route::get('/', function () {
        return view('home');
    });

    // Routes pour les employés

    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index'); // Afficher tous les employés
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create'); // Formulaire d'ajout
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store'); // Enregistrer un employé
    Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show'); // Afficher un employé
    Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit'); // Formulaire de modification
    Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update'); // Mettre à jour un employé
    Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy'); // Supprimer un employé



    // Routes pour les clients

    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index'); // Afficher tous les clients
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create'); // Formulaire d'ajout
    //Route::post('/clients', [ClientController::class, 'store'])->name('clients.store'); // Enregistrer un client
    
    Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store');

    Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show'); // Afficher un client
    Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit'); // Formulaire de modification
    Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update'); // Mettre à jour un client
    Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy'); // Supprimer un client


    // Routes pour les documents


    Route::get('/documents', [DocumentController::class, 'index'])->name('documents.index'); // Afficher tous les documents
    Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create'); // Formulaire d'ajout
    Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store'); // Enregistrer un document
    Route::get('/documents/{id}', [DocumentController::class, 'show'])->name('documents.show'); // Afficher un document
    Route::get('/documents/{id}/edit', [DocumentController::class, 'edit'])->name('documents.edit'); // Formulaire de modification
    Route::put('/documents/{id}', [DocumentController::class, 'update'])->name('documents.update'); // Mettre à jour un document
    Route::delete('/documents/{id}', [DocumentController::class, 'destroy'])->name('documents.destroy'); // Supprimer un document


});




