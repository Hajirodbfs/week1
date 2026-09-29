<?php

$num = 17;
$isPrime = true;

if ($num < 2) {
    $isPrime = false;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }
}

if ($isPrime) {
    echo "<p style='color:green; font-size:22px;'>$num is Prime</p>";
} else {
    echo "<p style='color:red; font-size:22px;'>$num is Non-Prime</p>";
}

?>