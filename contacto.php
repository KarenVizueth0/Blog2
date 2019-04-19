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
    	$mensaje = $_POST['mensaje'];
        $username = $_POST['username'];
        $correo = $_POST['correo'];
        if($pass1 == $pass2){	

            #CONSTRUIR LA CONSULTA INSERT PARA DAR DE ALTA AL USUARIO
            $insert = "INSERT INTO contacto(mensaje, username, fechaEnvio, correo) 
            				VALUES( '{$mensaje}', '{$username}',(SELECT curdate() FROM dual), '{$correo}')
                            ;";
    
        #Mandamos la consulta a la base de datos
        if($conexion->query($insert)) {

            echo "Mensaje enviado correctamente<br />";
          }else{
            echo "ERROR: " . $conexion->error . "<br />";
          }

        }else{
            echo "<br />";
        }
    }
 ?>

<!DOCTYPE html>
<html style="background-color:#FFFFFF;">
<head>
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


  <style>
  #field-contact{
        float: left;
    width: 50%;
  }
      .field-map{
            float: right;
    width: 50%;
    display: flex;
    padding: 72px 55px 90px 55px;
    flex-wrap: wrap;
      }

       #map {
        margin: auto;
        height: 350px;
        width:100%;
       }

       .field-ubicacion{
        width: 100%;
        height: 50px;
        display: flex;
       }
       .h3-margin{
        margin: auto;
       }
    </style>


	<title>Contacto</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="style.css">
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <br/>



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


	<div class="bg-contact2">
		<div class="container">
			<div class="wrap-contact2" id="field-contact">
					<span class="contact2-form-title">
						Contáctanos
					</span>

          <div>
<form action="#" method="POST">
          <div class="wrap-input2 validate-input" data-validate="Name is required">
          <input type="tect" name="username" class="username" placeholder="Nombre">
          <span class="focus-input2" ></span>
          </div>

          <div class="wrap-input2 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <input type="email" name="correo" class="email" placeholder="Escribe tu correo">
          <span class="focus-input2" ></span>
          </div>

          <div class="wrap-input2 validate-input" data-validate="Name is required">
            <input type="tect" name="mensaje" class="mensaje" placeholder="Mensaje">
          </div>

          <div class="container-contact2-form-btn">
            <div class="wrap-contact2-form-btn">
              <div class="contact2-form-bgbtn"></div>
              <button type="submit" name="btnEnviar" class="contact2-form-btn">
               Enviar
                        
              </button>
              <div class="error"><span></span></div>
            </div>
          </div>
           </form>



           <br/>
       <br/>

           <br/>
       <br/>
<table width="500" cellspacing="10" cellpadding="70" border="3" bgcolor="#17202A"> 
<tr> 
</tr> 
<tr> 
   <td bgcolor="#FFFFFF"> 
   <font face="arial, verdana, helvetica"> 

<center>
  <a> <big>Tripa vacia <b>CORAZÓN</b> sin alegria</big></a> <br/>


</center>

   </font> 
   </td> 
</tr> 
</table>




  <table width="500" cellspacing="10" cellpadding="70" border="0" bgcolor="#17202A"> 
  <tr> 
  </tr> 
  <tr> 
     <td bgcolor="#FFFFFF"> 
     <font face="arial, verdana, helvetica"> 

  <br/>
  <br/>
  <center>
    <img src="taco.jpg" /></a>


  </center>

     </font> 
     </td> 
  </tr> 
  </table>
<br/>
           <br/>
           <br/>
           <br/>
           <br/>
<br/>
<br/>
<br/>
<br/>
<br/>

  <!-- APPI FACEBOOK -->
 
 <center><a><b><big>SI TE HA GUSTADO </b>¡¡¡Déjanos tu comentario!!!</big></a> <br/></center> 
    <br/>
<br/>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="4"></div>




          </div>

  
					

			</div>

        <!-- APPI GOOGLE MAPS -->

<div class="field-map">
<div class="field-ubicacion">
   <h3 class="h3-margin">Ubicación</h3>
    <br/>
           <br/>
       <br/>
</div>

    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 20.5785807, lng: -100.3519003};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKXkZnzbR71ZV16l07PIHhUAiA5p4kGks&callback=initMap">


    </script>
  </div>




<table width="280" cellspacing="5" cellpadding="50" border="0" bgcolor="#34495E"> 
<tr> 
</tr> 
<tr> 
   <td bgcolor="#FFFFFF"> 
   <font face="arial, verdana, helvetica"> 

<br/>
<br/>
<br/>
<center></center>
<img src="img.jpg" /></a>


   </font> 
   </td> 
</tr> 
</table>

<table width="500" cellspacing="5" cellpadding="50" border="0" bgcolor="#34495E"> 
<tr> 
</tr> 
<tr> 
   <td bgcolor="#FFFFFF"> 
   <font face="arial, verdana, helvetica"> 

<br/>
<br/>
<br/>
 <center><a><big>¡¡¡Barriga llena <b>CORAZON CONTENTO!!!</b></big></a> <br/></center> 
<br/>
<center><b>Una de las mejores elecciones, ideal para cualquier tipo de reunión, ya sea una junta de negocios o para sorprender a aquella persona especial. ¡¡Ven y visítanos!! </b></center>

   </font> 
   </td> 
</tr> 
</table>

<br/>
<br/>
<br/>


<table width="500" cellspacing="100" cellpadding="100" border="0" bgcolor="#17202A"> 
<tr> 
</tr> 
<tr> 
   <td bgcolor="#FFFFFF"> 
   <font face="arial, verdana, helvetica"> 

<br/>
<br/>
<br/>
<br/>
<center>
  <img src="salsa.jpg" /></a>


</center>

   </font> 
   </td> 
</tr> 
</table>



          </div> 
		</div>

<table width="1240" cellspacing="1" cellpadding="50" border="0" bgcolor="#34495E"> 
<tr> 
</tr> 
<tr> 
   <td bgcolor="#F5FFFA"> 
   <font face="arial, verdana, helvetica"> 

<br/>

<center>
   <center><a><big>VISITANOS YA !!!</big></a> <br/></center>
   <center>Telefono<br/></center> 
   <center>442 113 3918<br/></center> 
   <center>info@restaurantsa&vi.com<br/></center>  
<br/>
</center>

   </font> 
   </td> 
</tr> 
</table>

<div class="social">
    <ul>
      <li><a href="https://www.facebook.com" target="_blank" class="icon-facebook"></a></li>
      <li><a href="http://www.youtube.com" target="_blank" class="icon-youtube2"></a></li>
      <li><a href="http://www.googleplus.com" target="_blank" class="icon-google-plus"></a></li>
      <li><a href="F:/pag/index.html"  class="icon-home"></a></li>
    </ul>
  </div>

   

	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>


</body>
</html>
