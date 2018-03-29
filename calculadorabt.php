<?php
	$n1 = isset($_POST["numero1"])?$_POST["numero1"]:"";
	$n2 = isset($_POST["numero2"])?$_POST["numero2"]:"";
	$sm = isset($_POST["Somar"])?$_POST["Somar"]:"";
	$sb = isset($_POST["Subtrair"])?$_POST["Subtrair"]:"";
	$mlt = isset($_POST["Multiplicar"])?$_POST["Multiplicar"]:"";
	$dv = isset($_POST["Dividir"])?$_POST["Dividir"]:"";
	
	
	function validar($n1,$n2){
		return is_numeric($n1) && is_numeric($n2);
	}
	function sm($n1,$n2){
		$result = $n1 + $n2;
		echo "Resultado: $result";
	}
	function sb($n1,$n2){
		$result = $n1 - $n2;
		echo "Resultado: $result";
	}
	function mlt($n1,$n2){
		$result = $n1 * $n2;
		echo "Resultado: $result";
	}
	function dv($n1,$n2){
		$result = $n1 / $n2;
		echo "Resultado: $result";
	}
	if ($sm){
		if(validar($n1,$n2)){
			sm($n1,$n2);		
	}else{
		echo "numero não é valido";
	}
	}
	if ($sb){
		if(validar($n1,$n2)){
			sb($n1,$n2);		
	}else{
		echo "numero não é valido";
	}
	}
	if ($mlt){
		if(validar($n1,$n2)){
			mlt($n1,$n2);		
	}else{
		echo "numero não é valido";
	}
	}
	if ($dv){
		if(validar($n1,$n2)){
			dv($n1,$n2);		
	}else{
		echo"numero não é valido";
	}
	}
 ?>