<?php

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
    //-----------------------------------------------------------  
        Route::resource('Dashboard', DashboardController::class); 
        
        Route::get('Kwitansi/print/{id}', 'KwitansiController@print')
            ->name('Kwitansi.print');
        Route::resource('Print', PrintController::class); 

        Route::get('Kwitansi/deletedata/{id}', 'KwitansiController@deletedata')
            ->name('Kwitansi.deletedata');

        Route::resource('Kwitansi', KwitansiController::class); 

Route::get('/', function () {
    return redirect('Kwitansi');
});

//route resource
// Route::resource('/posts', \App\Http\Controllers\PostController::class);
