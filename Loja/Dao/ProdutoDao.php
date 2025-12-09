<?php

require_once('util/Conexao.php');

class ProdutoDao
{

    public function inserir(Produto $produto)
    {
        $sql = "INSERT INTO 
                produtos (nome_produto, formato, cor, preco, validade) 
                VALUES 
                (?, ?, ?, ?, ?)";

        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(
            $produto->getNomeProduto(),
            $produto->getFormato(),
            $produto->getCor(),
            $produto->getPreco(),
            $produto->getValidade()
        ));
    }

    public function listar()
    {
        $sql = "SELECT * FROM produtos";

        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $dados = $stmt->fetchAll();

        $produtos = array();

        foreach ($dados as $d) {

            $produto = new Produto();
            $produto->setId($d['id']);
            $produto->setNomeProduto($d['nome_produto']);
            $produto->getFormato($d['formato']);
            $produto->getCor($d['cor']);
            $produto->getPreco($d['preco']);
            $produto->getValidade($d['validade']);

            array_push($produtos, $produto);
        }

        return $dados;
    }

    public function buscar($id) {}

    public function excluir() {}
}
