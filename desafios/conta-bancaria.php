<?php
// Sistema de Conta bancaria 
// Funções: sacar, depositar, consultar e sair 

$titular = "Samuel";
$saldo = 1000;

do {
    echo "================\n";
    echo "Titular: $titular\n";
    echo "Saldo: $saldo\n";
    echo "================\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    $opcao = (int)fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "================\n";
            echo "Titular: $titular\n";
            echo "Saldo: $saldo\n";
            echo "================\n"; 
            break;
        case 2: 
            echo "Qual valor deseja sacar?\n";
            $valorASacar = (float) fgets(STDIN);    
            if ($valorASacar > $saldo) {
                echo "Saldo Insuficiente\n";
            } else {
                $saldo -= $valorASacar;
            }
            break;
        case 3: 
            echo "Qual valor deseja depositar\n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
            break;
        case 4:
            echo "Adeus!!!\n";
            break;
        default: 
            echo "Opção Invalida\n";
    }
} while ($opcao != 4);
