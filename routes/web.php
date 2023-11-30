<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function ()
{
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/create',[HomeController::class,'index'])->name('create');
    Route::get('/home',[HomeController::class,'home'])->name('homepage');

    Route::resources(['products'=>ProductController::class]);
});
