<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menú</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_cliente.css">
</head>
<body>
	<header>
	<nav>
        <ul>
		<li><a href="cliente.php?<?php
						if(isset($_GET['cont'],$_GET['c1'],$_GET['c2'],$_GET['c3'],$_GET['c4'])){
							$cont=$_GET['cont'];
							$xop1=$_GET['c1'];
							$xop2=$_GET['c2'];
							$xop3=$_GET['c3'];
							$xop4=$_GET['c4'];
							echo "cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4";
						}
					?>">Inicio</a></li>
		<li><a href="servicios.php?<?php
						if(isset($_GET['cont'],$_GET['c1'],$_GET['c2'],$_GET['c3'],$_GET['c4'])){
							$cont=$_GET['cont'];
							$xop1=$_GET['c1'];
							$xop2=$_GET['c2'];
							$xop3=$_GET['c3'];
							$xop4=$_GET['c4'];
							echo "cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4";
						}
					?>">servicios</a></li>
		<li><a href="t_pagar.php?<?php
						if(isset($_GET['cont'],$_GET['c1'],$_GET['c2'],$_GET['c3'],$_GET['c4'])){
							$cont=$_GET['cont'];
							$xop1=$_GET['c1'];
							$xop2=$_GET['c2'];
							$xop3=$_GET['c3'];
							$xop4=$_GET['c4'];
							echo "cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4";
						}
					?>">Total a pagar</a></l>

		<li><a href="Procesos_php/proceso_cerrar_sesion.php">Salir</a></li>
	 </ul>
    </nav>	
	</header>	
	<div class="cont_fondo">
		<img class="fondo" id="img" src="Imagenes/salon_fondo.jpg">
	</div>
</body>
</html>