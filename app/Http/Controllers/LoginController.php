<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout(); // Déconnecte l'utilisateur
        $request->session()->invalidate(); // Invalide la session
        $request->session()->regenerateToken(); // Régénère le token CSRF
        return redirect('/'); // Redirige l'utilisateur après la déconnexion
    }
}
