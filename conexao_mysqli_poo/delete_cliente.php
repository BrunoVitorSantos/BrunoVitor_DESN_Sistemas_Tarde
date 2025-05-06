<?php

// Inclui o arquivo de conexão com o banco de dados
require_once 'conexao.php'; 

// Chama a função para conectar ao banco de dados
$conexao = conectadb(); 

// ID do cliente a ser excluído
$id_cliente = 4; 

$stmt = $conexao->prepare("DELETE FROM cliente WHERE id_cliente = ?"); // Prepara a consulta SQL

$stmt->bind_param("i", $id_cliente); // Liga o parâmetro à consulta

if ($stmt->execute()) { // Executa a consulta
    echo "Cliente removido com sucesso!<br>";
} else {
    echo "Erro ao remover cliente: " . $stmt->error . "<br>";
}

?>