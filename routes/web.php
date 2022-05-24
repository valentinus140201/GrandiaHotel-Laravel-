<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.main', [
        "title" => "Categories"
    ]);
});

Route::get('/categories', [CategoriesController::class, 'index', "title" => "Categories"]);
Route::get('/login', [LoginController::class, 'index', "title" => "Login"]);
Route::get('/register', [RegisterController::class, 'index', "title" => "Register"]);