<?php

class ItemCarrinho
{
 public $nomeProduto;
 public $valorUnitario;
 public $quantidade;

 function calcularTotalItem()
 {
   echo "Informe o nome do produto: ";
   $this->nomeProduto = readline();

   echo "Informe o valor unitario: ";
   $this->valorUnitario = (float) readline();

   echo "Informe a quantidade: ";
   $this->quantidade = (int) readline();

   $total = $this->valorUnitario * $this->quantidade;

   echo "\nProduto: ". $this->nomeProduto . "\n";
   echo "Total do item: R$". $total . "\n";

 }
}