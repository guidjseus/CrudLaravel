<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    <!-- Link para o Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Excluir Usuário</h2>
        <form action="<?php echo e(route('excluir_usuario', ['id' => $usuario->id])); ?>" method="POST"> 
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="usuarioNome">Tem certeza que deseja excluir este usuário?</label>
                <input type="text" class="form-control" id="usuarioNome" value="<?php echo e($usuario->nome); ?>" readonly> 
            </div>
            <button type="submit" class="btn btn-danger">Sim</button>
        </form>
    </div>

    <!-- Scripts do Bootstrap e jQuery (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH /home/desenvolvimento/CrudLaravel/resources/views/usuario/delete.blade.php ENDPATH**/ ?>