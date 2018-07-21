<?php

importarClasses("../app/model");
importarClasses("../app/controller");

$urlCompleta = $_GET['url'];

$url = explode('/', $urlCompleta);

$classe = ucfirst($url[0])."Controller";

if(!class_exists($classe)){
    echo "<h1> Página não encontrada </h1>";
    return;
}

$action = "action".ucfirst($url[1]);

$obj = new $classe();
$obj->$action();

function importarClasses($caminho)
{
    foreach (scandir($caminho) as $nomeDoArquivo){
        $path = $caminho . '/' . $nomeDoArquivo;
        if (is_file($path)){
            require $path;
        }
    }
}