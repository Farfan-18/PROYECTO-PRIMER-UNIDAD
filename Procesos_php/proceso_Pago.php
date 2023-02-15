<?php
ini_set('display_errors', 0);//ayuda cuando el checkbox no esta marcado
$cont=0;
if($_POST['Acceder']){
	$xop1=$_POST['c_aire'];
	$xop2=$_POST['c_manteleria'];
	$xop3=$_POST['c_mobiliaria'];
	$xop4=$_POST['c_local'];
	if ($xop1=="on"){
		$cont=$cont+1;
	}
	if ($xop2=="on"){
		$cont=$cont+2;
	}
	if ($xop3=="on"){
		$cont=$cont+3;
	}
	if ($xop4=="on"&& $xop1==""&& $xop2==""&& $xop3==""){
		$cont=$cont+125;
	}
		echo $cont;
		header("Location:../t_pagar.php?cont=$cont&c1=$xop1&c2=$xop2&c3=$xop3&c4=$xop4");
}