<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pago</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_cliente.css">
	<link rel="stylesheet" type="text/css" href="css/estilo_pagar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="estilos.css">

</head>

<body>
	<div class="contenido">	
		<div class="fondo_servicio" style="background-image: url('Imagenes/servicio_fondo1.jpg');" >
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
						<li><a href="servicios.php?
							<?php
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
							?>">Total a pagar</a></li>

							<li><a href="Procesos_php/proceso_cerrar_sesion.php">Cerrar sesion</a></li>	
					 </ul>
				    </nav>	
				</header>	
			</div>
			<div class="cont_list">
				<label class="label" >Producto/s:<br></label>
				<?php
					if(isset($_GET['c1'])){
						$res="";
						if ($cont=$_GET['c1']=="on") {
							$res.="->Aire acondicionado";// code...
						}if ($cont=$_GET['c2']=="on") {
							$res.="<br>->Manteleria";// code...
						}if ($cont=$_GET['c3']=="on") {
							$res.="<br>->Equipo de sonido";// code...
						}if ($cont=$_GET['c4']=="on") {
							$res.="<br>->Mobiliario";// code...
						}if ($cont=$_GET['c6']=="on") {
							$res.="<br>->Manteles mesas";// code...
						}if ($cont=$_GET['c7']=="on") {
							$res.="<br>->Fundas sillas";// code...
						}if ($cont=$_GET['c8']=="on") {
							$res.="<br>->Moños";// code...
						}if ($cont=$_GET['c9']=="on") {
							$res.="<br>->Sillas";// code...
						}if ($cont=$_GET['c10']=="on") {
							$res.="<br>->Mesas";// code...
						}if ($cont=$_GET['c5']=="on") {
							$res.="->Rentar solo el salon";// code...
						}if ($cont=$_GET['c5']==""&&$cont=$_GET['c4']==""&&$cont=$_GET['c3']==""&&$cont=$_GET['c2']==""&&$cont=$_GET['c1']==""&&$cont=$_GET['c6']==""&&$cont=$_GET['c7']==""&&$cont=$_GET['c8']==""&&$cont=$_GET['c9']==""&&$cont=$_GET['c10']=="") {
							$res.="->No has seleccionado algun servicio";// code...
						}

						echo "<font color='white'  font-size=100% >",$res,"</font>";
					}
				?>
			</div>
			<div class="cont_label">
			<br><br>
			<label class="label" >TOTAL A PAGAR: $</label>
			<?php
				if(isset($_GET['cont'])){
					$cont=$_GET['cont'];
					echo "<font color='white' size=140% >",$cont,"</font>";
				}else{
					echo "<font color='white' size=140% >0</font>";
				}
			?>
			</div>
			<div class="cont_boton">
				<button id="btn-abrir-popup" class="btn-abrir-popup">Finalizar Renta</button>
			</div>
			<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>PROCESO FINALIZADO</h3>
				<h4>Gracias por confiar en BizBash</h4>
				
			</div>
		</div>	
		</div>			
	</div>

	<script src="popup.js"></script>
</body>
</html>