<?php

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");

//Criar um aluno
$aluno = new Aluno();
$aluno->setMatricula("123456");
$aluno->setNome("Gabriel");
$aluno->setRg("43256ABC");
$aluno->setIdade(14);

//Criar um professor
$professor = new Professor;
$professor->setNome("Daniel");
$professor->setRg("HHAKE123");
$professor->setIdade(22);
$professor->setSalario(2000);

print_r($professor);
