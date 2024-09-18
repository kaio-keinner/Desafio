<!doctype html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h1 class="mb-4">Editar Pedido</h1>

        <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="nome" class="form-label">Cliente</label>
                <input type="text" name="nome" class="form-control" id="nome" value="{{ $pedido->nome }}" required>
            </div>
            <div class="col-md-6">
                <label for="data_pedido" class="form-label">Data do Pedido</label>
                <input type="date" name="data_pedido" class="form-control" id="data_pedido" value="{{ $pedido->data_pedido }}" required>
            </div>
            <div class="col-md-6">
                <label for="data_entrega" class="form-label">Data da Entrega</label>
                <input type="date" name="data_entrega" class="form-control" id="data_entrega" value="{{ $pedido->data_entrega }}">
            </div>
            <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="pendente" {{ $pedido->status == 'pendente' ? 'selected' : '' }}>Pendente</option>
                    <option value="entregue" {{ $pedido->status == 'entregue' ? 'selected' : '' }}>Entregue</option>
                    <option value="cancelado" {{ $pedido->status == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </form>
    </div>

</body>

</html>
