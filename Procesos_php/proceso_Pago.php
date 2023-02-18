<?php
ini_set('display_errors', 0);//ayuda cuando el checkbox no esta marcado
$cont=0;
if($_POST['Acceder']){
	$xop1=$_POST['c_aire'];
	$xop2=$_POST['c_manteleria'];	
	$xop3=$_POST['c_sonido'];
	$xop4=$_POST['c_mobiliaria'];
	$xop5=$_POST['c_local'];
	$xop6=$_POST['c_mesas_m'];
	$xop7=$_POST['c_sillas_m'];
	$xop8=$_POST['c_moños_m'];
	$xop9=$_POST['c_sillas'];
	$xop10=$_POST['c_mesas'];
	$cant_sillas=$_POST['cant_sillas'];
	$cant_mesas=$_POST['cant_mesas'];
	if ($xop1=="on"){
		$cont=$cont+500;
	}
	if ($xop2=="on"){
		$cont=$cont+450;
	}
	if ($xop3=="on"){
		$cont=$cont+500;
	}
	if ($xop4=="on"){
		$cont=$cont+1000;
	}
	if ($xop6=="on"){
		$cont=$cont+225;
	}
	if ($xop7=="on"){
		$cont=$cont+125;
	}
	if ($xop8=="on"){
		$cont=$cont+100;
	}
	if ($xop9=="on"){
		$cont=$cont+(10*(int)$cant_sillas);
	}
	if ($xop10=="on"){
		$cont=$cont+(25*(int)$cant_mesas);
	}
	if ($xop5=="on"&& $xop1==""&& $xop2==""&& $xop3==""&& $xop4==""&& $xop6==""&& $xop7==""&& $xop8==""&& $xop9==""&& $xop10==""){
		$cont=$cont+3000;
	}else{
		$cont=$cont+3000;
	}
	if ($xop5==""&& $xop1==""&& $xop2==""&& $xop3==""&& $xop4==""&& $xop6==""&& $xop5==""&& $xop4==""&& $xop9==""&& $xop10=="") {
							$cont=0;// code...
	}

		echo $cont;
		header("Location:../t_pagar.php?cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4&c5=$xop5&c6=$xop6&c7=$xop7&c8=$xop8&c9=$xop9&c10=$xop10");
}