<?php
namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('welcome', compact('pedidos'));
    }

    public function store(Request $request)
    {
        Pedido::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        Pedido::findOrFail($id)->delete();
        return redirect()->back();
    }
}
