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


Route::middleware('auth')->group(function(){

    //Product


    //ProductType


    // Providers

    Route::prefix('/Providers')->group(function(){

        Route::name('provider.')->group(function(){

            Route::get('list',[ProvidersController::class,'List'])->name('list');
            
            Route::get('add',[ProvidersController::class,'Add'])->name('add');
            Route::post('add',[ProvidersController::class,'AddHandler'])->name('add-handler');
            
            Route::get('edit/{id}',[ProvidersController::class,'Edit'])->name('edit');
            Route::post('edit/{id}',[ProvidersController::class,'EditHandler'])->name('edit-handler');
            
            Route::get('delete/{id}',[ProvidersController::class,'Delete'])->name('delete');

        });

    });

    // Import



    // Export


    //Acconut

    

});