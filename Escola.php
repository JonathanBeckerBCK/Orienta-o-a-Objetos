<?php

class Escola
{

    // Atributos
    private $endereco;
    private $nome;
    private $QuantiaAluno;

    // Metodos

    public function getDados() {

        $dados  = "Endereço: " . $this->endereco. "Nome: " . $this->nome . "Quantidade de Alunos: " . $this->QuantiaAluno . "\n\n\n";
        
 
        return $dados;

    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of QuantiaAluno
     */
    public function getQuantiaAluno()
    {
        return $this->QuantiaAluno;
    }

    /**
     * Set the value of QuantiaAluno
     */
    public function setQuantiaAluno($QuantiaAluno): self
    {
        $this->QuantiaAluno = $QuantiaAluno;

        return $this;
    }
}

$escolas = array();

for ($i = 0; $i < 4; $i++) {

    print "\n";
    $escola[$i]= new Escola;
    $escola[$i]->setNome(readline("Informe o Nome da Escola: "));
    $escola[$i]->setEndereco(readline("Informe o Endereço: "));
    $escola[$i]->setQuantiaAluno(readline("Informe a Quantidade de Aluno: "));
    print "\n";

    array_push($escolas,$escola);
}

// print_r($escolas);
