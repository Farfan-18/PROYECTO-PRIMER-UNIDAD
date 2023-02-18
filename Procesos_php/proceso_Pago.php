<?php
ini_set('display_errors', 0);//ayuda cuando el checkbox no esta marcado
$cont=0;
if($_POST['Acceder']){
	$xop1=$_POST['c_aire'];
	$xop2=$_POST['c_manteleria'];	
	$xop3=$_POST['c_sonido'];
	$xop4=$_POST['c_mobiliaria'];
	$xop5=$_POST['c_local'];
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
	if ($xop5=="on"&& $xop1==""&& $xop2==""&& $xop3==""&& $xop4==""){
		$cont=$cont+3000;
	}else{
		$cont=$cont+3000;
	}
	if ($xop5==""&& $xop1==""&& $xop2==""&& $xop3==""&& $xop4=="") {
							$cont=0;// code...
	}
		echo $cont;
		header("Location:../t_pagar.php?cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4&c5=$xop5");
}