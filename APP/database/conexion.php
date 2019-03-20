<?php

require_once $_SERVER["DOCUMENT_ROOT"].
'/SWITCHPAGE/APP/config/database.php';
class Conexion {

    private $con;

    // Conexión a la BD mysql
    public function __construct() {
        $this->con = new mysqli(HOST, USER, PASS, DB);
        $this->con->set_charset(CHARSET);
    }

    // Select
    public function consultar($consulta) {
        $rs = $this->con->query($consulta);

        return ($rs->num_rows > 0) ? $rs : null;

        // if ($rs->num_rows > 0) {
        //     return $rs;
        // } else {
        //     return null;
        // }
    }

    // Insert, Update, Delete
    public function ejecutar($ejecutar) {

        $res = $this->con->query($ejecutar);

        return $res;
    }

    public function cerrar() {
        $this->con->close();
    }
}