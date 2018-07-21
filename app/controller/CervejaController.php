<?php

class CervejaController {

    public function actionListar()
    {
        $cerveja = new CervejaModel();

        $cerveja->setNome("Budweiser");

        echo $cerveja->getNome();
    }

    public function actionCadastrar()
    {
        include_once "../resource/view/template.php";    
    }

    public function actionSalvar()
    {
        $cerveja = new CervejaModel();
        $cerveja->setNome($_POST['nome']);
        $cerveja->setTeorAlcoolico($_POST['teorAlcoolico']);
        $cerveja->setPreco($_POST['preco']);

        $dao = new CervejaDao();
        $dao->inserir($cerveja);

        echo "Gravou no banco";
    }
}