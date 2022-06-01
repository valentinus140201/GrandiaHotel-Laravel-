<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Menu;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $menu = Menu::latest()->filter(request(['search']))->paginate(10)->withQueryString();
        if (Session::get('type') == 'admin' || Session::get('type') == 'supervisor') {
            return view('master.index', [
                'title' => 'Master', 'menus' => $menu
            ]);
        } else {
            return redirect()->intended('/');
        }
    }

    public function search(Request $request){
        // dd($request);
        $menu = Menu::where('name', 'like', "%{$request->search}%")->where('category', '=', $request->type)->paginate(10);
        // dd($menu);
        return view('viewdetails.index', ['menus' => $menu, 'title' => 'Search for '.$request->search]);
    }
}
