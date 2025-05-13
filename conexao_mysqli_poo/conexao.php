<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Habilita relatórios de erro

    function conectadb() {

    $endereco = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "empresa";

    try {
        $con = new mysqli($endereco, $usuario, $senha, $banco);

        $con->set_charset("utf8mb4"); // Define o charset para UTF-8
        return $con;
        } catch (Exception $e) {
        // Se ocorrer um erro ao conectar, exAibe uma mensagem de erro
        // e encerra o script
        die("Erro ao conectar ao banco de dados: " . $e->getMessage());
    }
} // Fim da função conectadb
?>