<?php 

require_once("Modelo/Cargo.php");

class Estagiario extends Cargo
{
    public function getCalculo()
    {
        $salario = 1500.00 * 0.8;
        return $salario;
    }
}