<?php

use App\Http\Controllers\RouterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [CategoryController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/master', [MasterController::class, 'index']);
Route::get('/master/addmenu', [RouterController::class, 'addMenu']);
Route::get('/master/updatemenu', [RouterController::class, 'editMenu']);
Route::get('/master/addcategory', [RouterController::class, 'addCategory']);
Route::get('/personal/addpersonal', [RouterController::class, 'addPersonal']);
Route::get('/personal/editpersonal', [RouterController::class, 'editPersonal']);

//Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

//Personal
Route::post('/addpersonal', [PersonalController::class, 'store']);
Route::get('/personal', [PersonalController::class, 'show']);
Route::get('/delete/{id}', [PersonalController::class, 'destroy']);

//Menu
Route::post('/addmenu', [MenuController::class, 'store']);
Route::get('/categories/menu/{category}', [MenuController::class, 'show']);
Route::get('/delete/{id}', [MenuController::class, 'destroy']);
