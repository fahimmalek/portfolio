<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware('guest', ['except' => 'destroy']);

    }

    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }

    public function store()
    {
        if (! auth()->attempt(request(['email', 'password']))){

            return back()->withErrors([
                'message' => 'Incorrect Login Details'
            ]);
        }

        return redirect()->home();

        auth()->login($user);
    }
}
