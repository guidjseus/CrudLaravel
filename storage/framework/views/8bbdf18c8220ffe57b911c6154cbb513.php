<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicao de Usuário</title>
    <!-- Adicionando o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php if(session('success')): ?>
    <div class = "alert alert-success form-control" >
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    <div class="container mt-5">
        <h2>Edicao de Usuário</h2>
        <form action="<?php echo e(route('update_usuario', ['id' => $usuario->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" value= "<?php echo e($usuario->nome); ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email" value= "<?php echo e($usuario->email); ?>">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <!-- Adicionando o JavaScript do Bootstrap e dependências -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH /home/desenvolvimento/CrudLaravel/resources/views/usuario/edit.blade.php ENDPATH**/ ?>