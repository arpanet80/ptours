<?php

use App\Http\Controllers\Admin\AsignaPaqueteController;
use App\Http\Controllers\Admin\DestinoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EmpresaController;
use App\Http\Controllers\Admin\HabitacionController;
use App\Http\Controllers\Admin\HabitacionImageController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\ImageMenuController;
use App\Http\Controllers\Admin\TransporteController;
use App\Http\Controllers\Admin\RestauranteController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PaqueteController;

Route::get('', [HomeController::class,'index']);      // En el RouteServiceProvider se configura como prefijo la ruta admin

Route::resource('empresas', EmpresaController::class)->names('admin.empresas');

Route::resource('transportes', TransporteController::class)->names('admin.transportes');

Route::resource('restaurantes', RestauranteController::class)->names('admin.restaurantes');

Route::resource('menus', MenuController::class)->names('admin.menus');

Route::resource('imagemenus', ImageMenuController::class)->names('admin.imagemenus');

Route::resource('hotels', HotelController::class)->names('admin.hotels');

Route::resource('habitacions', HabitacionController::class)->names('admin.habitacions');

Route::resource('habitacionimages', HabitacionImageController::class)->names('admin.habitacionimages');

Route::resource('destinos', DestinoController::class)->names('admin.destinos');

Route::resource('paquetes', PaqueteController::class)->names('admin.paquetes');

Route::resource('asignapaquetes', AsignaPaqueteController::class)->names('admin.asignapaquetes');

//Route::get('asignapaquetes', [ImageMenuController::class, 'index'])->name('admin.menuimages.index');

