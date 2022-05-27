<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (User::where('email', '=', $request->email)->exists()) {
            $user = User::where('email', $request->email)->first();
            if($user->password == $request->password){
                session()->regenerate();
                session(['id' => $user->id]);
                session(['name' => $user->name]);
                session(['user' => $user->type]);
                echo $user->type;

                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Login failed!');
    }
}
