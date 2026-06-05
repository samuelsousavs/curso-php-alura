<?php
$notas = [];
for ($contador = 0; $contador < $argv; $contador++) {
    $notas[] = (float) $argv[$contador];
}
// Len do php é o count()
$quantidadeDeNotas = count($notas);

// Soma o Array Inteiro
$somaDeNotas = array_sum($notas);

// Usando o ForEach 
foreach($notas as $nota) {
    $somaDeNotas += $nota;
}
