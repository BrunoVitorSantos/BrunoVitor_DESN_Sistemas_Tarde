<?php
//CONEXAO COM O BANCO DE DADOS
    $host = 'localhost';
    $dbname = 'bd_imagem';
    $user = 'root';
    $password = '';

    try{
        //CRIA UMA NOVA INSTANCIA DE pdo PARA CONECTAR AO BANCO DE DADOS
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //DEFINE O MODO DE ERRO DO pdo PARA EXCECOES

        //RECUPERA TODOS OS FUNCIONARIOS DO BANCO DE DADOS
        $sql = "SELECT id, nome FROM funcionarios";
        $stmt = $pdo->prepare($sql); //PREPARA A INSTRUCAO SQL PARA EXECUCAO
        $stmt->execute(); //EXECUTA A INSTRUCAO 
        $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC); //BUSCA TODOS OS RESULTADOS COMO UMA MATRIZ ASSOCIATIVO
        
        //VERIFICA SE FOI SOLICITADO A EXCLUSAO DE UM FORMULARIO
        if($_SERVER['RESQUEST_METHOD'] == 'POST' && isset($_POST['excluir_id'])){
            $excluir_id = $_POST['excluir_id'];
            $sql_excluir = "DELETE FROM funcionarios WHERE id = :id";
            $stmt_excluir = $pdo->prepare($sql_excluir); 
            $stmt_excluir->bindParam(':id', $excluir_id, PDO::PARAM_INT); 
            $stmt_excluir->execute(); 

            //REDIRECIONA
            header("Location: ". $_SERVER['PHP_SELF']);
            exit();
        }
    }
        catch(PDOException $e){
            echo "Erro.". $e->getMessage();
        }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Funcionarios</title>
</head>
<body>
    <h1>Consulta Funcionários</h1>
    
    <ul>
        <?php foreach ($funcionarios as $funcionario): ?>
            <li>
                <a href="visualizar_funcionario.php?id=<? $funcionario['id']; ?>">
                    <?php htmlspecialchars($funcionario['nome']); ?>
                </a>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="excluir_id" value="<?php $funcionario['id']; ?>">
                    <button style="color: red;" type="submit" onclick="return confirm('Tem certeza que deseja excluir este funcionário?');">Excluir</button>
                </form>
            </li>
    <?php endforeach; ?>    
    </ul>
    
</body>
</html>