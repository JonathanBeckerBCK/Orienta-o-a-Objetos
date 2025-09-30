<?php

require_once("Pessoa.php");

class Pessoafisica extends Pessoa{

    private int $idade;
    private string $Cpf;
    
    

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of Cpf
     */
    public function getCpf(): string
    {
        return $this->Cpf;
    }

    /**
     * Set the value of Cpf
     */
    public function setCpf(string $Cpf): self
    {
        $this->Cpf = $Cpf;

        return $this;
    }
}