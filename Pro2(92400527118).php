<?php

$num1 = 25;
$num2 = 50;
$num3 = 15;

echo "<h2>Maximum and Minimum Number</h2>";

echo "Number 1: " . $num1 . "<br>";
echo "Number 2: " . $num2 . "<br>";
echo "Number 3: " . $num3 . "<br><br>";

echo "Maximum Number: " . max($num1, $num2, $num3) . "<br>";
echo "Minimum Number: " . min($num1, $num2, $num3) . "<br>";

?>