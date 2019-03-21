<?php

namespace Helper;

use \PDO as PDO;

class DBHelper {

    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_NAME = 'markup';
    const DB_HOST = 'localhost';
    const DB_PORT = 3306;
    
    private static $connection;
    
    private function __construct() {
    }
    
    private function __clone() {
    }
    
    static function getConnection() {

        if(self::$connection === null) {
           $options = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
           // Prüft ob schon eine Verbindung zur DB besteht
           
            $dsn = 'mysql:host=' . self::DB_HOST . ':' . self::DB_PORT . ';dbname=' . self::DB_NAME;
            // Baut die Verbindung zur Datenbank auf

            try {
                self::$connection = new PDO($dsn, self::DB_USER, self::DB_PASS, $options);
            } catch (Exception $ex) {
                //TODO: Fehlermeldung anpassen
                echo $ex->getTraceAsString();
            } 
        }
        return self::$connection;
        
    }

}
