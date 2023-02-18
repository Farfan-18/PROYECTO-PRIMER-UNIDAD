<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menú</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_cliente.css">
</head>
<body>
	<div class="contenido">
		<div class="fondo" style=" background-image: url('Imagenes/salon_fondo.jpg');">
			<div class="navegador">
				<header>
					<nav>
				        <ul>
						<li><a href="cliente.php?<?php
										if(isset($_GET['cont'],$_GET['c1'],$_GET['c2'],$_GET['c3'],$_GET['c4'],$_GET['c5'],$_GET['c6'],$_GET['c7'],$_GET['c8'],$_GET['c9'],$_GET['c10'])){
								$cont=$_GET['cont'];
								$xop1=$_GET['c1'];
								$xop2=$_GET['c2'];
								$xop3=$_GET['c3'];
								$xop4=$_GET['c4'];
								$xop5=$_GET['c5'];
									$xop6=$_GET['c6'];
									$xop7=$_GET['c7'];
									$xop8=$_GET['c8'];
									$xop9=$_GET['c9'];
									$xop10=$_GET['c10'];
								echo "cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4&c5=$xop5&c6=$xop6&c7=$xop7&c8=$xop8&c9=$xop9&c10=$xop10";
							}
									?>">Inicio</a></li>
						<li><a href="servicios.php?<?php
										if(isset($_GET['cont'],$_GET['c1'],$_GET['c2'],$_GET['c3'],$_GET['c4'],$_GET['c5'],$_GET['c6'],$_GET['c7'],$_GET['c8'],$_GET['c9'],$_GET['c10'])){
								$cont=$_GET['cont'];
								$xop1=$_GET['c1'];
								$xop2=$_GET['c2'];
								$xop3=$_GET['c3'];
								$xop4=$_GET['c4'];
								$xop5=$_GET['c5'];
									$xop6=$_GET['c6'];
									$xop7=$_GET['c7'];
									$xop8=$_GET['c8'];
									$xop9=$_GET['c9'];
									$xop10=$_GET['c10'];
								echo "cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4&c5=$xop5&c6=$xop6&c7=$xop7&c8=$xop8&c9=$xop9&c10=$xop10";
							}
									?>">servicios</a></li>
						<li><a href="t_pagar.php?<?php
										if(isset($_GET['cont'],$_GET['c1'],$_GET['c2'],$_GET['c3'],$_GET['c4'],$_GET['c5'],$_GET['c6'],$_GET['c7'],$_GET['c8'],$_GET['c9'],$_GET['c10'])){
									$cont=$_GET['cont'];
									$xop1=$_GET['c1'];
									$xop2=$_GET['c2'];
									$xop3=$_GET['c3'];
									$xop4=$_GET['c4'];
									$xop5=$_GET['c5'];
									$xop6=$_GET['c6'];
									$xop7=$_GET['c7'];
									$xop8=$_GET['c8'];
									$xop9=$_GET['c9'];
									$xop10=$_GET['c10'];
									echo "cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4&c5=$xop5&c6=$xop6&c7=$xop7&c8=$xop8&c9=$xop9&c10=$xop10";
								}
									?>">Total a pagar</a></l>

						<li><a href="Procesos_php/proceso_cerrar_sesion.php">Cerrar sesion</a></li>
					 </ul>
				    </nav>	
				</header>
			</div>	
			<div>
				<h1 class="nom_empresa">BizBash</h1>
				<p class="parrafo">Bienvenido al mejor salon de fiestas ahora a tu alcance, contando con los servicios de aire acondicionad, manteleria, equipo de sonido y mobiliario.</p>	
			</div>
		</div>		
	</div>	
</body>
</html>