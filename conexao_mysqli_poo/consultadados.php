<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão Banco de Dados</title>
</head>
<body>
    <h2>BRUNO VITOR DOS SANTOS</h2>
    <h1>Conexão com o Banco de Dados</h1>
    
    <?php 

        // Definição das credenciais de acesso ao banco de dados
        $servidor = "localhost"; // Endereço do servidor MYSQL
        $usuario = "root";      // Nome de usuário do banco
        $senha = "";           // Senha do banco
        $banco = "empresa";   // Nome do banco de dados

        // Criando a conexão com MYSQLi

        $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

        // Verificação da conexão

        if (!$conn) { // Caso a conexão falhe, interrompe o script e exibe uma mensagem de erro
            die("Conexão falhou: " . mysqli_connect_error());
        }
        
        // Configuração do conjunto de caracteres para evitar problemas de acentução

        mysqli_set_charset($conn, "utf8mb4");
        
        // Mensagem de sucesso
        echo "Conexão bem-sucedida!<br>";

        // Consulta SQL para obter clientes

        $sql = "SELECT id_cliente, nome, email FROM cliente";
        $result = mysqli_query($conn, $sql);

        // Verifica de há resultados na consulta

        if (mysqli_num_rows($result) > 0) {
            // Exibe os resultados em uma tabela
        while ($linha = mysqli_fetch_assoc($result)) {
            echo "ID: ". $linha["id_cliente"]. " - Nome: " . $linha["nome"]. " - Email: " . $linha["email"]. "<br>";}
        }else{
            echo "<br><br>Nenhum resultado encontrado.";}
        
        // Fecha a conexão com o banco de dados
        mysqli_close($conn);

    ?>

</body>
</html>