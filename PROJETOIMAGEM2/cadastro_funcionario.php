<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionario</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <h2>Funcionário</h2>
<!-- FORMULARIO PARA CADASTRAR FUNCIONARIO -->
    <form action="salvar_funcionario.php" method="POST" enctype="multipart/form-data">

    <!-- CAMPO PARA INSERIR O NOME DO FUNCIONARIO -->
    <label for="nome">Nome:</label> 
    <input type="text" name="nome" id="nome" required><br>

    <!-- CAMPO PARA INSERIR O TELEFONE DO FUNCIONARIO -->
    <label for="telefone">Telefone:</label> 
    <input type="text" name="telefone" id="telefone" required><br>
    
    <!-- CAMPO PARA FAZER UPLOAD DA FOTO DO FUNCIONARIO -->
    <label for="foto">Foto:</label> 
    <input type="file" name="foto" id="foto" required><br>

    <!-- BOTAO PARA ENVIAR O FORMULARIO -->
    <button type="submit">Cadastrar</button><br>
    </form>
    </div>    
</body>
</html>