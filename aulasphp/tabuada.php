<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABELA</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        th, td {
            border-style: solid;
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Bruno Vitor dos Santos - tabuada</h1>
    <table>
    <?php
        for ($i = 1; $i <= 10; $i++) 
        {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) 
            {
                $num = $i * $j;
                echo "<td> $i x $j = $num </td>";
            }
           echo "</tr>";
        }
    
    ?>
    </table>
      
   
</body>
</html>