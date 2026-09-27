<?php

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "<p style='color:green; font-size:20px;'>Divisible by both 3 and 5</p>";
} elseif ($num % 3 == 0) {
    echo "<p style='color:blue; font-size:20px;'>Divisible by 3</p>";
} elseif ($num % 5 == 0) {
    echo "<p style='color:orange; font-size:20px;'>Divisible by 5</p>";
} else {
    echo "<p style='color:red; font-size:20px;'>Divisible by none</p>";
}

?>