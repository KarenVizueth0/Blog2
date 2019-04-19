<html>
<head>
	<title>Su reservacion fue confirmada</title>
</head>
<body>
<h1>Datos de Registro</h1>
Cantidad de personas; <?php echo $_POST['username'] ?><br/>
Fecha de reservacion; <?php echo $_POST['fecha'] ?><br/>
Hora de reservacion; <?php echo $_POST['hora'] ?><br/>
Tipo de mesa a reservar:; <?php echo $_POST['mesa'] ?><br/>

<br/>
<a href="index.php">Volver al formulario</a>	

</body>
</html>