<?php

require_once("MODELO/Pessoafisica.php");
require_once("MODELO/Pessoajuridica.php");

// instanceof

function ListarPessoa($informacoes)
{

    foreach ($informacoes as $i => $info) {

        if ($info instanceof Pessoafisica) {

            print "| Nome:" . $info->getNome() . "\n";
            print "| Idade:" . $info->getIdade() . "\n";
            print "| CPF:" . $info->getCpf() . "\n";
        }

        if ($info instanceof Pessoajuridica) {

            print "| Nome Empresa:" . $info->getNome() . "\n";
            print "| Nome Fantasioso:" . $info->getNomeFantasioso() . "\n";
            print "| CNPJ:" . $info->getCnpj() . "\n";
        }
    }
}



$informacoes = array();

do {

    print "=========== MENU ============\n";
    print "(1) Cadastrar pessoa fisica\n";
    print "(2) Cadastrar pessoa juridica\n";
    print "(3) Listar\n";
    print "(4) Excluir\n";
    print "(0) Sair\n";

    $escolha = readline("Digite um número:");


    switch ($escolha) {
        case 1:

            $PessoasFisicas = new Pessoafisica();
            $PessoasFisicas->setNome(readline("Nome:"));
            $PessoasFisicas->setIdade(readline("Idade:"));
            $PessoasFisicas->setCpf(readline("CPF:"));

            array_push($informacoes, $PessoasFisicas);

            break;

        case 2:

            $PessoasJuridicas = new Pessoajuridica();
            $PessoasJuridicas->setNome(readline("Nome Empresa:"));
            $PessoasJuridicas->setNomeFantasioso(readline("Nome Fantasioso:"));
            $PessoasJuridicas->setCnpj(readline("Cnpj:"));

            array_push($informacoes, $PessoasJuridicas);

            break;

        case 3:

            print "========== LISTAR ============\n";

            ListarPessoa($informacoes);

            break;

        case 4:

            $idx = readline("Informe o índice para excluir:");

            array_splice($informacoes, $idx, 1);
            break;

        case 0:

            print "Programa Finalizado!\n";

            break;
    }
} while ($escolha != 0);
