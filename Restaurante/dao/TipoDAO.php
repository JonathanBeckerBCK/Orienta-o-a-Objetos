<?php

require_once __DIR__ . "/../util/Connection.php";
require_once __DIR__ . "/../model/Tipo.php";
require_once __DIR__ . "/../model/Intensidade.php";

class TipoDAO
{
    public function list()
    {
        $sql = "SELECT c.*, c.nome AS nome_comida, i.nome AS nome_intensidade 
                FROM comidas c 
                JOIN tipo t ON (t.id = c.id_tipo) 
                JOIN intensidades i ON (i.id = c.id_intensidade)";

        
        $conn = Connection::getConnection();
        $stm = $conn->prepare($sql);
        $stm->execute();
        
        $dados = $stm->fetchAll();
        return $this->map($dados);
    }

    public function map(array $dados)
    {
        $comidas = [];

            foreach ($dados as $d)
            {
                $tipo = new Tipo();
                $tipo->setId($d['id_tipo']);
                $tipo->setNome($d['nome_comida']); 

                $intensidade = new Intensidade();
                $intensidade->setId($d['id_intensidade']);
                $intensidade->setNome($d['nome_intensidade']); 

                $comidas[] = ['tipo' => $tipo, 'intensidade' => $intensidade];
            }

        return $comidas;
    }

    public function findById(int $id): ?array
    {
        $sql = "SELECT c.*, c.nome AS nome_comida, i.nome AS nome_intensidade 
                FROM comidas c 
                JOIN tipo t ON (t.id = c.id_tipo) 
                JOIN intensidades i ON (i.id = c.id_intensidade)
                WHERE (c.id = :id)";
        
        $conn = Connection::getConnection();
        $stm = $conn->prepare($sql);
        $stm->execute(["id" => $id]);
        
        $dados = $stm->fetchAll();
        $comidas = $this->map($dados); 

            if (!empty($comidas))
            {
                return $comidas[0];
            } 
            else
            {
                return null;
            }
    }

    public function update(int $idComida, Tipo $tipo, Intensidade $intensidade) 
    {
        try
        {
            $sql = "UPDATE comidas 
                    SET nome = :nome, id_tipo = :id_tipo, id_intensidade = :id_intensidade
                    WHERE id = :id";

            $conn = Connection::getConnection();
            $stm = $conn->prepare($sql);
            
            $stm->bindValue("id", $idComida);
            $stm->bindValue("nome", $tipo->getNome());
            $stm->bindValue("id_tipo", $tipo->getId());
            $stm->bindValue("id_intensidade", $intensidade->getId());

            $stm->execute();
            return "";
        }
        catch(PDOException $e)
        {
            $erro = "Erro ao salvar a comida. Tente novamente.";
    
                if(defined('AMB_DEV') && AMB_DEV)
                {
                    $erro .= "<br>" . $e->getMessage();  
                }
                
            return $erro;
        }
    }

        public function excluir(int $id) 
        {
            try 
            {
                $sql = "DELETE FROM comidas WHERE id = ?";

                $conn = Connection::getConnection();
                $stm = $conn->prepare($sql);
                $stm->execute([$id]);
                return "";

            } 
            catch(PDOException $e) 
            {
                $erro = "Erro ao excluir o aluno. Tente novamente.";
                if(AMB_DEV)
                    $erro .= "<br>" . $e->getMessage();  
                return $erro;
            }
    }
}
