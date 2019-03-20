<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title> SWITCH </title>
      <link href="/SWITCHPAGE/PUBLIC/imgs/icono.ico" rel="shortcut icon" /
                
      <link rel="stylesheet"  href="css/estilos.css">
    </head> 
    <body>

    <!-- Dropdown Structure CAJA DE CONTENIDO-->
<ul id="dropdown1" class="dropdown-content">
  <li class="divider"></li>
  <li><a href="/SWITCHPAGE/PUBLIC/views/usuarios/info.php">¿Quienes somos?</a></li>
  <li class="divider"></li>
  <li><a href="/SWITCHPAGE/PUBLIC/views/usuarios/historia.php">Historia</a></li>
  <li class="divider"></li>
</ul>
    <!-- Dropdown Structure CAJA DE CONTENIDO-DEL MOVIL -->
    <ul id="dropdown2" class="dropdown-content">
    <li class="divider"></li>
  <li><a href="/SWITCHPAGE/PUBLIC/views/usuarios/info.php"><i class="material-icons left">domain</i>¿Quienes somos?</a></li>
  <li class="divider"></li>
  <li><a href="/SWITCHPAGE/PUBLIC/views/usuarios/historia.php"><i class="material-icons left">create</i>Historia</a></li>
  <li class="divider"></li>
</ul>




  <!--NAVBAR CONTENEDOR -->
<nav> 
  <div class="nav-wrapper indigo blue darken-2">
  <div class="container">
  <a class="brand-logo"><img src="/SWITCHPAGE/PUBLIC/imgs/logo.png" style="max-width: 50px; max-height: 50"><FONT SIZE=20> Switch </FONT SIZE=20></a>
   <!--MODO responsive -->
  <a href="#" class="sidenav-trigger" data-target="mobile-links">
  <i  class="material-icons">menu</i>
  <!--<a href="#"><i class="material-icons">person</i></a>-->
    <ul class="right hide-on-med-and-down">
      <!-- Modelo Trigger -->
      <li><a class=" blue darken-2 modal-trigger" href="#modal2" ><i class="material-icons left">person</i>Ingresa</a></li> 
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger blue darken-1" href="#!" data-target="dropdown1">Empresa<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
  </div>
</nav>  

   <!--SIDENAV DESPLEGABLE MODO responsive-->
   <ul class="sidenav" id="mobile-links">
   <li><div class="user-view">
        <div class="background">
        <img src="/SWITCHPAGE/PUBLIC/imgs/img4.jpg">
        </div>
        <img src="/SWITCHPAGE/PUBLIC/imgs/logo.png" style="max-width: 80px; max-height: 80" > 
     </div></li>
       <li><div class="divider"></div></li>
        <li><a class=" modal-trigger" href="#modal2" ><i class="material-icons left">person</i>Ingresa</a></li> 
        <li><div class="divider"></div></li>
        <li><a class="dropdown-trigger blue " href="#!" data-target="dropdown2"><i class="material-icons left">location_city</i>Empresa<i class="material-icons right">arrow_drop_down</i></a></li>
   </ul>


<?php
      if(isset($_SESSION["login"])&& !$_SESSION["login"]){
            echo "<div class='alert alert-danger'>
            " .$_SESSION["msg"]. "
            </div>";
    }
?>
    <!-- Modelo estructura para el Inicio de sesión-->
<div id="modal2" class="modal ">
  <div class="modal-content">
    <h4>Inicio de sesión </h4>
    <div class="row">
    <form class="col s12"action="/SWITCHPAGE/APP/controllers/userController.php?action=login"
    method="post">
      <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">account_circle</i>
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
          <span class="helper-text" data-error="wrong" data-success="right">Ingrése correo electronico</span>
        </div>
        <div class="input-field col s11">
        <i class="material-icons prefix">lock</i>
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Contraseña</label>
          <span class="helper-text" data-error="wrong" data-success="right">Ingrése su contraseña</span>
    <p>
      <label>
        <input type="checkbox" />
        <span>Recuerdame</span>
      </label>
    </p>
   <center>
    <button class="btn blue-effect blue darken-2"="submit"><i class="fa fa-check"></i> Ingresar
   </button>
  </center>          
        </div>
        <div class="right show-on-small">
        Ayuda  |    Términos   |  Condiciones
        </div>
      </div>
    </form>
  </div>
  </div>
