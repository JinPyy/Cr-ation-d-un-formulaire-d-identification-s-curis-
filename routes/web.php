<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Utilise le modèle User de Laravel

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/login-process', function (Request $request) {
    $credentials = $request->validate([
        'identifiant' => 'required|string',
        'password' => 'required',
    ]);

    if (Auth::attempt(['identifiant' => $credentials['identifiant'], 'password' => $credentials['password']])) {
        $request->session()->regenerate();
        return redirect()->intended('/')->with('message', 'Vous êtes connecté !');
    }

    return back()->with('message', 'Identifiants incorrects.');
});

Route::post('/create-account', function (Request $request) {
    $request->validate([
        'identifiant' => 'required|unique:comptes,identifiant|max:50',
        'password' => 'required|min:8',
        'clef' => 'required'
    ]);

    if ($request->clef !== env('REGISTRATION_KEY')) {
        return back()->with('error', 'Accès refusé.');
    }

    User::create([
        'identifiant' => $request->identifiant,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/')->with('message', 'Compte créé avec succès !');
});