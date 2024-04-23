<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// CustomLoginController.php

public function login(Request $request)
{
    // Validate login request
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to authenticate the user
    if (Auth::attempt($request->only('email', 'password'))) {
        // Authentication successful
        return redirect()->intended(route('dashboard'));
    }

    // Authentication failed
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}
