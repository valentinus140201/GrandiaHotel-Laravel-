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

            if ($user->password == md5($request->password)) {
                // dd(md5($request->password));
                // dd( date('Y-m-d'));
                if($user->expired_at < date('Y-m-d')){
                    return back()->with('loginError', 'Login failed!');
                }
                session()->regenerate();
                session(['id' => $user->id]);
                session(['name' => $user->name]);
                session(['type' => $user->type]);
                User::where('id', $user->id)->update(['is_login' => '1']);
                return redirect()->intended('/categories')->with('success', 'Login success!');
            }
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        User::where('id', Session::get('id'))->update(['is_login' => '0']);
        Session::flush();
        return redirect()->intended('/');
    }
}
