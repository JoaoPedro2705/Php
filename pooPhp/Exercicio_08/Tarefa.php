<?php 

class Tarefa
{
public $descricao;
public $concluida = false;

function marcarComoConcluida()
{
   $this->concluida = true;
}

function exibirStatus()
{
  if($this->concluida){
    echo "Tarefa: $this->descricao - V Concluida\n";
  }else{
    echo "Tarefa: $this->descricao - X Pendente\n";
  }
}

}