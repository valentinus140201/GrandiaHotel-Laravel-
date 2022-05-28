<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        if (Session::get('type') == 'admin' || Session::get('type') == 'supervisor'){
            return view('master.index', [
                'title' => 'Master'
            ]);
        }else{
            return redirect()->intended('/');
        }

    }
}
