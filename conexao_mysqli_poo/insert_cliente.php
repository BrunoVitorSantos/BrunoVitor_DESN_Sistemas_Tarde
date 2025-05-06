<?php
    //Inclui o arquivo de conexão com o banco de dados
    require_once 'conexao.php';

    //Estabelecemos Conexão
    $conexao = conectadb();

    //Definição dos valores para inserção
    $nome = "Bruno Vitor dos Santos";   
    $endereco = "Rua Kalamango, 32";
    $telefone = "(41) 5555-5555";
    $email = "joaosilva@teste.com";

    //Prepara a consulta SQL usando 'prepare()' para evitar SQL Injection
    $stmt = $conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (?, ?, ?, ?)");

    //Associa os parametros aos valores de consulta
    $stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

    //Executa a inserção

    if($stmt->execute()){
        echo "Cliente adicionado com sucesso!";
    }else{
        echo "Erro ao adicionar cliente: " . $stmt->error;
    }

    //Fecha a consulta e a conexão

    $stmt->close();
    $conexao->close();
    ?>