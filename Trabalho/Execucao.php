<?php

require_once("Modelo/Desenvolvedor.php");
require_once("Modelo/Estagiario.php");
require_once("Modelo/Gerente.php");

system('clear');

do {


    print "\n====================== C A R G O =======================\n";
    print "[ 1 ] - Desenvolvedor                      \n";
    print "[ 2 ] - Estagiario                         \n";
    print "[ 3 ] - Gerente                            \n";
    print "[ 0 ] - Sair                               \n";
    print "========================================================\n";

    $escolha = readline();

    switch ($escolha) {
        // -------------------------------    
        case 1:

            system('clear');

            print"=============== D E S E N V O L V E D O R ==============\n";
            $SalarioDev = new Desenvolvedor();
            $SalarioDev->setNome(readline("Nome: "));
            $SalarioDev->setCargo(readline("Cargo: "));
            
            print "\nO funcionário ".$SalarioDev->Nome().", cargo ".$SalarioDev->Cargo().", possui salário de R$".$SalarioDev->Calculo()."\n";
            print"========================================================\n";

            break;
        // -------------------------------
        case 2:

            system('clear');
            
            print"================== E S T A G I A R I O =================\n";
            $SalarioEst = new Estagiario();
            $SalarioEst->setNome(readline("Nome: "));
            $SalarioEst->setCargo(readline("Cargo: "));
        
            print "\nO funcionário ".$SalarioEst->Nome().", cargo ".$SalarioEst->Cargo().", possui salário de R$".$SalarioEst->Calculo()."\n";
            print"========================================================\n";

            break;
        // -------------------------------
        case 3:

            system('clear');

            print"===================== G E R E N T E ====================\n";
            $SalarioGer = new Gerente();
            $SalarioGer->setNome(readline("Nome: "));
            $SalarioGer->setCargo(readline("Cargo: "));

            print "\nO funcionário ".$SalarioGer->Nome().", cargo ".$SalarioGer->Cargo().", possui salário de R$".$SalarioGer->Calculo()."\n";
            print"========================================================\n";

            break;
        // -------------------------------
        case 0:

            print "Programa Finalizada!\n";

            break;
        // -------------------------------
    }
} while ($escolha != 0);
