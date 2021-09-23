<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
$material1 = "3DAW manhã";
$material2 = "5TAV manhã";
$nota1 = 5;

function escrevaValorNota1()
{
    global $nota1;
    echo "<p>Nota 1: $nota1</p>";
}

escrevaValorNota1();
$nota2 = 7;
$media = 6.45;
echo "<br>";
echo "O var dump retorna o tipo de variável e o seu tamanho: ";
var_dump($material1);
echo "<br>";
var_dump($nota1);
echo "<br>";
var_dump($media);
echo "<br>";
echo "<h2>Exercício 03</h2>";
echo "<table border = '1'><tr><td>" . $material1 . "</td><td>5</td></tr>";
echo "<tr><td>$material2</td><td>7</td>";
echo "</tr></table>";
echo "<br>";
echo $nota1 + $nota2;
?>
</body>
</html>