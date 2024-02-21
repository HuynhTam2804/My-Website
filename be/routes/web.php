<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\AdminsController;

use App\Http\Controllers\ProvidersController;


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


Route::middleware('guest')->group(function () {

    Route::get('/login', [AdminsController::class, 'Login'])->name('login');
    Route::post('/login', [AdminsController::class, 'LoginHandler'])->name('login-handler');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [AdminsController::class, 'DashBoard'])->name('dashboard');
    Route::get('/logout', [AdminsController::class, 'Logout'])->name('logout');
});

// Route::get('/', function () {
//     return view('login');
// });


Route::middleware('auth')->group(function () {

    //Product


    //ProductType


    // Providers

    // Import



    // Export


    //Acconut



});
