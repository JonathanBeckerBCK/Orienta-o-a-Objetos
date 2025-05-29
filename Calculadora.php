<?php

class Calculadora
{

    //Atributos

    private $numA;
    private $numB;

    //Métodos

    public function soma()
    {

        $soma = $this->numA + $this->numB;
        return $soma;
    }

    public function subtracao()
    {

        $subtracao = $this->numA - $this->numB;
        return $subtracao;
    }

    public function multip()
    {

        $multip = $this->numA * $this->numB;
        return $multip;
    }

    public function dividir()
    {

        $dividir = $this->numA / $this->numB;
        return $dividir;
    }

    // GETS e

    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}

// imprimir

$numA = readline("informe o número A: ");
$numB = readline("informe o número B: ");

$calc = new Calculadora();
$calc->setNumA($numA);
$calc->setNumB($numB);


print "MUltiplicação: " . $calc->multip() . "\n";
print "Subtração: " . $calc->subtracao() . "\n";
print "Divisão: " . $calc->dividir() . "\n";
print "Soma: " . $calc->soma() . "\n";
