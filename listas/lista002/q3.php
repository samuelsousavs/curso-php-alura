<?php
$horario = 0; 
if ($horario >= 0 && $horario < 7) {
    echo "Boa Madrugada";
} elseif ($horario < 13) {
    echo "Bom Dia";
} elseif ($horario < 19) {
    echo "Boa Tarde";
} elseif ($horario < 25) {
    echo "Boa Noite";
} else {
    echo "Horario Invalido";
}
?> 