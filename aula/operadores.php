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
$y = 5;
$z = $x + $y;
$a = 7 + 5;
$b = 7 - 5;
$c = 7 * 5;
$d = 7 / 5;
$e = 7 % 5;
$f = 7 ** 2;
echo "o valor do resultado z é " . $z;
echo "<br>o valor do resultado 7+5 é " . $a;
echo "<br>o valor do resultado 7-5 é " . $b;
echo "<br>o valor do resultado 7*5 é " . $c;
echo "<br>o valor do resultado 7/5 é " . $d;
echo "<br>o valor do resultado 7%5 é " . $e;
echo "<br>o valor do resultado 7**2 é " . $f;


$x2 = 7;
$y2 = 5;
$z2 = $x2 + $y2;
$g = $h = $i = $j = $k = $l = 7;
$g += $y2;
$h -= $y2;
$i *= $y2;
$j /= $y2;
$k %= $y2;
echo "<br><br>o valor do resultado z é " . $z2;
echo "<br>o valor do resultado 7+5 é " . $g;
echo "<br>o valor do resultado 7-5 é " . $h;
echo "<br>o valor do resultado 7*5 é " . $i;
echo "<br>o valor do resultado 7/5 é " . $j;
echo "<br>o valor do resultado 7%5 é " . $k;
echo "<br>o valor do resultado 7**2 é " . $l;

?>
</body>
</html>

