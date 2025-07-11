<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $userAttributes = $request->validate([
        'name'=>['required'],
        'email'=>['required', 'email', 'unique:users,email'],
        'password'=>['required', 'confirmed', Password::min(6)],
       ]);

       $employerAttributes = $request->validate([
        'employer'=>['required'],
        'logo'=>['required', File::types(['png', 'jpg', 'webp'])]
       ]);

       $user = User::create($userAttributes);

       $logopath= $request->logo->store('logo');

       $user->employer()->create([
        'name' => $employerAttributes['employer'],
        'logo' => $logopath
       ]);

       Auth::login($user);

       return redirect('/');
    }
}
