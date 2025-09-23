<?php

require_once("modelo/Animal.php");
require_once("modelo/Gato.php");
require_once("modelo/Cachorro.php");

// Gatos
$gato1 = new Gato();
$gato1->setNome("Theo");
$gato1->setRaca("Malhado");

$gato2 = new Gato();
$gato2->setNome("Garfield")->setRaca("Laranja");

// Cachorros
$cachorro1 = new Cachorro();
$cachorro1->setNome("Rintintin");
$cachorro1->setRaca("Pastor Alemão");

$cachorro2 = new Cachorro();
$cachorro2->setNome("Garfield");
$cachorro2->setRaca("Jack");

// Saída
print $gato1->getDados();
print "Som:";
$gato1->Miar();



print $gato2->getDados() . "\n";


print $cachorro1->getDados() . "\n";


print $cachorro2->getDados() . "\n";

