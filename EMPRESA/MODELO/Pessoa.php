<?php

class Pessoa {

    protected string $Nome;
    private Pessoafisica $idade;



    /**
     * Get the value of N   ome
     */
    public function getNome(): string
    {
        return $this->Nome;
    }

    /**
     * Set the value of Nome
     */
    public function setNome(string $Nome): self
    {
        $this->Nome = $Nome;

        return $this;
    }
}
