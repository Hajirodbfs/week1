<?php

echo "<h3 style='color:purple;'>Numbers divisible by 2 and 5:</h3>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo "<span style='margin:10px; color:blue;'>$i</span>";
    }
}

?>