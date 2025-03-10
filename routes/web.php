<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\HomeController;

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








//Route::middleware('auth')->group(function(){
   
    // Page d'accueil
    Route::get('/', function () {
        return view('home');
    });

    // Routes pour les employés

    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.employeeindex'); // Afficher tous les employés
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.employeecreate'); // Formulaire d'ajout
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.employeestore'); // Enregistrer un employé
    Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.employeeshow'); // Afficher un employé
    Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.employeeedit'); // Formulaire de modification
    Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.employeeupdate'); // Mettre à jour un employé
    Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.employeedestroy'); // Supprimer un employé



    // Routes pour les clients

    Route::get('/clients/index', [ClientController::class, 'index'])->name('clients.clientindex'); // Afficher tous les clients
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.clientcreate'); // Formulaire d'ajout
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.clientstore'); // Enregistrer un client
    //Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.clientshow'); // Afficher un client
    Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.clientedit'); // Formulaire de modification
    Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.clientupdate'); // Mettre à jour un client
    Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.clientdestroy'); // Supprimer un client
    Route::put('/clients/{id}/reset', [ClientController::class, 'reset'])->name('clients.reset'); // Réinitialisation du mot de passe d'un client


    // Routes pour les documents

    Route::get('/documents', [DocumentController::class, 'index'])->name('documents.documentindex'); // Afficher tous les documents
    Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.documentcreate'); // Formulaire d'ajout
    Route::post('/documents', [DocumentController::class, 'store'])->name('documents.documentstore'); // Enregistrer un document
    Route::get('/documents/{id}', [DocumentController::class, 'show'])->name('documents.documentshow'); // Afficher un document
    Route::get('/documents/{id}/edit', [DocumentController::class, 'edit'])->name('documents.documentedit'); // Formulaire de modification
    Route::put('/documents/{id}', [DocumentController::class, 'update'])->name('documents.documentupdate'); // Mettre à jour un document
    Route::delete('/documents/{id}', [DocumentController::class, 'destroy'])->name('documents.documentdestroy'); // Supprimer un document


    // Route pour la page d'accueil
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    // Route pour la déconnexion
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//});




