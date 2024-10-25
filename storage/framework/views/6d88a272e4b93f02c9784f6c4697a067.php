<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <!-- Adicionando o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff; 
            color: #fff; 
            font-family: 'Roboto', sans-serif; /* Fonte Roboto */
        }
        .container {
            background-color: #004d00; 
            border-radius: 15px; 
            padding: 30px; /* Aumentei o padding */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4); /* Sombra mais intensa */
            max-width: 500px; /* Limitar a largura do container */
            margin: auto; /* Centralizar o container */
            margin-top: 5rem; /* Espaço acima do container */
        }
        h2 {
            color: #000000; 
            margin-bottom: 1.5rem; /* Espaço abaixo do título */
            text-align: center; /* Centralizar o título */
        }
        .btn-primary {
            background-color: #036911;
            border: none; 
            transition: background-color 0.3s, transform 0.2s; /* Transição suave */
        }
        .btn-primary:hover {
            background-color: #5ae265; 
            transform: translateY(-2px); /* Efeito de elevação ao passar o mouse */
        }
        .form-control {
            background-color: #e2e2e2; /* Fundo dos campos */
            border: none; /* Remover borda */
            border-radius: 5px; /* Bordas arredondadas */
        }
        .form-control:focus {
            box-shadow: none; 
            border-color: #000000; /* Cor da borda ao focar */
            background-color: #fff; /* Fundo branco ao focar */
        }
        label {
            color: #000000; 
        }
        .form-group {
            margin-bottom: 1.5rem; /* Espaçamento entre os campos */
        }
    </style>
</head>
<body>
    <?php if(session('success')): ?>
    <div class = "alert alert-success form-control" >
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    <div class="container mt-5">
        <h2>Cadastro de Usuário</h2>
        <form action="<?php echo e(route('lista_usuario')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button> <!-- Botão ocupando toda a largura -->
        </form>
    </div>

    <!-- Adicionando o JavaScript do Bootstrap e dependências -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH /home/desenvolvimento/Guilherme/resources/views/usuario/create.blade.php ENDPATH**/ ?>