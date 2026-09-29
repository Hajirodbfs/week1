<?php

echo "<div style='font-family:Arial;'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<div style='display:flex;'>";

    for ($j = 1; $j <= 12; $j++) {

        $result = $i * $j;

        echo "<span style='width:70px; padding:8px; border:1px solid #000; text-align:center;'>
                $result
              </span>";
    }

    echo "</div>";
}

echo "</div>";

?>