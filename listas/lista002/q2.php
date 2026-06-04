<?php
$altura = 1.90;
$peso = 70; 
$imc = $peso / ($altura ** 2);

if ($imc < 18.5) {
    echo "Abaixo do Peso";
} elseif ($imc < 25) {
    echo "Peso Normal";
} elseif ($imc < 30) {
    echo "Sobrepeso";
} elseif ($imc < 40) {
    echo "Obesidade";
} else {
    echo "Obesidade Grave";
}

?> 