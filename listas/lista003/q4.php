<?php
$familiares = ["Alisson", "Valdecira"];

// Dessa Maneira a gente adiciona o valor no indice final, ou seja no final do array
$familiares[] = "Samuel";

foreach($familiares as $familiar) {
    echo $familiar . "\n";
}