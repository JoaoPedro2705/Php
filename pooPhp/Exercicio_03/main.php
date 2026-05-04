<?php

require "ContaBancaria.php";

$cb = new ContaBancaria();
$cb -> saldo = 500;

$cb -> depositar(1);
$cb -> sacar(1);