<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes([
    'reset' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pedidos', [App\Http\Controllers\pedidosController::class, 'create'])->name('pedidos');
Route::get('/recetas', [App\Http\Controllers\recetasController::class, 'create'])->name('recetas');
Route::get('/proveedores', [App\Http\Controllers\proveedoresController::class, 'create'])->name('proveedores');

Route::get('/productos', [App\Http\Controllers\productosController::class, 'index'])->name('productos');
Route::post('/productos/crear', [App\Http\Controllers\productosController::class, 'store'])->name('crearProductos');
