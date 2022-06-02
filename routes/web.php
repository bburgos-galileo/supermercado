<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\DetalleController;

Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/home', 'index')->name('home');
});

Route::controller(ClienteController::class)->group(function () {
    Route::get('/clientes', 'index');
    Route::post('/clientes', 'store');
    Route::get('/clientes/Nuevo', 'create');
    Route::get('/clientes/{id}/Editar', 'edit');
    Route::post('/clientes/{id}/Editar', 'update');
    Route::get('/clientes/{id}/Eliminar', 'destroy');
});

Route::controller(MarcaController::class)->group(function () {
    Route::get('/marcas', 'index');
    Route::post('/marcas', 'store');
    Route::get('/marcas/Nuevo', 'create');
    Route::get('/marcas/{id}/Editar', 'edit');
    Route::post('/marcas/{id}/Editar', 'update');
    Route::get('/marcas/{id}/Eliminar', 'destroy');
});

Route::controller(ProveedorController::class)->group(function () {
    Route::get('/proveedores', 'index');
    Route::post('/proveedores', 'store');
    Route::get('/proveedores/Nuevo', 'create');
    Route::get('/proveedores/{id}/Editar', 'edit');
    Route::post('/proveedores/{id}/Editar', 'update');
    Route::get('/proveedores/{id}/Eliminar', 'destroy');
});

Route::controller(ProductoController::class)->group(function () {
    Route::get('/productos', 'index');
    Route::post('/productos', 'store');
    Route::get('/productos/Nuevo', 'create');
    Route::get('/productos/{id}/Editar', 'edit');
    Route::post('/productos/{id}/Editar', 'update');
    Route::get('/productos/{id}/Eliminar', 'destroy');
});

Route::controller(FacturaController::class)->group(function () {
    Route::get('/facturas', 'index');
    Route::post('/facturas', 'store');
    Route::get('/facturas/Nuevo', 'create');
    Route::get('/facturas/{id}/Editar', 'edit');
    Route::post('/facturas/{id}/Editar', 'update');
    Route::get('/facturas/{id}/Eliminar', 'destroy');
});

Route::controller(DetalleController::class)->group(function () {
    Route::get('/detalles/{id}/Nuevo', 'create');
    Route::post('/detalles', 'store');
    Route::get('/detalles/{id}/Eliminar', 'destroy');
});


