<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function editMenu()
    {
        return view('master.update', [
            'title' => 'Update Menu'
        ]);
    }
}
