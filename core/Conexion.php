<?php

class Conexion {

public static $pdo;

    public static function getConnection(){

        if (!self::$pdo) {
            $host = 'localhost';
            $db = 'peercash';
            $user = 'root';
            $pass = '1234';
            $charset = 'utf8mb4';

            self::$pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;

    }





}

