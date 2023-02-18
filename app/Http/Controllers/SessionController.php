<?php

namespace App\Http\Controllers;

use App\Models\User;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password']))==false) {
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectos, por favor pongalos de nuevo correctamente'
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
