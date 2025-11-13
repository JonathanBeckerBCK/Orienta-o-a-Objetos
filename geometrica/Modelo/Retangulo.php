<?php 

require_once('Modelo/IFormaGeometrica.php');

class Retangulo implements IFormaGeometrica
{
    
    private $base;
    private $altura;
    

    public function getArea()
    {
        $area = $this->base * $this->altura;
        return $area;
    }
    public function getDesenho()
    {
        print " ______________________________\n";
        print "|                              |\n";
        print "|                              |\n";
        print "|                              |\n";
        print "'------------------------------'\n";

    }



    /**
     * Get the value of base
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of base
     */
    public function setBase($base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}