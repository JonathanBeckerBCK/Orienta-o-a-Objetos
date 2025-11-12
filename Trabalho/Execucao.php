<?php

require_once("Modelo/Desenvolvedor.php");
require_once("Modelo/Estagiario.php");
require_once("Modelo/Gerente.php");

system('clear');

do {


    print "================ C A R G O ================\n";
    print "[ 1 ] - Desenvolvedor                      \n";
    print "[ 2 ] - Estagiario                         \n";
    print "[ 3 ] - Gerente                            \n";
    print "[ 0 ] - Sair                               \n";
    print "===========================================\n";

    $escolha = readline();

    switch ($escolha) {
        // -------------------------------    
        case 1:

            system('clear');

            $SalarioDev = new Desenvolvedor();
            $nome = readline("Nome: ");
            $cargo = readline("Cargo: ");

            print"======== D E S E N V O L V E D O R =======\n";

            break;
        // -------------------------------
        case 2:

            system('clear');
            
            $SalarioEst = new Estagiario();
            $nome = readline("Nome: ");
            $cargo = readline("Cargo: ");

            print"=========== E S T A G I A R I O ==========\n";


            break;
        // -------------------------------
        case 3:

            system('clear');

            $SalarioGer = new Gerente();
            $nome = readline("Nome: ");
            $cargo = readline("Cargo: ");
            
            print"============== G E R E N T E =============\n";
            print"Nome: " . $nome;
            break;
        // -------------------------------
        case 0:

            print "Programa Finalizada!";

            break;
            // -------------------------------
    }
} while ($a <= 10);
