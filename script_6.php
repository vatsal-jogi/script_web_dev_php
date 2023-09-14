<?php
$x=14;
$y=15;

echo "before swap.</br>";
echo " x = $x </br>";
echo "y = $y </br>";

$x = $x * $y;
$y = $x / $y;
$x = $x / $y;

echo "after swap.</br>";
echo "x = $x </br>";
echo "y = $y </br>";

?>