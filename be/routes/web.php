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



// Route::get('/', function () {
//     // return view('login');
//     return view('layout');
// });

Route::middleware('guest')->group(function () {

    Route::get('/login', [AdminsController::class, 'login'])->name('admins.login');
    Route::post('/login', [AdminsController::class, 'loginHandle'])->name('loginHandle');
});

Route::middleware('auth')->group(function () {


    Route::get('/', [AdminsController::class, 'dashBoard'])->name('index');
    Route::get('/logout', [AdminsController::class, 'logout'])->name('admins.logout');

    //Admins
    Route::prefix('/admins')->name('admins.')->group(function () {
        Route::get('/', [AdminsController::class, 'index'])->name('index');
        Route::post('/search', [AdminsController::class, 'search'])->name('search');

        Route::post('/create', [AdminsController::class, 'create'])->name('create');

        Route::get('/update/{id}', [AdminsController::class, 'update'])->name('update');
        Route::post('/update/{id}', [AdminsController::class, 'updateHandle'])->name('update');

        Route::get('/delete/{id}', [AdminsController::class, 'delete'])->name('delete');
    });
    //endAdmins


    //Product


    //ProductType


    // Providers

    // Import



    // Export


    //Acconut



});
