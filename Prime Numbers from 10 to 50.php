<?php

echo "<h3 style='color:blue;'>Prime numbers from 10 to 50:</h3>";

for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "<span style='margin:10px; color:green; font-size:18px;'>$num</span>";
    }
}

?>