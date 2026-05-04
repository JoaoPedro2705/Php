<?php

class Usuario
{

    public $nome;
    public $email;
    private $senha;

    function exibirDados()
    {

        echo
        "\nNome: " . $this->nome .
            "\nEmail: " . $this->email .
            "\nsenha: " . $this->getSenha();
    }

    function trocarSenha()
    {
        echo "\n Informe a senha antiga: \n";
        $senhaAntiga = readline();

        echo "Informe a nova senha: \n";
        $senha = readline();

        if (strlen($senha) >= 8) {

            if (password_verify($senhaAntiga, $this->getSenha())) {
                $this->setSenha(password_hash($senha, PASSWORD_DEFAULT));
                echo "Parabéns, sua senha foi alterada! \n";
            } else {
                echo "A senha antiga não confere! \n";
                $this->trocarSenha();
            }
        } else {

            echo "a senha tem que ter no minimo 8 caracteres \n";
            $this->trocarSenha();
        }
    }


    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);

        return $this;
    }
}
