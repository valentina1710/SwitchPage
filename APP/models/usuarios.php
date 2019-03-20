<?php

require_once $_SERVER["DOCUMENT_ROOT"].
'/SWITCHPAGE/APP/database/Conexion.php';

class usuarios{
   public $password;
   public $email;

   public static function getAll(){
    $select = "Select * from usuarios";
    $con = new Conexion();
    $rs = $con->consultar($select);
    $con->cerrar();
    return $rs;
}
   
public static function login($user, $pass){
    $select = "Select Id_Usuarios, Correo
    from usuarios
    where (Correo= '$user') and (Contraseña= '$pass')";
    $con = new Conexion();
    $rs = $con->consultar($select);
    $con->cerrar();
    return $rs;   
}

}