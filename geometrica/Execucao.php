<?php 

require_once('Modelo/Circulo.php');
require_once('Modelo/Retangulo.php');
require_once('Modelo/Quadrado.php');

$escolha = readline('1-Circulo 2-Retangulo 3-Quadrado');

switch ($escolha) {
    case 1:
        
        $forma = new Circulo();
        $forma->setRaio('Informe Raio:');

        break;
    
    case 2:
        
        $forma = new Retangulo();
        $forma->setAltura("Informe a Altura:");
        $forma->setBase("Informe a Base:");

        
        break;

    case 3:
        
        $forma = new Quadrado();
        $forma->setLado("Informe a Lado:");


        break;
}