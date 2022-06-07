<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\productcontroller;

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
Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/details/{pid}',[productcontroller::class,'details'])->name('details');
Route::get('/product/list',[productcontroller::class,'list'])->name('product.list');
//Route::get('/details/{id}/{name}',[productcontroller::class,'details'])->name('details');
Route::get('/product/create',[productcontroller::class,'create'])->name('create');
Route::post('/product/create',[productcontroller::class,'createSubmit'])->name('create');

