<?php 

    #habilitamos el uso de variables de sesion
    session_start();

    


    #Si el usuario cerro sesion
    if(isset($_GET['salir'])){
        if($_GET['salir'] == 1){
            #Liberamos el espacio de las variables de sesion
            session_unset();
        }
    }

    #Mandamos llamar el archivo de conexion
    require_once('conex.php');

    #Instanciamos la clase funcion
    $funciones = new Funciones();

    #Mandamos llamar el metodo conectar() del objeto funciones
    $conexion = $funciones->conectar();

 

    #Contacto
    if(isset($_POST['btnEnviar'])){
      $fecha = $_POST['fecha'];
        $username = $_POST['username'];
        $hora = $_POST['hora'];
        $correo = $_POST['mesa'];



        if($pass1 == $pass2){ 

            #CONSTRUIR LA CONSULTA INSERT PARA DAR DE ALTA AL USUARIO
            $insert = "INSERT INTO reservaciones(fecha, username, fechaEnvio, hora, mesa) 
                    VALUES(  '{$username}','{$fecha}', '{$mesa}', (SELECT curdate() FROM dual),  '{$hora}'))
                            ;";
    
        #Mandamos la consulta a la base de datos
        if($conexion->query($insert)) {

            echo "Rerervacon realizada correctamente<br />";
          }else{
            echo "ERROR: " . $conexion->error . "<br />";
          }

        }else{
            echo "<br />";
        }
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservaciones</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

    <br/>


<link rel="stylesheet" href="css/styless.css">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/nasa-site.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
      }
    });
  </script>
  <script src="https://use.typekit.net/cnh3mnl.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script src="js/modernizr.js" type="text/javascript"></script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">


<link rel="stylesheet" href="css/styless.css">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/nasa-site.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
      }
    });
  </script>
  <script src="https://use.typekit.net/cnh3mnl.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script src="js/modernizr.js" type="text/javascript"></script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">



</head>
<body>

 <div class="nav w-nav" data-animation="default" data-collapse="small" data-duration="400">
     <div class="w-container">
      <nav class="nav-menu w-nav-menu" role="navigation"><a class="nav-link w-nav-link" href="indexx.html">Home</a><a class="nav-link w-nav-link" href="menu.html">Menu</a>
        <a class="brand w-hidden-small w-hidden-tiny w-nav-brand" href="Galeria.html"><img src="images/conejo.jpg" width="120">
        </a><a class="nav-link w-nav-link" href="res.php">Reservaciones</a><a class="nav-link w-nav-link" href="contacto.php">Contacto</a>
        <a class="search-icon w-inline-block" href="#"><img src="images/lupa.png">
        </a>
      </nav>
      <div class="menu-button w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
      <a class="brand centered w-hidden-main w-hidden-medium w-nav-brand" href="#"><img class="small-centered-logo" src="images/nasa-logo.png" width="120">
      </a>
    </div>
  </div>


    <br/>
    <br/>
        <br/>

    <br/>

 <br/>
        <br/>

    <br/>

  <div style="background-image: url('comida.jpg');">
      <div class="wrap-contact2">
          <span class="contact2-form-title">
            Reservaciónes
          </span>
          <form method="POST" action="confirmacion.php">
          <div class="wrap-input2 validate-input" data-validate="Name is required">
          Cantidad de Personas: <input type="number" name="username" class="username" placeholder="Select">
          </div>

          <div class="wrap-input2 validate-input" data-validate="Name is required">
          Fecha de reservacion: <input type="date" name="fecha" class="fecha" placeholder="Fecha">
          </div>

          <div class="wrap-input2 validate-input" data-validate="Name is required">
          Hora de reservación: <input type="time" name="hora" class="hora" placeholder="Hora de reservación">
          </div>

          <div class="wrap-input2 validate-input" data-validate="Name is required">
            <input type="text" name="mesa" class="mesa" placeholder="Tipo de área">
          </div>

          <div class="container-contact2-form-btn">
            <div class="wrap-contact2-form-btn">
              <div class="contact2-form-bgbtn"></div>
              <button type="submit" name="btnEnviar" class="contact2-form-btn">
               Reservar
                        
              </button>
              <div class="error"><span></span></div>
            </div>
          </div>
           </form>
        </form>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

</body>
</html>
