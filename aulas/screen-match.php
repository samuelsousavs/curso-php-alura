<?php
$nome = 2022;
echo 'Bem vindo(a) ao screen Match!';

$nomeFilme = "Top Gun - Maverick"; 
$nomeFilme = "Thor: Ragnarok"; 
$nomeFilme = "Se beber nao case"; 

$anoLancamento = 2021;
$notaFilme = 8.8;
$incluidoNoPlano = True; 
echo "\nNome do Filme: $nomeFilme"; 

echo "\nNota do Filme: " . $notaFilme; 
echo "\nNota do filme: $notaFilme";

if ($anoLancamento > 2022) {
    echo "\nEsse filme é um lançamento";
} elseif($anoLancamento > 2020 && $anoLancamento < 2022) {
    echo "\nEsse filme é Iconico!";
} else {
    echo "\nEsse filme não é um lançamento";
}

$genero = match($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-heroi",
    "Se beber nao case" => "Comedia",
    default => "Genero desconhecido"
};
echo "\nGenero do Filme: $genero";

// $somaDeNotas = 0; 
// $quantidadeDeNotas = 4;
// for ($contador = 1; $contador < $argc; $contador++) {
//     $somaDeNotas += $argv[contador];
// }
// $notaFilme = $somaDeNotas / $quantidadeDeNotas;

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021, 
    "nota" => 7.8, 
    "genero" => "Super-Heroi"
]; 

echo "\nGenero do Filme: $filme[genero]";
echo "\nNome do Filme: $filme[nome]";




?>  