<?php

function calculatePercentage($s1, $s2, $s3, $s4, $s5)
{
    $total = $s1 + $s2 + $s3 + $s4 + $s5;
    $percentage = $total / 5;

    echo "Total Marks: " . $total . "<br>";

    return $percentage;
}

$per = calculatePercentage(88, 75, 94, 81, 55);

echo "Percentage: " . $per . "%";

?>