<?php

class Termostato
{
    public $temperatura;

    function aumentar()
    {
        if ($this->temperatura < 30) {
            $this->temperatura++;
        }
    }

    function diminuir()
    {
        if ($this->temperatura > 16){
            $this->temperatura--;
        }
    }
}
