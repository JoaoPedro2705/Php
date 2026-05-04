<?php
require "Termostato.php";

$tt = new Termostato();
$tt->temperatura = 18;

$tt->aumentar();
echo $tt->temperatura . "°\n";

$tt->diminuir();
echo $tt->temperatura . "°\n";