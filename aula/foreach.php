<?php

$nomes = array("Agda", "Alexandre", "Alberto", "Brenda", "Pedro");
?>
<head>
    <title>Foreach</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Nome</th>
        <!--         <th>Email</th>-->
        <!--         <th>Idade</th>-->
        <!--         <th>Media</th>-->
    </tr>

    <?php
    foreach ($nomes as $nome) {
        echo "<tr>";
        echo "<td>$nome</td>";
        echo "</tr>";
    }
    ?>
</table>
<br>
</body>