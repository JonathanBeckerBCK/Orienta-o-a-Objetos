<?php

class Animal{

private string $nome;
private string $raca;

// Metodos

public function getDados()
{
    $dados = "Nome:" . $this->getNome();
    $dados .= "| Raça:" . $this->getRaca();
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
 * Get the value of raca
 */
public function getRaca(): string
{
return $this->raca;
}

/**
 * Set the value of raca
 */
public function setRaca(string $raca): self
{
$this->raca = $raca;

return $this;
}
}