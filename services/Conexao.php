<?php

class Conexao {

    public static function abrir()
    {
        $config = self::getConfig();
        $host = "mysql:dbname=".$config['database'].";".
            "host=".$config['host'].";port=".$config['port'];
        $pdo = new PDO($host, $config['username'], $config['password'] );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
    }

    private static function getConfig()
    {
        return require '../config/database.php';
    }
}