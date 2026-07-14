<?php

for ($i = 10; $i > 0; $i--) {
    echo "<br>"."Number: ".$i;
}

echo "<br>"."<br>"."--------------------"."<br>";

$j = 1;
while ($j <= 10) {
    echo "<br>"."Number: ".$j;
    $j++;
}
echo "<br>"."<br>"."--------------------"."<br>";
$k = 1;
do {
    echo "<br>"."Number: ".$k;
    $k++;
} while ($k <= 10);