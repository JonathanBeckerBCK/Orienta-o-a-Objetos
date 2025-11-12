<?php 

abstract class Cargo
{

    // A T R I B U T O S
    protected float $salario;
    protected string $nome;
    protected string $cargo;
    
    public abstract function getCalculo();
    
    // M E T O D O S
    /**
     * Get the value of salario
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
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
}