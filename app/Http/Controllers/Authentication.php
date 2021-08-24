<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class Authentication extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|max:128|min:6|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:128'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        
        return redirect('/login')->with('registerSuccess', 'Register successfully, Please login.');

    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6'
        ]);

        $remember = $request->has('remember_me') ? true : false; 

        if(Auth::attempt($credentials, $remember))
        {
            $request->session()->regenerate();
            $user = auth()->user();
            Auth::login($user,true);
            if(Auth::user()->is_admin == 1)
            {
                return redirect()->route('admins');
            } else {
                return redirect()->route('dashboard');
            }
            
            
        } 
        
        return back()->with('loginError', 'The provided credentials do not match our records.');
    }
}
