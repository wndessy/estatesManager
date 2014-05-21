<?php

/**
 * Description of Config
 *
 * @author root
 */
class Config {

    private $DB_HOST = 'localhost';
    private $DB_NAME = 'egertonhousing';
    private $DB_USER = 'root';
    private $DB_PASSWORD = 'root';   
    public $STRING;
    
    function __construct() {
        $this->STRING = simplexml_load_file("../resources/strings.xml");
    }

    public function getDB_HOST() {
        return $this->DB_HOST;
    }

    public function getDB_NAME() {
        return $this->DB_NAME;
    }

    public function getDB_USER() {
        return $this->DB_USER;
    }

    public function getDB_PASSWORD() {
        return $this->DB_PASSWORD;
    }

}
