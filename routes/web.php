<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('login');
});

Route::post('/login-process', function (Request $request) {
    $action = $request->input('action');
    if ($action == 'ajout') {
        return redirect('/register');
    }

    if ($action == 'ok') {
        $user = DB::table('comptes')
            ->where('identifiant', $request->identifiant)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            return back()->with('message', 'Vous êtes connecté');
        }

        return back()->with('message', 'Erreur. Recommencé');
    }
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/create-account', function (Request $request) {
    if ($request->clef === '12345') {
        DB::table('comptes')->insert([
            'identifiant' => $request->identifiant,
            'password' => Hash::make($request->password), //crypte 
        ]);
        return redirect('/')->with('message', 'Compte créé ! Connectez-vous.');
    }

    return back()->with('error', 'Clé incorrecte');
});