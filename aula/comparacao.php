<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3DAW</title>
</head>
<body>
<h1>3DAW</h1>
<?php
$x = 7;
$y = 7.0;
if ($x == $y) {
    echo "$x é igual à $y";
} else {
    echo "$x não é igual à $y";
}

echo "<br><br>";

if ($x === $y) {
    echo "$x é idêntico à $y";
} else {
    echo "$x não é idêntico à $y";
}

echo "<br><br>";

if ($x != $y) {
    echo "$x não é semelhante à $y";
} else {
    echo "$x é semelhante à $y";
}

$y = 7;

echo "<br><br>";

if ($x !== $y) {
    echo "$x não é idêntico à $y";
} else {
    echo "$x é idêntico à $y";
}

?>
</body>
</html>

