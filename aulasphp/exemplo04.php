<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>
    <h1>Bruno Vitor dos Santos</h1>
    <?php 
        $cores = array("Amarelo","Vermelho","Verde","Azul");
        foreach ($cores as $cor) {
            echo $cor . "<br>";
        }
    ?>
</body>
</html>