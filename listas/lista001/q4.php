<?php
$ano = 2000;
$anoBissexto = ($ano % 4 == 0 && $ano % 100 == 0);
echo "$ano é Bissexto: " . ($anoBissexto ? "Sim" : "Não");
?> 