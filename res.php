  
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

<meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/templatemo_misc.css">

    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script> 

    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<script type="text/javascript">

ddsmoothmenu.init({
  mainmenuid: "templatemo_flicker", 
  orientation: 'h', 
  classname: 'ddsmoothmenu', 
  contentsource: "markup"
})

</script>


</head>
<body>

<script>
alert('Registrarse o Iniciar secion, para relizar tu Reservación');
window.location.href='inicio.php';
</script>


    <header>
    <!-- start menu -->
    <div class="menu">
      <div class="contenedor">
    <div id="templatemo_home">
      <div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="logo"> </div>
          </div>
          <div class="col-sm-9 col-md-9 templatemo_col9">
            <div id="top-menu">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="videos.html">Menú</a></li>
                <li><a href="videos.html">Galeria</a></li>
                <li><a href="res.php">Reservación</a></li>
                <li><a href="contacto.php">Contacto</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

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
						<input type="text" name="mesa" class="mesa" placeholder="Tipo de mesa">
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button type="submit" name="btnRegistrar" class="contact2-form-btn">
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
