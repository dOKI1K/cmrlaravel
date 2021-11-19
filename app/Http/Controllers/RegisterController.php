<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required','max:255'],
            'dni' => ['required','max:10'],
            'email' => ['required','email','max:255'],
            'password' => ['required', 'min:7']
        ]);


        User::create($attributes);

        return redirect('/');
    }

    public function turnos()
    {
        return view('register.login');
    }

    public function turnosChecked()
    {
        

        return redirect('/');
    }
}
