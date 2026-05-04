<?php

class Retangulo
{
    public $largura;
    public $altura;

    function calcularArea()
    {
        echo "Informe a largura: ";
        $this->largura = (float) readline();
        echo "";
        echo "Informe a altura: ";
        $this->altura = (float) readline();

        $area = $this->altura * $this->largura;
        echo "";
        echo "Area do retangulo: $area\n";
    }

    function calcularPerimetro()
    {
        echo "\nInforme a largura: ";
        $this->largura = (float) readline();
        echo "";
        echo "Informe a altura: ";
        $this->altura = (float) readline();

        $perimetro = 2 * ($this->altura + $this->largura);

        echo "";
        echo "Area do perimetro: $perimetro";
    }
}
