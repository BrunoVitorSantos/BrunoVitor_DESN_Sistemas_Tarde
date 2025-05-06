<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>
</head>
<body>
    <h1>Bruno Vitor dos Santos</h1>
    <?php 
        $musicas = array(
        array ("Kid Abelha","Amanhã",1993),
        array ("Legião Urbana","Eduardo e Mônica",1986),
        array ("Titãs","Epitáfio",2001));
        for ($linha=0;$linha<3;$linha++)
        {
            for ($coluna=0;$coluna<3;$coluna++)
            {
                echo $musicas[$linha][$coluna]." | ";
            }
            echo "<br>";
        }
         
    ?>
</body>
</html>