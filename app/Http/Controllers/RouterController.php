<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouterController extends Controller
{
    public function addMenu()
    {
        return view('master.add', [
            'title' => 'Add Menu'
        ]);
    }

    public function editMenu()
    {
        return view('master.update', [
            'title' => 'Update Menu'
        ]);
    }
}
