<!DOCTYPE <!DOCTYPE html>
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
    <title>Panel de Control</title>
    <link rel="stylesheet" href="/SWITCHPAGE/PUBLIC/css/main.css">
    <link href="/SWITCHPAGE/PUBLIC/imgs/icono.ico" rel="shortcut icon" />

</head>

<body   >

        <!-- NABVAR PRINCIPAL-->
        <div class=" blue darken-2 ">
        <nav class=" blue darken-2   " >   
          <div class="nav-wrapper ">
          <a  href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons left">menu</i></a>
          <div class="container">
              <a href="" class="brand-logo center"> <FONT SIZE=20> SWITCH </FONT SIZE=20><i class="material-icons">touch_app</i></a>
              </div>     
            </div>
          </nav>
        </div>
    

      <!--SIDENAV DESPLEGABLE-->
      <ul id="slide-out" class="sidenav" >
        <li><div class="user-view">
            <div class="background">
            <img src="/SWITCHPAGE/PUBLIC/imgs/img4.jpg">
            </div>
            <img src="/SWITCHPAGE/PUBLIC/imgs/logo.png" style="max-width: 80px; max-height: 80" > 
        </div></li>
            <li><a href="#"><i class="material-icons">cloud</i>Mi cuenta</a></li>
            <li><div class="divider"></div></li>
            <li class="active"><a href="/SWITCHPAGE/PUBLIC/views/usuarios/IUser.php">Panel de Control </a></li>  
            <li><div class="divider"></div></li>
            <li><a href="/SWITCHPAGE/PUBLIC/views/usuarios/IUser.php">Volver </a></li>      
      </ul> 

      <div class="container">
      <div class="card-panel hoverable"> 
      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="/SWITCHPAGE/PUBLIC/imgs/logo.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                Aquí va el perfil de usuario, DIRECCIÓN IP.
              </span>
            </div>
          </div>
        </div>
      </div>
        <div class="row">
            <div class="col s12 ">
              <h3 class="header center-align">Panel de Control</h3>
               <div class="card-image ">
               <center>
                  <img  class="responsive-img"  class="materialboxed "  width="450"  src="/SWITCHPAGE/PUBLIC/imgs/panelcontrol.jpg" ">
               </center>
               </div>
              <table class="highlight centered responsive-table">
                <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>       </th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>lampara 1</td>
                    <td>
                      <!-- Switch -->
                        <div class="switch">
                          <label>
                            Off
                            <input type="checkbox" onchange="clickCheck('luz1', this)">
                            <span class="lever"></span>
                            On
                          </label>
                        </div>
                  </td>
                </tr>
             <!--   sfc3tvEQw34HbI1XI2rY-->
                <tr>
                  <td>Ventana</td>
                  <td>
                    <!-- Switch -->
                    <div class="switch">
                      <label>
                        Off
                        <input type="checkbox">
                        <span class="lever"></span>
                        On
                      </label>
                    </div>
                  </td>
                </tr>

                
                <tr>
                  <td>Televisor</td>
                  <td>
                    <!-- Switch -->
                    <div class="switch">
                      <label>
                        Off
                        <input type="checkbox">
                        <span class="lever"></span>
                        On
                      </label>
                    </div>
                  </td>
                </tr>
                
              </tbody>
            </table>
            
          </div>  
        </div>    
      </div>
      </div>

      <!--SCRIPT PARA IMPLEMENTAR JAVASCRIPT-->
        <script 
          src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
        </script>

      <!--SCRIPT PARA INICIALIZAR TODOS LOS COMPONENTES JAVA SCRIPT-->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
          });

          var est_luz1 = "",
            est_luz2 = "",
            est_puertaTrasera = "";


        const socket = new WebSocket('ws://192.168.0.18:8000');
        // Abre la conexión
        socket.addEventListener('open', function(event) {});

        // Escucha por mensajes
        socket.addEventListener('message', function(event) {
            console.log('Message from server', event.data);

            var input = event.data;
            var comandos;

            if (input != "") {

                comandos = input.split(':');

                est_luz1 = comandos[0];
                est_luz2 = comandos[1];
                est_puertaTrasera = comandos[2];
            }
            console.log(est_luz1 + ' ' + est_luz2 + ' ' + est_puertaTrasera);
            est_luz1 = "";
            est_luz2 = "";
            est_puertaTrasera = "";
            comandos.length = 0;

        });

        function clickCheck(nombre, value) {
            var valor = (value.checked) ? 1 : 0;
            socket.send(valor + ':0:0');
        }

        function clickCheck2(nombre, value) {
            var valor = (value.checked) ? 1 : 0;
            socket.send(valor + ':0:0');
        }

         </script>
</body>
</html>