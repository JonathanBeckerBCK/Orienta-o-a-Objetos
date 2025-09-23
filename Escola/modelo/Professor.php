<?php

class Professor {

    private string $nome;
    private string $rg;
    private int $idade;
    private float $salario;

    public function __toString()
    {
        $dados = "Nome:" . $this->nome;
        $dados .= "RG:" . $this->rg;
        $dados .= "Idade:" . $this->idade;
        $dados .= "Matrícula:" . $this->salario;
        return $dados;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of rg
     */
    public function getRg(): string
    {
        return $this->rg;
    }

    /**
     * Set the value of rg
     */
    public function setRg(string $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

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
     * Get the value of salario
     */
    public function getSalario(): int
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(int $salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}