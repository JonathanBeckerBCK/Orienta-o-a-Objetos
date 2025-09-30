<?php

require_once("Pessoa.php");

class Pessoajuridica extends Pessoa {

    private string $nomeFantasioso;
    private string $cnpj;



    /**
     * Get the value of nomeFantasioso
     */
    public function getNomeFantasioso(): string
    {
        return $this->nomeFantasioso;
    }

    /**
     * Set the value of nomeFantasioso
     */
    public function setNomeFantasioso(string $nomeFantasioso): self
    {
        $this->nomeFantasioso = $nomeFantasioso;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}