<?php

require_once('Modelo/Instrumento.php');
require_once('Modelo/Prova.php');
require_once('Modelo/Trabalho.php');
require_once('Modelo/Participacao.php');

//-------------------------------------------------------------------------------------------------------------

$participacao = new Participacao();
$prova = new Prova();
$trabalho = new Trabalho();

$participacao->setNota(readline('Nota participação:'));
$prova->setNota(readline("Nota prova:"));
$trabalho->setNota(readline("Nota trabalho:"));

//-------------------------------------------------------------------------------------------------------------

print "Notas: ".$participacao->getNotaFinal()." | ". $prova->getNotaFinal() ." | ".  $trabalho->getNotaFinal() ."\n";

$media = ($participacao->getNotaFinal() + $prova->getNotaFinal() + $trabalho->getNotaFinal()) / 3;

print "Média: ". $media ."\n";

