<?php

require_once('Modelo/Produto.php');
require_once('Dao/ProdutoDao.php');

//Teste da conexão com o banco
/*
require_once("util/Conexao.php");
$pdo = Conexao::getConexao();
print_r($pdo);
exit;
*/

do {

    print "============= L O J A =============\n";
    print "[ 1 ] - Inserir\n";
    print "[ 2 ] - Listar\n";
    print "[ 3 ] - Buscar\n";
    print "[ 4 ] - Excluir\n";
    print "[ 0 ] - Sair\n";

    $escolha = readline('Informe a opção:');

    system("clear");

    switch ($escolha) {
        case 1:

            // Inserir

            $produto = new Produto();
            print "========== P R O D U T O ==========\n";
            $produto->setNomeProduto(readline('Nome:'));
            $produto->setFormato(readline('Formato:'));
            $produto->setCor(readline('Cor:'));
            $produto->setValidade(readline('Validade:'));
            $produto->setPreco(readline('Preço:'));

            $dao = new ProdutoDao();
            $dao->inserir($produto);
            print "Produto inserido com sucesso!\n";

            break;

        case 2:

            // Listar

            $dao = new ProdutoDao();
            $produtos = $dao->listar();

            foreach ($produtos as $p) {

                print "=====================================\n";
                print 'ID - ' . $p->getId() . "\n";
                print 'Nome - ' . $p->getNomeProduto() . "\n";
                print 'Formato - ' . $p->getFormato() . "\n";
                print 'Cor - ' . $p->getCor() . "\n";
                print 'Preço - ' . $p->getPreco() . "\n";
                print 'Validade - ' . $p->getValidade() . "\n";
                print "=====================================\n";
            }


            break;

        case 3:

            // Buscar
            $dao = new ProdutoDao();
            $id = readline("Buscar id:");
            $produtos = $dao->buscar($id);

            print "=====================================\n";
            print 'ID - ' . $produtos->getId() . "\n";
            print 'Nome - ' . $produtos->getNomeProduto() . "\n";
            print 'Formato - ' . $produtos->getFormato() . "\n";
            print 'Cor - ' . $produtos->getCor() . "\n";
            print 'Preço - ' . $produtos->getPreco() . "\n";
            print 'Validade - ' . $produtos->getValidade() . "\n";
            print "=====================================\n";



            break;

        case 4:

            // Excluir
            $dao = new ProdutoDao();
            $produto = readline("Excluir id:");
            $dao->excluir($produto);

            print "Produto excluido com sucesso!\n";

            break;

        case 0:

            // Sair

            print "Você saiu da Loja!\n";

            break;

        default:
            echo "Opção inválida!";
    }
} while ($escolha != 0);
