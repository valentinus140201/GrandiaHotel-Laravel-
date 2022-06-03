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

Route::get('/master/addmenu', [RouterController::class, 'addMenu']);
Route::get('/master/editMenu/{id}', [RouterController::class, 'editMenu']);
Route::get('/master/addcategory', [RouterController::class, 'addCategory']);

Route::get('/personal/addpersonal', [RouterController::class, 'addPersonal']);
Route::get('/personal/editPersonal/{id}', [RouterController::class, 'editPersonal']);

//Home
Route::get('/', [CategoryController::class, 'index']);

//Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

//Categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/addcategory', [CategoryController::class, 'store']);
Route::get('/searchCategories', [CategoryController::class, 'search']);

//Personal
Route::post('/addpersonal', [PersonalController::class, 'store']);
Route::get('/personal', [PersonalController::class, 'show']);
Route::get('/personal/delete/{id}', [PersonalController::class, 'destroy']);
Route::get('/searchPersonal', [PersonalController::class, 'search']);
Route::put('/updatePersonal', [PersonalController::class, 'update']);
Route::get('/personal/deletePersonal/{id}', [PersonalController::class, 'destroy']);

//Master
Route::get('/master', [MasterController::class, 'index']);
Route::get('/searchViewDetails', [MasterController::class, 'search']);
Route::get('/editMenu/{id}', [MenuController::class, 'search']);

//Menu
Route::post('/addmenu', [MenuController::class, 'store']);
Route::get('/categories/menu/{category}', [MenuController::class, 'show']);
Route::get('/master/delete/{id}', [MenuController::class, 'destroy']);
Route::get('/searchMaster', [MenuController::class, 'search']);
Route::put('/updateMenu', [MenuController::class, 'update']);
Route::get('/master/deleteMenu/{id}', [MenuController::class, 'delete']);
