<?php 

require_once("Modelo/Cargo.php");

class Desenvolvedor extends Cargo
{
    public function getCalculo()
    {
        $salario = 1500.00 * 2.3;
        return $salario;
    }

}