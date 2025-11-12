<?php 

require_once("Modelo/Cargo.php");

class Gerente extends Cargo
{
    public function getCalculo()
    {
        $salario = 1500.00 * 4.5;
        return $salario;
    }
}