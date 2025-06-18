<?php

class Produto
{

    // Atributos
    private string $descricao;
    private string $unidadeMedida;
    private int $quantidade;
    private float $valorUnitario;
    public float $ValorTotal;
  
    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of unidadeMedida
     */
    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }

    /**
     * Set the value of unidadeMedida
     */
    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUnitario
     */
    public function getValorUnitario(): float
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     */
    public function setValorUnitario(float $valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * Get the value of ValorTotal
     */
    public function getValorTotal(): float
    {
        return $this->ValorTotal = $this->quantidade * $this->valorUnitario;
    }

    /**
     * Set the value of ValorTotal
     */
    public function setValorTotal(float $ValorTotal): self
    {
        $this->ValorTotal = $ValorTotal;

        return $this;
    }
}

for ($j = 0; $j < 3; $j++) {

    $Produtos = new Produto;
    print "============================================\n";
    $Produtos->setDescricao(readline("Qual é o teu produto? "));
    $Produtos->setUnidadeMedida(readline("Qual é a Unidade de Medida? "));
    $Produtos->setQuantidade(readline("Quantos custa? "));
    $Produtos->setValorUnitario(readline("Quantas Unidades? "));

    print "\nProduto: " . $Produtos->getDescricao() . "\nPreço: " . $Produtos->getQuantidade() . "\nUnidade de Medida: " . $Produtos->getUnidadeMedida() . "\nUnidades: " . $Produtos->getValorUnitario() . "\nValor Total: $" . $Produtos->getValorTotal() . "\n";
}

print "============================================\n";
