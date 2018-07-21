<?php 

class CervejaDao {
    private $con;

    public function __construct()
    {
        try {
            $this->con = Conexao::abrir();
        } catch (PDOException $e){
            echo $e->getMessage();
            die();
        }
    }

    public function inserir(CervejaModel $cerveja)
    {
        try {
            $query = $this->con->prepare("INSERT INTO cerveja 
            (nome, preco, teorAlcoolico) VALUES
            (:nome, :preco, :teorAlcoolico)");

            $query->bindValue(':nome', $cerveja->getNome());
            $query->bindValue(':preco', $cerveja->getPreco());
            $query->bindValue(':teorAlcoolico', $cerveja->getTeorAlcoolico());

            return $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
