<html>
    <head>
        <title>Primeiro Programa PHP</title>
    </head>pl,
    <body>
        <?php
            echo "<h1>Hello World, PHP-7!</h1>";
        ?>
        <?php
            print "teste\n<br>";
            print "Olá Mundo\n<br>";
            print "Escape 'chars' são os mesmo como em C\n<br>";
            print "Você pode ter quebras de linhas em uma string. <br>";
            print 'Ainda pode-se usar aspas simpres dessa forma It\'s cool<br><br>';
            print '<b>---> bruno vitor dos santos.<b>';
        ?>

        <?php
            echo "<h2 align ='center'>
                O meu programa está ecoando corretamente
                no meu servidor php!
            </h2>";
        ?>
        
        <?php
            echo "texto<br>";
            echo "Olá Mundo<br>";
            echo "Isso abrange várias linhas. As novas linhas serão saída também.<br>";
            echo "Isso abrange também\nmúltiplas linhas. A nova linha será \na saída tambem<br>";
            echo "Caracteres Escaping são feitos \"Como esse\".<br><br>";
            ?>

        <?php
            $comida_favorita = "italiana";
            print $comida_favorita[2];
            echo "<br>"; $comida_favorita = "cozinha ".$comida_favorita;
            print $comida_favorita;
        ?>
    </body>
</html>