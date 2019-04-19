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

    #Inicio de sesion
    if(isset($_POST['btnlogin'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $select = "SELECT COUNT(*) AS total
                    FROM loging
                    WHERE username = '$user'
                    AND pass = '{$pass}'";
        
        #Mandamos la consulta a la BD

            
       $resultado = $conexion->query($select);

        #Recuperamos el resultaso de la consulta
             
     $total = $resultado->fetch_assoc();
echo $total['total'];
        if ($total['total']== 0){
            echo "Usuario o contraceña incorrecta<br/>";
        }else{
    
            #REDIRIGIMOS AL USUARIO A LA PAGINA TIMELINE.PHP
              header("Location: res1.php");          
        }
    }


    #Registro del usuario
    if(isset($_POST['btnRegistrar'])){
        $username = $_POST['username'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $correo = $_POST['correo'];
        $genero = $_POST['genero'];

        if($pass1 == $pass2){

            #CONSTRUIR LA CONSULTA INSERT PARA DAR DE ALTA AL USUARIO
            $insert = "INSERT INTO loging(username, pass, fechaRegistro, 
                            correo, genero) VALUES('{$username}', '{$pass1}',
                             (SELECT curdate() FROM dual), '{$correo}', '{$genero}');";
    
        #Mandamos la consulta a la base de datos
        if($conexion->query($insert)) {
            echo "Usuario registrado correctamente<br />";
          }else{
            echo "ERROR: " . $conexion->error . "<br />";
          }

        }else{
            echo "Las contraceñas no coinciden<br />";
        }
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inicio de Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>





	<div style="background">
		<div class="container-contact2">
			<div class="wrap-contact2">
					<span class="contact2-form-title">
						INICIO DE SESIÓN
					</span>
				
				<form action="#" method="POST">
					<div class="wrap-input2 validate-input" data-validate="Name is required">
 					<input type="text" name="username" class="username" placeholder="Usuario">
 						<span class="focus-input2"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input type="password" name="password" class="password" placeholder="Contraceña">
						<span class="focus-input2"></span>
					</div>

							<br/>
        				<br/>
        			<br/>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button type="submit" name="btnlogin" class="contact2-form-btn">
							 Iniciar sesión
               					
							</button>
							<div class="error"><span></span></div>
						</div>
					</div>
					 </form>

 							<br/>
        				<br/>
        			<br/>
       			<br/>
			<br/>
        <br/>
 	<br/>

					<span class="contact2-form-title">
						REGISTRAR
					</span>
				<form action="#" method="POST">
					<div class="wrap-input2 validate-input" data-validate="Name is required">
 					<input type="tect" name="username" class="username" placeholder="Nombre de usuario">
 						<span class="focus-input2" ></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
 					<input type="password" name="pass1" class="password" placeholder="Escribe tu contraceña">
 						<span class="focus-input2"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
 					<input type="password" name="pass2" class="password" placeholder="Confirmar contraceña">
 						<span class="focus-input2" ></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input type="email" name="correo" class="email" placeholder="Escribe tu email">
						<span class="focus-input2" ></span>
					</div>

					<div >
						  Genero: <input type="radio" name="genero" value="1">H
           				 <input type="radio" name="genero" value="2">M
					</div>
					
						<br/>
						<br/>
					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button type="submit" name="btnRegistrar" class="contact2-form-btn">
							 Registrar
               					
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
