<?php 

require_once("Modelo/Cargo.php");

class Estagiario extends Cargo
{
    public function Calculo()
    {
        $salario = 1500.00 * 0.8;
        return $salario;
    }

    public function Nome()
    {
        $nome = $this->nome;
        return $nome;
    }
    
    public function Cargo()
    {
        $cargo = $this->cargo;
        return $cargo;
    }
}