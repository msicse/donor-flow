<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ActivityLogHelper;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validation rules
        $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email',
            'password' => 'required|string|min:8',
        ]);

        $credentials = [
            'email' => strtolower(trim($request->email)),
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }



        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {

        ActivityLogHelper::log('logout', 'Successfully Logout');
        Auth::logout();
        return redirect('/');
    }
}
