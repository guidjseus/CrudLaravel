<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eff1f3; 
            color: #333; 
            font-family: 'Arial', sans-serif; 
        }
        .container {
            background-color: #fff; 
            border-radius: 15px; 
            padding: 30px; /
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
            max-width: 800px; 
            margin: auto;
        }
        h2 {
            color: #184612; 
            margin-bottom: 1.5rem; 
            text-align: center; 
        }
        .table th {
            background-color: #184612; 
            color: white; 
        }
        .btn-success {
            margin-bottom: 1rem; 
        }
        .btn-warning, .btn-danger {
            margin-left: 0.5rem; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Usuários</h2>
        <a href="{{ route('usuario_create') }}" class="btn btn-success mb-3">Cadastrar Usuário</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuario as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>
                        <a href="{{ route('editar_usuario', ['id' => $usuario->id]) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('deletar_usuario', ['id' => $usuario->id]) }}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
