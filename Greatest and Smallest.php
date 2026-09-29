<?php

$a = 25;
$b = 10;
$c = 40;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) $greatest = $b;
if ($c > $greatest) $greatest = $c;

if ($b < $smallest) $smallest = $b;
if ($c < $smallest) $smallest = $c;

echo "<p style='color:blue; font-size:20px;'>Greatest: $greatest</p>";
echo "<p style='color:red; font-size:20px;'>Smallest: $smallest</p>";

?>
