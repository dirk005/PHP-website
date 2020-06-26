<?php
class Database {
    public $dbInfo = '';
    public $dbUser = '';
    public $dbPassword = '';
    public $db = '';
    public function __construct() {
        // connect if local server
        $this -> $dbInfo = "mysql:host=localhost;dbname=webpage";
        $this -> $dbUser = "root";
        $this -> $dbPassword = "";
        $this -> $db = new PDO($dbInfo, $dbUser, $dbPassword);
        $this -> $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function dbselect($table, $select, $where = NULL) {
    }

    public function dbadd($tablename, $insert, $format) {
    }

    public function dbupdate($tablename, $insert, $where) {
    }

}
