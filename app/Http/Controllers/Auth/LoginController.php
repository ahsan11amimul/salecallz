<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
         $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]); 
         $remember=$request->get('remember');
         if (Auth::attempt($credentials,$remember)) {
            $request->session()->regenerate();
 
            return redirect()->intended('deals');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('success','Logout Successful');
    }
}
