<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('',[HomeController::class,'index'])->name('home');
Route::post('/add',[HomeController::class,'add'])->name('add');
Route::get('/newAddress',[HomeController::class,'newAddress'])->name('newAddress');
Route::post('/saveNewAddress',[HomeController::class,'saveNewAddress'])->name('saveNewAddress');
Route::DELETE('/home/delete/{id}',[HomeController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::PUT('/update/{id}',[HomeController::class,'update'])->name('update');
Route::get('/report',[HomeController::class,'report'])->name('report');


Route::get('/test',[HomeController::class,'test'])->name('test');