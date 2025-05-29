<?php


class Veiculo {

    private $capacidade; 
    private $passagensVendidas;

    // Metodo

    function Veiculo() {

        if($this->capacidade > 5){

            print""; // ESTOU AQUI

        }
    }

    function VenderPassagem() {

        
    }

    //get setters
    

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of passagensVendidas
     */
    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    /**
     * Set the value of passagensVendidas
     */
    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }
}
