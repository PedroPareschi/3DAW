<?php
if ($_SERVER["REQUEST_METHOD"] == 'post') {
    $var1 = $_GET["var1"];
    $var2 = $_GET["var2"];
    $resultado = $var1 + $var2;
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<form action="CalcForm.php" method="get">
    <h3>Soma</h3>
    <?php
    if (isPost == 1){
            echo "<input type='number' name='var1' value= $var1> +";
            echo "<input type='number' name='var2' value= $var2 > =";
            echo "<input type='number' name='resultado' value=$resultado>";
    } else {

    }
    ?>
    <br><br>
    <input type="submit" value="Calcular">
</form>
<br>
</body>
</html>