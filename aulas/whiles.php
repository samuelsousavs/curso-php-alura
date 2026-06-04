<?php
$contador = 0; 
do {
    echo "$contador"; 
    $contador += 1;
} while ($contador < 11);

for ($contador = 0; $contador < 11; $contador++) {
    echo "$contador";
}

$contador = 0; 
while ($contador < 11) {
    echo "$contador";
    $contador += 1;
}