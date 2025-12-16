<?php

class Produto
{
    private int $id = 0;
    private string $nomeProduto = "";
    private float $preco = 0.0;
    private string $cor = "";
    private string $validade = "";
    private string $formato = "";

    
    

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomeProduto
     */
    public function getNomeProduto(): string
    {
        return $this->nomeProduto;
    }

    /**
     * Set the value of nomeProduto
     */
    public function setNomeProduto(string $nomeProduto): self
    {
        $this->nomeProduto = $nomeProduto;

        return $this;
    }

    /**
     * Get the value of preco
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     */
    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of cor
     */
    public function getCor(): string
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor(string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of validade
     */
    public function getValidade(): string
    {
        return $this->validade;
    }

    /**
     * Set the value of validade
     */
    public function setValidade(string $validade): self
    {
        $this->validade = $validade;

        return $this;
    }

    /**
     * Get the value of formato
     */
    public function getFormato(): string
    {
        return $this->formato;
    }

    /**
     * Set the value of formato
     */
    public function setFormato(string $formato): self
    {
        $this->formato = $formato;

        return $this;
    }
}