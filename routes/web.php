<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController; 
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


// Auth::routes();
Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    // Your routes here
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});
Route::get('/', [ApiController::class,'fetchData']);