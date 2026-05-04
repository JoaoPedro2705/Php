<?php

class Funcionarios
{

    public $nome;
    public $cargo;
    public $salario;

    function aumentarSalario($percentual)
    {

        echo "Informe seu nome: ";
        $this->nome = readline();

        echo "Informe seu cargo na empresa: ";
        $this->cargo =  readline();

        echo "Informe seu salario atual:";
        $this->salario = (float) readline();  

        $salarioAntigo = $this->salario;
        $aumento = $this->salario * ($percentual / 100);
        $this->salario = $this->salario + $aumento;


        echo "";
        echo "Sr(a) $this->nome | Setor: $this->cargo \n";
        echo "";
        echo "\nSeu salario teve um aumento de: $percentual%.\n";
        echo "\nSaindo de: $salarioAntigo, para: $this->salario\n";
    }
}
