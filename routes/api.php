<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PedidoApiController;

Route::get('/pedidos', [PedidoApiController::class, 'index']);
