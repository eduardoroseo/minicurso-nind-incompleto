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

}