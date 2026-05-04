<?php

class ContaBancaria
{
    public $titular;
    public $saldo = 0;

    function depositar()
    {
        echo "*** BANCO BRADESCO ***\n";

        echo "Informe o nome do titular da conta: \n";
        $this->titular = readline();

        echo "Saldo atual: " . $this->saldo . "\n";

        echo "Informe quanto deseja depositar: \n";
        $valor = readline();

        $this->saldo += $valor;

        echo "Saldo após depósito: " . $this->saldo . "\n";
    }

    function sacar()
    {
        echo "\n*** BANCO BRADESCO ***\n";

        echo "Titular: " . $this->titular . "\n";
        echo "Saldo atual: " . $this->saldo . "\n";

        echo "Quanto deseja sacar: ";
        $valor = readline();

        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!!\n";
        } else {
            $this->saldo -= $valor;
            echo "Saldo após saque: " . $this->saldo . "\n";
        }
    }
}