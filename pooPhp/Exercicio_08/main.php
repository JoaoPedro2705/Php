<?php

require "Tarefa.php";

$t = new Tarefa();
$t->descricao = "Estudar Java";

$t->exibirStatus();
$t->marcarComoConcluida();
$t->exibirStatus();