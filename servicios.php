<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Servicios</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_cliente.css">
	<link rel="stylesheet" type="text/css" href="css/estilo_servicios.css">
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" media="only screen and (max-width: 768px)" href="estilos.css">

</head>
<body>
	<div class="contenido">
		<div class="fondo_servicio" style=" background-image: url('Imagenes/servicio_fondo1.jpg');">
			<div class="navegador">
				<header>
					<nav>
				        <ul>
						<li><a href="cliente.php?<?php
							if(isset($_GET['cont'],$_GET['c1'],$_GET['c2'],$_GET['c3'],$_GET['c4'],$_GET['c5'])){
								$cont=$_GET['cont'];
								$xop1=$_GET['c1'];
								$xop2=$_GET['c2'];
								$xop3=$_GET['c3'];
								$xop4=$_GET['c4'];
								$xop5=$_GET['c5'];
								echo "cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4&c5=$xop5";
							}
									?>">Inicio</a></li>
						<li><a href="servicios.php?<?php
							if(isset($_GET['cont'],$_GET['c1'],$_GET['c2'],$_GET['c3'],$_GET['c4'],$_GET['c5'])){
								$cont=$_GET['cont'];
								$xop1=$_GET['c1'];
								$xop2=$_GET['c2'];
								$xop3=$_GET['c3'];
								$xop4=$_GET['c4'];
								$xop5=$_GET['c5'];
								echo "cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4&c5=$xop5";
							}
									?>">servicios</a></li>
						<li><a href="t_pagar.php?<?php
								if(isset($_GET['cont'],$_GET['c1'],$_GET['c2'],$_GET['c3'],$_GET['c4'],$_GET['c5'])){
									$cont=$_GET['cont'];
									$xop1=$_GET['c1'];
									$xop2=$_GET['c2'];
									$xop3=$_GET['c3'];
									$xop4=$_GET['c4'];
									$xop5=$_GET['c5'];
									echo "cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4&c5=$xop5";
								}
							?>">Total a pagar</a></li>
							<li><a href="Procesos_php/proceso_cerrar_sesion.php">Cerrar sesion</a></li>	
						</li>
					 </ul>
				    </nav>	
				</header>
			</div>
			<div class="cont_productos">
				<div class="cont__producto1">
					<form method="POST" action="Procesos_php/proceso_Pago.php">						
						<div class="productos">
							<div class="cont_producto">
								<div class="cont_imagen">
									<!--imagen-->
									<img class="imagenes" src="Imagenes/img_aire.png">
								</div><br>
								<div class="cont_producto_">
									<label>$500</label><br>
									Aire acondicionado<input type="checkbox" name="c_aire" id="c_aire" <?php
										if(isset($_GET['c1'])){
											if ($_GET['c1']=="on") {										
												echo "checked='checked'";// code...
											}
										}
									?>>
								</div>
							</div>
							<div class="cont_producto">
								<div class="cont_imagen">
									<!--imagen-->
									<img class="imagenes" src="Imagenes/img_manteleria.jpg">
								</div><br>
								<div class="cont_producto_">
									<label>$450</label><br>
									Manteleria <input type="checkbox" name="c_manteleria" id="c_manteleria" <?php
										if(isset($_GET['c2'])){
											if ($_GET['c2']=="on") {										
												echo "checked='checked'";// code...
											}
										}
									?>>
								</div>
							</div>
							<div class="cont_producto">
								<div class="cont_imagen">
									<!--imagen-->
									<img class="imagenes" src="Imagenes/equipo_sonido.jpg">
								</div><br>
								<div class="cont_producto_">
									<label>$500</label><br>
									Equipo de sonido<input type="checkbox" name="c_sonido" id="c_sonido" <?php
										if(isset($_GET['c3'])){
											if ($_GET['c3']=="on") {										
												echo "checked='checked'";// code...
											}
										}
									?>>
								</div>
							</div>
							<div class="cont_producto">
								<div class="cont_imagen">
									<!--imagen-->
									<img class="imagenes" src="Imagenes/img_mobiliario.jpeg">
								</div><br>
								<div class="cont_producto_">
									<label>$1000</label><br>
									Mobiliario<input type="checkbox" name="c_mobiliaria" id="c_mobiliaria" <?php
										if(isset($_GET['c4'])){
											if ($_GET['c4']=="on") {										
												echo "checked='checked' ";// code...
											}
										}
									?>>
								</div>
							</div>
							<div class="cont_producto">
								<div class="cont_imagen">
									<!--imagen-->
									<img class="imagenes" src="Imagenes/img_salon.jpeg">
								</div><br>
								<div class="cont_producto_">
									<label>$3000</label><br>
									Rentar solo el salon<input type="checkbox" name="c_local" id="c_local" <?php
										if(isset($_GET['c5'])){
											if ($_GET['c5']=="on") {										
												echo "checked='checked'";// code...
											}								 
										}
									?>>
								</div>
							</div>
						</div>		
						<div class="contenido__boton">
							<input type="submit" name="Acceder" value="Total a Pagar">				
						</div>		
					</form>			
					<script>
						$(document).ready(function(){
							$("#c_mobiliaria").click(function(){
								if ($("#c_mobiliaria").prop('checked')==true) {
									$("#c_local").prop("disabled",true);
								}else if ($("#c_mobiliaria").prop('checked')==false&&$("#c_aire").prop('checked')==false&&$("#c_manteleria").prop('checked')==false) {
									$("#c_local").prop("disabled",false);	
								}
							});
							$("#c_aire").click(function(){
								if ($("#c_aire").prop('checked')==true) {
									$("#c_local").prop("disabled",true);
								}else if ($("#c_mobiliaria").prop('checked')==false&&$("#c_aire").prop('checked')==false&&$("#c_manteleria").prop('checked')==false) {
									$("#c_local").prop("disabled",false);	
								}
							});
							$("#c_manteleria").click(function(){
								if ($("#c_manteleria").prop('checked')==true) {
									$("#c_local").prop("disabled",true);
								}else if ($("#c_mobiliaria").prop('checked')==false&&$("#c_aire").prop('checked')==false&&$("#c_manteleria").prop('checked')==false) {
									$("#c_local").prop("disabled",false);	
								}
							});
							$("#c_sonido").click(function(){
								if ($("#c_sonido").prop('checked')==true) {
									$("#c_local").prop("disabled",true);
								}else if ($("#c_mobiliaria").prop('checked')==false&&$("#c_aire").prop('checked')==false&&$("#c_manteleria").prop('checked')==false&&$("#c_sonido").prop('checked')==false) {
									$("#c_local").prop("disabled",false);	
								}
							});
							$("#c_local").click(function(){
								if ($("#c_local").prop('checked')==true) {
									$("#c_manteleria").prop("disabled",true);
									$("#c_aire").prop("disabled",true);
									$("#c_sonido").prop("disabled",true);
									$("#c_mobiliaria").prop("disabled",true);
								}else if ($("#c_local").prop('checked')==false) {
									$("#c_manteleria").prop("disabled",false);	
									$("#c_aire").prop("disabled",false);	
									$("#c_sonido").prop("disabled",false);	
									$("#c_mobiliaria").prop("disabled",false);	
								}
							});
						});
					</script>
				</div>
			</div>
		</div>
	</div>		
	
</body>
</html>