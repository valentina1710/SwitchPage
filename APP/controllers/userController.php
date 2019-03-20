<?php
require_once $_SERVER["DOCUMENT_ROOT"].
'/SWITCHPAGE/APP/models/usuarios.php';

class userController  { 

    public function __construct(){
   SESSION_START();

   $action = isset($_GET["action"]) ? $_GET["action"] : "all";

   if(method_exists($this, $action)) {

    $this->$action();
}else{
    $this->error();
}

   }

   public function all($msg = null){
    if(!$_SESSION["login"]){
    $this->login();
    return;
    }
 $usuarios = usuarios::getAll();

 include $_SERVER["DOCUMENT_ROOT"].
 '/SWITCHPAGE/PUBLIC/views/usuarios/IUser.php';      
}

    public function login(){
        if(isset($_POST["email"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
    
            $rs = usuarios::login($email, $password);
            if ($rs != null && $rs->num_rows > 0) { 
                
                $_SESSION["login"]= true;
                $_SESSION["email"] = $rs->fetch_assoc();    
                
                     // print_r( $_SESSION);

                 $this->all();  
             
        }else{
            session_destroy();
            $_SESSION["login" ]= false;
            $_SESSION["msg"] = "Credenciales invalidas";
            
            include $_SERVER["DOCUMENT_ROOT"].
               '/SWITCHPAGE/index.php';          
        }    
    }else{
          include $_SERVER["DOCUMENT_ROOT"].
          '/SWITCHPAGE/index.php';
         }

      }
      public function error(){
        echo "error";
    }

    public function logout(){
        session_unset();
        $this->login();
    }

    public function envíarDatos(){
    $nombre= $_POST["nombre"];
    $telefono= $_POST["telefono"];
    $email=$_POST["email"];
    $ciudad=$_POST["ciudad"];

    mail('valentinarivera17100@gmail.com');


    }


  }
new userController();