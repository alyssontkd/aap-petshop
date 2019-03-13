<?php

require_once 'config.php';

class DB {

    private static $instance;

    public static function getInstance() {

        if (!isset(self::$instance)) {
            switch (DB_TYPE_SGBD) {
                case 'mysql':
                    try {
                        self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                        self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                    break;
                case 'msssql':
                    try {
                        self::$instance = new PDO('dblib:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                        self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                        self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                    break;
                default:
                    try {
                        self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                        self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                    break;
            }
        }

        return self::$instance;
    }

    public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }

    public static function fetchAll() {
        return self::getInstance()->fetchAll();
    }

    public static function fetch() {
        return self::getInstance()->fetch();
    }

}
