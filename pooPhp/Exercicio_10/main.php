<?php

require "Musica.php";

$msc = new Musica();
$msc->titulo = "Espresso";
$msc->artista = "Sabrina Carpenter";
$msc->duracaoSegundos = 400;


$msc->getDuracaoMinutos();