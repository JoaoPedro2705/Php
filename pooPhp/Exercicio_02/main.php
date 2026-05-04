<?php

require "Produto.php";

$p = new Produto();

$p -> addEstoque(1);
$p -> removeEstoque(3);
