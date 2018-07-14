<?php

class CervejaModel {
    // CARACTERISTICAS | ATRIBUTOS
    private $nome;
    private $teorAlcoolico;
    private $preco;

    //ACOES
    public function setNome($param)
    {
        $this->nome = $param;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setTeorAlcoolico($param)
    {
        $this->teorAlcoolico = $param;
    }

    public function getTeorAlcoolico()
    {
        return $this->teorAlcoolico;
    }

    public function setPreco($param)
    {
        $this->preco = $param;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}