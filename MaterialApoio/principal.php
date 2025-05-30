<?php 
session_start();
require_once 'conexao.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();

    //OBTENDO O NOME DO PERFIL DO USUARIO LOGADO
    $id_perfil = $_SESSION['perfil'];
    $sql = "SELECT nome FROM perfil WHERE id_perfil = :id_perfil";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':senha', $senha_hash);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $perfil = $stmt->fetch(PDO::FETCH_ASSOC);
    $nome_perfil = $perfil['nome'];

    //DEFINIÇAO DAS PERMISSOES POR PERFIL

    $permissoes = [
        1 => ["Cadastrar" =>["cadastro_usuario.php", "cadastro_perfil.php", "cadastro_cliente.php", "cadastro_fornecedor.php", "cadastro_produto.php", "cadastro_funcionario"],
 
              "Buscar" => ["buscar_usuario.php", "buscar_perfil.php", "buscar_cliente.php", "buscar_fornecedor.php", "buscar_produto.php", "buscar_funcionario.php"],
        
              "Alterar" => ["alterar_usuario.php", "alterar_perfil.php", "alterar_cliente.php", "alterar_fornecedor.php", "alterar_produto.php", "alterar_funcionario.php"],
        
              "Excluir" => ["excluir_usuario.php", "excluir_perfil.php", "excluir_cliente.php", "excluir_fornecedor.php", "excluir_produto.php", "excluir_funcionario.php"]],

        2 => ["Cadastrar" => ["cadastro_cliente.php"],
        
              "Buscar" => ["buscar_cliente.php", "buscar_fornecedor.php", "buscar_produto.php"],

              "Alterar" => ["alterar_cliente.php", "alterar_fornecedor.php"]],

        3 => ["Cadastrar" => ["cadastro_fornecedor.php", "cadastro_produto.php"],
        

  
        ] 
    ]
}