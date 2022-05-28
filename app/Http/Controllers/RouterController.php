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

    public function addPersonal()
    {
        return view('personal.add', [
            'title' => 'Add Personal'
        ]);
    }

    public function editPersonal()
    {
        return view('personal.update', [
            'title' => 'Update Personal'
        ]);
    }
}
