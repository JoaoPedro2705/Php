<?php

class Carro
{

    public $marca;
    public $modelo;
    public $ligado = false;

    function ligar()
    {
        $this->ligado = true;
        echo "Carro ligado\n";
    }

    function desligar()
    {
        $this->ligado = false;
        echo "Carro desligado\n";
    }

    function status()
    {
        if ($this->ligado) {
            echo "Pronto para rodar\n";
        } else {
            echo "Desligado\n";
        }
    }
}
