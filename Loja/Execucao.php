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
system('clear');
do {

    print "============= L O J A =============\n";
    print "[ 1 ] - Inserir\n";
    print "[ 2 ] - Listar\n";
    print "[ 3 ] - Buscar\n";
    print "[ 4 ] - Excluir\n";
    print "[ 0 ] - Sair\n";

    $escolha = readline('Informe a opção:');


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
            system('clear');
            print "Produto inserido com sucesso!\n";

            break;

        case 2:

            // Listar

            $dao = new ProdutoDao();
            $produtos = $dao->listar();
            system('clear');
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
            system('clear');
            $dao = new ProdutoDao();
            $id = readline("Buscar id:");
            $produto = $dao->buscar($id);

            if($produto != null) {

                print "=====================================\n";
                print 'ID - ' . $produto->getId() . "\n";
                print 'Nome - ' . $produto->getNomeProduto() . "\n";
                print 'Formato - ' . $produto->getFormato() . "\n";
                print 'Cor - ' . $produto->getCor() . "\n";
                print 'Preço - ' . $produto->getPreco() . "\n";
                print 'Validade - ' . $produto->getValidade() . "\n";
                print "=====================================\n";
            } else {
                system('clear');    
                print "Produto não encontrado\n";
            }
            break;

        case 4:

            // Excluir
            $dao = new ProdutoDao();
            $id = readline("Excluir id:");
            
            
            
            if ($dao->buscar($id))
            {
                system('clear');
                $dao->excluir($id);
                print "Produto excluido com sucesso!\n";    
                
            } else {
                system('clear');
                print "Produto não existente.\n";
            }
            

            break;

        case 0:

            // Sair
            
            print "Você saiu da Loja!\n";

            break;

        default:
        system('clear');
            echo "Opção inválida!\n";
    }
} while ($escolha != 0);
