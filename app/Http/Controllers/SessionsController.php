<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required',Rule::exists('users','email')],
            'password' => ['required']
        ]);

        if (auth()->attempt($attributes)) {
            //session fixation
            session()->regenerate();

            return redirect('/')->with('success','Welcome Back');
        }

        //auth filled
       throw  ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
//        return back()
//            ->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success','Goodbye');
    }
}
