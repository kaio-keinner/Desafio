<!doctype html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h1 class="mb-4">Gerenciamento de Pedidos</h1>

        <!-- Formulário de Adicionar Pedido -->
        <form action="{{ route('pedidos.store') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="nome" class="form-label">Cliente</label>
                <input type="text" name="nome" class="form-control" id="nome" required>
            </div>
            <div class="col-md-6">
                <label for="data_pedido" class="form-label">Data do Pedido</label>
                <input type="date" name="data_pedido" class="form-control" id="data_pedido" required>
            </div>
            <div class="col-md-6">
                <label for="data_entrega" class="form-label">Data da Entrega</label>
                <input type="date" name="data_entrega" class="form-control" id="data_entrega">
            </div>
            <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="pendente">Pendente</option>
                    <option value="entregue">Entregue</option>
                    <option value="cancelado">Cancelado</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Adicionar Pedido</button>
            </div>
        </form>

        <!-- Tabela de Pedidos -->
        <h2 class="mt-5">Lista de Pedidos</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Data do Pedido</th>
                    <th>Data da Entrega</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->nome }}</td>
                        <td>{{ $pedido->data_pedido }}</td>
                        <td>{{ $pedido->data_entrega }}</td>
                        <td>{{ $pedido->status }}</td>
                        <td>
                            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
                            </form>

                            <form action="{{ route('pedidos.edit', $pedido->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                            </form>

                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>