<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
$x = $_GET["var1"];
$y = $_GET["var2"];

if ($x == $y) {
    echo "<p>x é igual a y, x = $x</p>";
} else {
    echo "<p>x não é igual a y, x = $x e y = $y</p>";
    if ($x > $y) {
        echo "<p>x é maior que y</p>";
    } else {
        echo "<p>y é maior que x</p>";
    }
}
if ($x === $y) {
    echo "<p>x é idêntico a y, x = $x</p>";
} else {
    echo "<p>x não é idêntico a y, x = $x e y = $y</p>";
}
if ($x >= 5) {
    echo "<p>x é maior ou igual a 5</p>";
} else {
    echo "<p>x não é maior ou igual a 5</p>";
}
if ($x <= 6) {
    echo "<p>x é menor ou igual a 6</p>";
} else {
    echo "<p>x não é menor ou igual a 6</p>";
}
if ($y >= 5) {
    echo "<p>y é maior ou igual a 5</p>";
} else {
    echo "<p>y não é maior ou igual a 5</p>";
}
if ($y <= 6) {
    echo "<p>y é menor ou igual a 6</p>";
} else {
    echo "<p>y não é menor ou igual a 6</p>";
}

?>
<br>
<form action="ex10_ComparaValores.php" method=GET>
    <h3>Valores</h3>
    <input type=number name="var1"> +
    <input type=number name="var2"> =
    <br><br>
    <input type="submit" value="Comparar">
</form>
<br>
</body>
</html>
