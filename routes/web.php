<?php

use App\Http\Controllers\RouterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ViewDetailsController;

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

Route::get('/', [CategoriesController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/personal', [PersonalController::class, 'index']);
Route::get('/master', [MasterController::class, 'index']);
Route::get('/viewdetails', [ViewDetailsController::class, 'index']);
Route::get('/master/addmenu', [RouterController::class, 'addMenu']);
Route::get('/master/updatemenu', [RouterController::class, 'editMenu']);


//Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

//Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//Menu
Route::post('/addmenu', [MenuController::class, 'store']);
