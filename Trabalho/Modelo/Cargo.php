<?php 

abstract class Cargo
{

    // A T R I B U T O S
    protected float $salario;
    protected string $nome;
    protected string $cargo;
    
    // M E T O D O S
    public abstract function Calculo();
    public abstract function Nome();
    public abstract function Cargo();
    
    
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

    /**
     * Get the value of cargo
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     */
    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }
}