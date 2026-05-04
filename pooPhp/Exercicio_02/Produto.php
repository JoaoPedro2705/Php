<?php

class Produto
{

    public $nome;
    public $preco;
    public $quantidadeEmEstoque;

    function addEstoque($unidades)
    {
        echo "*** ADICIONANDO PRODUTO ***\n";
        echo "Informe o nome do produto que ira adicionar:\n";
        $this->nome = readline();
        echo "Informe o preço do produto: \n";
        $this->preco = readline();
        echo "Informe a quantidade do produto que deseja adicionar: \n";
        $this->quantidadeEmEstoque = readline();
        echo "O produto $this->nome foi adicionado ao estoque.\n";
        echo "Sua quantidade em estoque é de $this->quantidadeEmEstoque\n";
        echo "Seu preço é de : R$" . $this->preco;
    }

    function removeEstoque($unidades)
    {

        echo "\n*** REMOVENDO PRODUTO ***\n";
        echo "Informe o nome do produto:\n";
        $this->nome = readline();
        echo "Informe a quantidade que quer remover do produto:\n";
        $unidades = readline();


        if ($this->getQuantidadeEmEstoque() <= $unidades) {
            echo "ERRO: A quantidade que deseja remover excede o minimo da quantidade:\n";
            echo "Tente Novamente...... \n";
            $this->removeEstoque($unidades);
        } else {
            $this->setQuantidadeEmEstoque(
                $this->getQuantidadeEmEstoque() - $unidades
            );
            echo "$unidades unidades do produto," . $this->nome . ", foi removido do estoque:\n";
            echo $this->getQuantidadeEmEstoque() . " de $this->nome restantes no estoque.";
        }
    }

    /**
     * Get the value of quantidadeEmEstoque
     */
    public function getQuantidadeEmEstoque()
    {
        return $this->quantidadeEmEstoque;
    }

    /**
     * Set the value of quantidadeEmEstoque
     *
     * @return  self
     */
    public function setQuantidadeEmEstoque($quantidadeEmEstoque)
    {
        $this->quantidadeEmEstoque = $quantidadeEmEstoque;

        return $this;
    }
}
