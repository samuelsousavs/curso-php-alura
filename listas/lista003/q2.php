<?php
$notas = [10, 9, 3, 2];
$media = array_sum($notas) / count($notas);

echo "Notas: " . implode(", ", $notas);
echo "\nMedia: $media";
$situacao = $media > 6 ? "aprovado" : "reprovado";
echo "\nSituação: $situacao";