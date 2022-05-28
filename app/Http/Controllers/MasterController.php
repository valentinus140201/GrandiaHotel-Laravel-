<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Menu;

class MasterController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        if (Session::get('type') == 'admin' || Session::get('type') == 'supervisor'){
            return view('master.index', [
                'title' => 'Master', 'menus' => $menu
            ]);
        }else{
            return redirect()->intended('/');
        }

    }
}
