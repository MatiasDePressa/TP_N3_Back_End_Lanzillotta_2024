<?php
class basededatos extends SQLite3 {
    public function __construct() {
        $this->open('..\database\Materias.sqlite');
    }
}

$db = new basededatos();