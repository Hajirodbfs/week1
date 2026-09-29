<?php

echo "<h3 style='color:blue;'>Odd numbers from 2 to 20:</h3>";

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo "<span style='margin:8px;'>$i</span>";
    }
}

echo "<h3 style='color:green;'>Even numbers from 35 to 7:</h3>";

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo "<span style='margin:8px;'>$i</span>";
    }
}

?>