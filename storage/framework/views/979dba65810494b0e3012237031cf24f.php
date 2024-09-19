<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Usuários</h2>
        <a href="<?php echo e(route('usuario_create')); ?>" class="btn btn-success mb-3">Cadastrar Usuário</a>
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
                        <a href="<?php echo e(route('editar_usuario', ['id' => $usuario->id])); ?>" class="btn btn-warning">Editar</a>
                        <a href="<?php echo e(route('deletar_usuario', ['id' => $usuario->id])); ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH /home/desenvolvimento/Documentos/projetoG/resources/views/usuario/index.blade.php ENDPATH**/ ?>