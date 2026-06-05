<?php 
function IMC (float $altura, int $peso) {
    return $peso / ($altura*$altura);
}