</div>

<!-- CONTENEDOR DE PARALLAX-->
    <div class="parallax-container">
      <div class="parallax">   
      <img src="/SWITCHPAGE/PUBLIC/imgs/img4.jpg" alt="">
    <center>
      <br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br>
    </center>      
      </div>
      <br>
      <center><br><br><br>
      <img src="/SWITCHPAGE/PUBLIC/imgs/logo.png" style="max-width: 180px; max-height: 180" alt="logo"> 
      <h2 class=" center-align white-text"><FONT FACE="times new roman" >Tu casa a un botón</FONT> </h2>
      <!-- Modelo Trigger -->
      <a class="waves-effect waves-light btn large modal-trigger  blue darken-3 btn white-text center " href="#modal1"><FONT SIZE=2>¡Comenzar! </FONT SIZE=2></a>  
    </center>
   </div>

<!-- Modelo estructura PARA EL FORMULARIO DE CONTACTO -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>¡Registrate para contactarte!</h4>
    <p>Dejanos tus datos, para así comunicarnos contigo y poder contarte de nuestras ofertas, manejo de costos e información a detalle.</p>
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Teléfono</label>  <br>
        </div>
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
          <span class="helper-text" data-error="wrong" data-success="right">Ingresa un correo electronico, por favor</span>
        </div>
       <div class="input-field col s12">
         <select>
         <option value="" disabled selected>Selecciona una ciudad</option>
         <option value="1">Cali</option>
         <option value="2">Palmira</option>
         <option value="3">Buga</option>
         </select>
       <label>Ciudades</label>
        </div>
      </div>
    </form>
  </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">No, gracias</a>
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">¡Listo!</a>
  </div>
</div>

<!--CONTENEDOR DE INFORMACION-->
    <div class="blue darken-3  white-text center">
         <div class="container">
            <div class="section">
    <h3><FONT FACE="times new roman" > Interactua con el ambiente</FONT> </h3>
    <p><FONT FACE="arial" > Sistema domotico simulado que permita la facil interacción con los ambientes y sus componentes mediate el uso de una aplicacion movil.
    Objetivos específicos:
    - Diseñar un aplicativo movil compacto en su presentación y de facil entendimiento para cualquier usuario
    - Compatible, a nivel interno, con la mayoría de sistemas operativos (moviles y escritorio)</FONT></p> 
         </div>
        </div>
  </div>
  
<!--SEGUNDO CONTENEDOR PARALLAX-->
    <div class="parallax-container">
        <div class="parallax">
         <img src="/SWITCHPAGE/PUBLIC/imgs/casa2.jpg" alt="">
    </div>    
    </div>

    <div class="blue darken-2 white-text center">
         <div class="container">
            <div class="section">
    <h3> SWITCH </h3>
    <p>Objetivo general: Implementar un sistema domotico simulado que permita la facil interacción con los ambientes y sus componentes mediate el uso de una aplicacion movil.
    Objetivos específicos:
    - Diseñar un aplicativo movil compacto en su presentación y de facil entendimiento para cualquier usuario
    - Compatible, a nivel interno, con la mayoría de sistemas operativos (moviles y escritorio)</p> 
         </div>        
        </div>
    </div>


<!--TERCER CONTENEDOR DE PARALLAX-->
<div>
    <div class="parallax-container">
        <div class="parallax">
         <img src="/SWITCHPAGE/PUBLIC/imgs/casa1.jpg" alt="">
    </div>
   </div>
 </div>

  <div class="container section">    
        <div class="video-container">
        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>    
  </div>

         <div align='center'>
         <address >  Todo los derechos reservados para @Switch </address>
         </div>
   

   <!-- COMPILADO PARA IMPLEMENTAR JAVASCRIPT -->
   <script 
   src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
   </script>

   <!--INICIALIZA LOS COMPONENTES JS-->
     <script>
    document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();
  });
    </script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
  });
  </script>
    </body>
  </html>
        