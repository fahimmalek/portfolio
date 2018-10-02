<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    //

    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {

        //create and save user
        $request->persist();

        session()->flash('message', 'Thanks for signing up!');

        //redirect to homepage
        return redirect('/');
    }
}
