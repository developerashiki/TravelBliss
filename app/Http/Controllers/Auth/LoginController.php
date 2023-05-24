<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * view Login form
     */
    public function login()
    {
        return  view('admin.auth.login');
    }
    /**
     * Login logic here
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email'     => 'required|email|exists:users',
            'password'  => 'required',
        ]);

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard-content');
        } else
            return redirect()->route('login')->withErrors(['Invalid Email and password']);
    }

    /**
     * logout from auth user
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
