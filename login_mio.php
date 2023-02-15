<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="icono"  href="Imagenes/icono.ico">
	<link rel="stylesheet" type="text/css" href="css/estilo_login_mio.css">
</head>
<body>
	<div class="contenido">
		<div class="cont__login">
		 <h1>Iniciar sesión:</h1>
		 <div class="div1__imagen">
		 <img src="Imagenes/Usuario.png">
		 </div>	
			<form action="Procesos_php/procesar.php" method="POST"><!--Procesar sirve para el analisis de los datos-->
				<div class="div1__campos">
					<label for="nickname">Usuario:</label>
					<input class="txt_field" type="text" name="nickname" required="">
				</div>
				<br>
				<div class="div1__campos">
					<label for="password">Contraseña:</label>
					<input class="txt_field" type="password" name="password" required="">
				</div>
				<br>
				<div class="div1__boton">
					<input type="submit" name="Acceder">				
				</div>
			</form>			
		</div>
	</div>
</body>
</html>