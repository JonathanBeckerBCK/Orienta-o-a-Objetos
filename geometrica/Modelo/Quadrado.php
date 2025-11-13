<?php 

require_once('Modelo/IFormaGeometrica.php');

class Quadrado implements IFormaGeometrica
{
    private $lado;

    public function getArea()
    {
        
    }
    public function getDesenho()
    {
        print " ________\n";
        print "|        |\n";
        print "|        |\n";
        print "|        |\n";
        print "'--------'\n";
    }

    /**
     * Get the value of lado
     */
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     */
    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }

}