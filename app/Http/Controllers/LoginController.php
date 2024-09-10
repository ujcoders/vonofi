<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // This returns the Blade view created earlier
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'empcode' => 'required|string',
        ]);

        // Check if the employee code exists
        $user = User::where('empcode', $request->empcode)->first();

        if (!$user) {
            return redirect()->route('login.form')->withErrors(['empcode' => 'Employee code does not exist.']);
        }

        // Log in the user
        Auth::login($user);

        return redirect()->route('hcp.form')->with('status', 'Login successful!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form')->with('status', 'Logged out successfully!');
    }
}
