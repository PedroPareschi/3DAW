<?php

$nomes = array("Agda", "Alexandre", "Alberto", "Brenda", "Pedro");
$idades = array(31, 30, 44, 34, 22);
$emails = array("agda@gmail.com", "alexandre@gmail.com", "alberto@gmail.com", "brenda@email.com", "pedro@email.com");
$medias = array(7.5, 5.6, 8.7, 6.5, 6.0);
?>

<!DOCTYPE html>
<html>
<body>

<h1>Tabela</h1>

<table border="1">

    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Idade</th>
        <th>Média</th>
    </tr>

    <?php

    //		for ($x=0; $x<=2; $x++)
    //		{
    //			echo "<tr>";
    //			echo "<td>$nomes[$x]</td>";
    //			echo "<td>$emails[$x]</td>";
    //			echo "<td>$idades[$x]</td>";
    //			echo "<td>$medias[$x]</td>";
    //			echo "</tr>";
    //		}

    $x = 0;
    while ($x <= 4) {
        if ($nomes[$x] == "Alexandre") {
            $x++;
            continue;
        }
        echo "<tr>";
        echo "<td>$nomes[$x]</td>";
        echo "<td>$emails[$x]</td>";
        echo "<td>$idades[$x]</td>";
        echo "<td>$medias[$x]</td>";
        echo "</tr>";
        $x++;
    }

    echo "</table>";

    do {
        echo "<span>Testando do while, valor de x: $x</span><br>";
        echo "<span>Testando novamente do while, valor de x: " . $x . "</span>";
        $x++;
    } while ($x < 5)
    ?>

</body>
</html>
