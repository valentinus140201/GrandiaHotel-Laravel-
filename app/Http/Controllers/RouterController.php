<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
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

    public function editMenu()
    {
        return view('master.update', [
            'title' => 'Update Menu'
        ]);
    }

    public function addPersonal()
    {
        $user = User::all();
        return view('personal.add', [
            'title' => 'Add Personal', 'users' => $user
        ]);
    }

    public function editPersonal()
    {
        return view('personal.update', [
            'title' => 'Update Personal'
        ]);
    }
}
