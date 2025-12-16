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

        $produtos = $this->map($dados);
        return $produtos;

    }

    public function buscar($id)
    {

        $sql = "SELECT * FROM produtos WHERE id = ?";

        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $dados = $stmt->fetchAll();

        $produtos = $this->map($dados);
        if(count($produtos) > 0)
            return $produtos[0];

        return null;
    }

     private function map($dados)
    {

        $produtos = array();

        foreach ($dados as $d) {

            $produto = new Produto();
            $produto->setId($d['id']);
            $produto->setNomeProduto($d['nome_produto']);
            $produto->setFormato($d['formato']);
            $produto->setCor($d['cor']);
            $produto->setPreco($d['preco']);
            $produto->setValidade($d['validade']);

            array_push($produtos, $produto);
        }

        return $produtos;

    }

    public function excluir($id)
    {
        $sql = "DELETE FROM produtos WHERE id = ?";

        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        
    }
}
