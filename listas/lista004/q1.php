<?php 
function mathMagica (int $n1, int $n2, str $operacao) : float{
    switch($operacao) {
        case "+": 
            return $n1 + $n2;
            break;
        case "-":
            return $n1 - $n2;
            break;
        case "*":
            return $n1 * $n2;
            break;
        case "/":
            return $n1 / $n2;
            break;
    }    
}