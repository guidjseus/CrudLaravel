<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Adicionando Font Awesome para os ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>  
        body {
            background-color: #eff1f3; 
            color: #333; 
            font-family: 'Arial', sans-serif; 
        }
        .container {
            background-color: #fff; 
            border-radius: 15px; 
            padding: 30px; 
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
        .btn-warning, .btn-danger, .btn-visualizar {
            margin-left: 0.5rem; 
        }
        .btn-visualizar {
            background-color: #007BFF;
            color: white;
        }
        .btn-visualizar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Usuários</h2>
        <a href="<?php echo e(route('usuario_create')); ?>" class="btn btn-success mb-3">
            <i class="fas fa-user-plus"></i> Cadastrar Usuário
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $usuario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->id); ?></td>
                    <td><?php echo e($usuario->nome); ?></td>
                    <td>
                        <a href="<?php echo e(route('editar_usuario', ['id' => $usuario->id])); ?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i> 
                        </a>
                        <a href="<?php echo e(route('deletar_usuario', ['id' => $usuario->id])); ?>" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <a href="<?php echo e(route('show_usuario', ['id' => $usuario->id])); ?>" class="btn btn-visualizar">
                            <i class="fas fa-eye"></i> 
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH /home/desenvolvimento/Guilherme/resources/views/usuario/index.blade.php ENDPATH**/ ?>