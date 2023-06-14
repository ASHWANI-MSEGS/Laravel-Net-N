<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// welcome page
Route::get('/home',[PizzaController::class,'welcome']);
// lists
Route::get('/new',[PizzaController::class,'index']);

// showing the number of the pizza 
Route::get ('/show/{id}',[PizzaController::class,'show']);

// posting the form
Route::post ('/new',[PizzaController::class,'store']);
// creating
Route::get ('/create',[PizzaController::class,'create']);


