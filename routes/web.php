<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', [PedidoController::class, 'index'])->name('pedidos.index');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::put('/pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
