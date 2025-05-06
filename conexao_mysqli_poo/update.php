<?php
    //Inclui o arquivo de conexão com o banco de dados
    require_once 'conexao.php';

    //Estabelecemos Conexão
    $conexao = conectadb();

    //Define os novos valores
    $nome = "Bruno Vieira dos Anjos";
    $endereco = "Rua Kalamango, 32";
    $telefone = "(41) 55555-5555";
    $email = "bruno@gmail.com";
    

    // cliente a ser mudado (id = 5)  
    // Fernanda Costa
    // Rua do Comércio, 555
    // (41) 97654-3210
    // fernanda.costa@gmail.com

    // ID do cliente a ser atualizado
    $id_cliente = 5; 
    

    //Prepara a consulta SQL segura
    $stmt = $conexao->prepare("UPDATE cliente SET nome = ?, endereco = ?, telefone = ?, email = ? WHERE id_cliente = ?");

    //Associa os parâmetros aos valores de consulta
    $stmt->bind_param("ssssi", $nome, $endereco, $telefone, $email, $id_cliente);

    //Executa

    if($stmt->execute()){
        echo "Cliente atualizado com sucesso!";
    }else{
        echo "Erro ao atualizar cliente: " . $stmt->error;
    }

     $stmt->close();
    $conexao->close();
?>