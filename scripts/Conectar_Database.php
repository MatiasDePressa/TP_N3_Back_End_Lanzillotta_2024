<?php
//conexion con la base de datos SQLite mediante una clase
class basededatos extends SQLite3 {
    public function __construct() {
        $this->open('../database/Materias.sqlite');
    }
}

//se crea un objeto de conexion y en caso de que no exista una conexion
// con la base de datos muestra un mensaje de error
$db = new basededatos();
if (!$db) {
    echo $db->lastErrorMsg();
}
