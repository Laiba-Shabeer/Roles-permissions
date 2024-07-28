<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
     return view ('auth.login');
    }

    // Handle login request
    public function auth_login(Request $request)
    {
        // return $request;
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the 'remember me' checkbox is checked
        $remember = $request->has('remember-me') ? true : false;

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {

            return redirect('panel/dashboard');
        } else {

            return redirect()->back()->with('error', 'Please enter correct email and password');
        }
    }
}
