<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\CompraController;

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

Route::get('/', HomeController::class);
//Cargo
Route::get('cargo', [CargoController::class, 'index']);
Route::get('cargo/create', [CargoController::class, 'create']);
Route::get('cargo/cargo', [CargoController::class, 'show']);
//Usuario
Route::get('usuario', [UsuarioController::class, 'index']);
Route::get('usuario/create', [UsuarioController::class, 'create']);
Route::get('usurio/usuario', [UsuarioController::class, 'show']);
//Cliente
Route::get('cliente', [ClienteController::class, 'index']);
Route::get('cliente/create', [ClienteController::class, 'create']);
Route::get('cliente/cliente', [ClienteController::class, 'show']);
//Proveedor
Route::get('proveedor', [ProveedorController::class, 'index']);
Route::get('proveedor/create', [ProveedorController::class, 'create']);
Route::get('proveedor/proveedor', [ProveedorController::class, 'show']);
//Menu 
Route::get('menu ', [MenuController::class, 'index']);
Route::get('menu /create', [MenuController::class, 'create']);
Route::get('menu /menu', [MenuController::class, 'show']);
//Ingredientes 
Route::get('ingredientes', [IngredientesController::class, 'index']);
Route::get('ingredientes/create', [IngredientesController::class, 'create']);
Route::get('ingredientes/ingredientes', [IngredientesController::class, 'show']);
//Detalle 
Route::get('detalle', [DetalleController::class, 'index']);
Route::get('detalle/create', [DetalleController::class, 'create']);
Route::get('detalle/detalle', [DetalleController::class, 'show']);
//Factura
Route::get('factura', [FacturaController::class, 'index']);
Route::get('factura/create', [FacturaController::class, 'create']);
Route::get('factura/factura', [FacturaController::class, 'show']);
//Compra
Route::get('compra', [CompraController::class, 'index']);
Route::get('compra/create', [CompraController::class, 'create']);
Route::get('compra/compra', [CompraController::class, 'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
