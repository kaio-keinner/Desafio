<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoApiController extends Controller
{
    // GET /api/pedidos -> Lista todos os pedidos
    public function index()
    {
        return Pedido::all();
    }

    // POST /api/pedidos -> Cria um novo pedido
    public function store(Request $request)
    {
        $pedido = Pedido::create($request->all());
        return response()->json($pedido, 201); // Retorna status 201 de criação
    }

    // GET /api/pedidos/{id} -> Mostra um pedido específico
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id); // Retorna 404 se não encontrado
        return response()->json($pedido);
    }

    // PUT/PATCH /api/pedidos/{id} -> Atualiza um pedido específico
    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());
        return response()->json($pedido);
    }

    // DELETE /api/pedidos/{id} -> Apaga um pedido específico
    public function destroy($id)
    {
        Pedido::findOrFail($id)->delete();
        return response()->json(null, 204); // Retorna status 204 (sem conteúdo)
    }
}