<?php
require "../app/model/CervejaModel.php";
require "../app/controller/CervejaController.php";

$urlCompleta = $_GET['url'];

$url = explode('/', $urlCompleta);

$classe = ucfirst($url[0])."Controller";
$action = "action".ucfirst($url[1]);

$obj = new $classe();
$obj->$action();
