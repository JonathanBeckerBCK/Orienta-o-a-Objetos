<?php

require_once("Pessoa.php");

class Aluno extends Pessoa {

    
    // Atributos

    private string $matricula;
    
    //Metodos

    public function __toString()
    {
        $dados = "Nome:" . $this->getnome();
        $dados .= "RG:" . $this->getrg();
        $dados .= "Idade:" . $this->idade;
        $dados .= "Matrícula:" . $this->matricula;
        return $dados;
    }

    
    

    /**
     * Get the value of matricula
     */
    public function getMatricula(): string
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula(string $matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}