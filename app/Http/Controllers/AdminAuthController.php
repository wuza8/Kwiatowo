<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        if ($request->login === env('ADMIN_LOGIN') && $request->password === env('ADMIN_PASSWORD')) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin');
        }

        return back()->withErrors(['login' => 'Niepoprawne dane']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('home');
    }
}