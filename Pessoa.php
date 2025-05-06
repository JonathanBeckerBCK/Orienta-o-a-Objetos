<?php

class Pessoa {

    // Atributos
    public $nome;
    public $endereco;
    public $altura;

    // Metodos

    function FalarOlá() {

        print "Olá, meu nome é " . $this->nome . "\n";

    }

    function FalarEndereco() {

        print "Moro em ". $this->endereco ."\n";
        
    }

    function FalarAltura() {

        print "A minha altura é " . $this->altura . "\n";
        
    }

}

// Imprimir
