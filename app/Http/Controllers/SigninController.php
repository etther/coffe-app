<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function ShowLoginForm()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'id_e' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            $request->session()->regenerate();
            return redirect('/'); // Change this to the desired redirect path
        }

        // Authentication failed
        return back()->withErrors(['id_e' => 'id anda salah',])->onlyInput('id_e');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
