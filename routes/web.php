<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebTraverController;


/////// frontend
//Route::get('/', [WebTraverController::class, 'index']);
//Route::get('destinos', [WebTraverController::class, 'destino']);
//Route::get('destinos/detalle', [WebTraverController::class, 'detailedestino']);

Route::controller(WebTraverController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('destinos', 'destino');
    Route::get('destinos/detalle/{id}', 'detailedestino');
});

// Original-- Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::controller(HomeController::class)->group(function() {
//     Route::get('home', 'index');
//     Route::get('home/destinos', 'destinos');
// });

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
