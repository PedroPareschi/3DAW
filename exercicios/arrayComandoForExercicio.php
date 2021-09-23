<?php

$nomes = array("Hamburguer", "Pizza", "Cachorro quente", "Refrigerante", "Suco");
$precos = array(30.21, 50.43, 12.32, 6.90, 5.80);

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: lightyellow;
            font-family: Alef, serif;
        }

        h1 {
            text-align: center;

            color: red;
        }

        table {
            font-size: xx-large;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        th{
            color: lightcoral;
        }

    </style>
</head>
<body>

<h1>Lanchonete</h1>

<table>

    <tr>
        <th>Lanche</th>
        <th>Preço</th>
    </tr>

    <?php

    for ($x = 0; $x < 5; $x++) {
        echo "<tr>";
        echo "<td>$nomes[$x]</td>";
        echo "<td>R$ $precos[$x]</td>";
        echo "</tr>";
    }


    ?>
</table>

</body>
</html>

