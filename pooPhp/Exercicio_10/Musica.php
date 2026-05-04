<?php

class Musica
{
    public $titulo;
    public $artista;
    public $duracaoSegundos;

    function getDuracaoMinutos()
    {
        $min = floor($this->duracaoSegundos / 60);
        $seg = $this->duracaoSegundos % 60;

        if ($seg < 10) {
            $seg = "0" . $seg;
        }
        echo "$this->titulo - $this->artista ($min:$seg)\n";
    }
}
