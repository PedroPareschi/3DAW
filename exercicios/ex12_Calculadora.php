<?php
function soma($var1, $var2)
{
    return $var1 + $var2;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var1 = $_POST["var1"];
    $var2 = $_POST["var2"];

    if (is_numeric($var1) and is_numeric($var2)) {
        $soma = soma($var1, $var2);
    } else {
        $soma = "Os valores devem ser números";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>3DAW</h1>
<br>
<form action="ex12_Calculadora.php" method="post">
    <h3>Somar dois numeros</h3>
    a: <input type="text" name="var1"> +
    b: <input type="text" name="var2"> =
    <?php if (!empty($soma)) {
        echo "$soma";
    } ?>
    <br><br>
    <input type="submit" value="Somar">
</form>
<br>
</body>
</html>
