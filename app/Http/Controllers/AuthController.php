<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function store(){
        $validated = request()->validate([
            'name'=> 'required|min:2|max:40',
            'email' =>'required|email|unique:users,email',
            'password' =>'required|confirmed|min:3'
        ]);

        $user = User::create([
            'name'=> $validated['name'],
            'email'=> $validated['email'],
            'password'=> Hash::make($validated['password']),
        ]);

        Auth::login($user);

        Mail::to($user->email)->send(new WelcomeEmail($user));

        request()->session()->regenerate();

        return redirect()->route('dashboard')->with('success', 'Account created Successfully!');
    }

    public function login(){
        return view('auth.login');
    }
    public function authenticate(){
        $validated = request()->validate([
            'email' =>'required|email',
            'password' =>'required|min:3'
        ]);
        if(auth()->attempt($validated)){
            request()->session()->regenerate();

            return redirect()->route('dashboard')->with('success', 'Logged in Successfully!');
        }
        return redirect()->route('login')->withErrors([
            'email'=> 'No mathing user found with the provided email and password'
        ]);
    }
    public function logout(){
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('dashboard')->with('success', 'Logged out Successfully!');
    }
}
