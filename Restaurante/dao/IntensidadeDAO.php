<?php

require_once __DIR__ . "/../util/Connection.php";
require_once __DIR__ . "/../model/Intensidade.php";

class IntensidadeDAO
{
    public function list()
    {
        $sql = "SELECT * FROM intensidades";

        $conn = Connection::getConnection();
        $stm = $conn->prepare($sql);
        $stm->execute();

        $dados = $stm->fetchAll();

        return $this->map($dados);
    }

    public function map(array $dados)
    {
        $intensidades = [];

            foreach ($dados as $d)
            {
                $intensidade = new Intensidade();
                $intensidade->setId($d["id"]);
                $intensidade->setNome($d["nome"]);

                $intensidades[] = $intensidade;
            }
        
        return $intensidades;
    }

    public function findById(int $id)
    {
        $sql = "SELECT * FROM intensidades WHERE id = :id";

        $conn = Connection::getConnection();
        $stm = $conn->prepare($sql);
        $stm->execute(["id" => $id]);
        
        $dados = $stm->fetchAll();
        $intensidades = $this->map($dados); 

            if (!empty($intensidades))
            {
                return $intensidades[0];
            } 
            else
            {
                return null;
            }
    }

    public function insert()
    {
        $sql = "";
    }
}