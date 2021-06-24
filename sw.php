<?php

$a = 1;
$b = -1;
$c = -6;
$delta = pow($b, 2) - 4 * $a * $c;
$d = sqrt($delta);

$x1 = (-$b + $d) / (2 * $a);
$x2 = (-$b - $d) / (2 * $a);

echo "x1 = $x1 e x2 = $x2";

?>
