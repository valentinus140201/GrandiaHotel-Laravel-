<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Menu;

use Illuminate\Http\Request;

class RouterController extends Controller
{
    public function addMenu()
    {
        $category = Category::all();
        // dd($category);
        return view('master.add', [
            'title' => 'Add Menu', 'categories' => $category
        ]);
    }

    public function addCategory()
    {
        return view('master.addKategori', [
            'title' => 'Add Category'
        ]);
    }

    public function editMenu($id)
    {
        $menu = Menu::find($id);
        $categories = Category::all();

        return view('master.update', [
            'menu' => $menu,
            'title' => 'Update Menu ' . $menu->name,
            'categories' => $categories
        ]);
    }

    public function addPersonal()
    {
        $user = User::all();
        return view('personal.add', [
            'title' => 'Add Personal', 'users' => $user
        ]);
    }

    public function editPersonal($id)
    {
        $user = User::find($id);

        return view('personal.update', [
            'user' => $user,
            'title' => 'Update Personal' . $user->name
        ]);
    }
}
