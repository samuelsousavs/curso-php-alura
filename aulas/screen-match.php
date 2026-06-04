<?php
$nome = $argv[1] ?? 2022;
echo 'Bem vindo(a) ao screen Match!';
$nomeFilme = "\nTop Gun - Maverick"; 
$anoLancamento = 2021;
$notaFilme = 8.8;
$incluidoNoPlano = True; 
echo $nomeFilme; 

echo "\nNota do Filme: " . $notaFilme; 
echo "\nNota do filme: $notaFilme";

if ($anoLancamento > 2022) {
    echo "\nEsse filme é um lançamento";
} elseif($anoLancamento > 2020 && $anoLancamento < 2022) {
    echo "\nEsse filme é Iconico!";
} else {
    echo "\nEsse filme não é um lançamento";
}

?>  