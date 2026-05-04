<?php 

require "uteis.php";
require "Usuario.php";

$u = new Usuario();

$u->nome = "Leonardo";
$u->email = "leonardo@example.com";
$u->setSenha('123');

$u->exibirDados();

$u->trocarSenha();

$u->exibirDados();