<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>

<?php
    echo $name="Bruno Santos";
    echo "<br>";
    echo $lenghth = strlen($name);
    echo "<br>";
    echo $cmpare = strcmp($name, "Kauan Vieira");
    echo "<br>";
    echo $index = strpos($name, "s");
    echo "<br>";
    echo $first = substr($name, 9, 5);
    echo "<br>";
    echo $name = strtoupper($name);
?>

<?php
    $cidade = "Joinville";
    $estado = "SC";
    $idade = 174;
    $frase_capital = "A cidade de $cidade é a melhor cidade de $estado";
    $frase_idade = "$cidade tem mais de $idade anos";
    echo "<h3>$frase_capital</h3>";
    echo "<h4>$frase_idade</h4>";

    ?>
    <?php
    print '<br><br><br><b>---> bruno vitor dos santos.<b>';
    ?>

</body>
</html>