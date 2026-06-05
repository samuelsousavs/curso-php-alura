<?php
// Bloco de codigo que retorna algo ou tem alguma funcionalidade integrada ou criada pelo usuario ou por outros usuarios externos (bibliotecas criadas por outras pessoas);
function exibeMensagemLancamento ($ano) {
    if ($ano > 2022)  {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento!\n";
    }
}

exibeMensagemLancamento(2000);
exibeMensagemLancamento(2022);
exibeMensagemLancamento(2029);

// Exemplo do Desafio Passado 

function depositar(float $saldoAtual, float $valor): float { 
    return $saldoAtual + $valor;
}

function sacar(float $saldoAtual, float $valor) : float {
    if ($saldoAtual < $valor) {
        echo "Valor de Saque Invalido!!\n";
        return $saldoAtual;
    } else {
        return $saldoAtual + $valor;
    }
}

