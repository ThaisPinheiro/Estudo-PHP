<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct( Cpf $cpf, string $nome, Endereco $endereco) 
    {
        $this->cpf = $cpf;
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function recuperarCpf (): int 
    {
        return $this->cpf->recuperarCpf();
    }

    public function recuperarNome (): string
    {
        return $this->nome;
    }
    
    private function validarNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo 'Nome precisa ter pelo menos 5 caracteres';
            exit();
        }
    }

    public function recuperarEndereco(): Endereco
    {
        return $this->endereco;
    }

}

