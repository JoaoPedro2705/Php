<?php

require "Carro.php";

$c = new Carro("Chevrolet", "Agile");

$c->status();
$c->ligar();
$c->status();
$c->desligar();
$c->status();
