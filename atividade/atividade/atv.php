<?php

$entrada = $_POST;
$resultado = array();


function Delta($valor1,$valor2,$valor3){
	$resultadododelta = $valor2**2 - 4 * $valor1 * $valor3;
	return $resultadododelta;
}

$resultadododelta = Delta($entrada["valora"], $entrada["valorb"],
$entrada["valorc"]);


function x1($valor1,$valor2,$resultadododelta){
    $raiz = sqrt($resultadododelta);
    $respostax1 = (-$valor2 + $raiz) / (2*$valor1);
    return $respostax1;
}

function x2($valor1,$valor2,$resultadododelta){
    $raiz = sqrt($resultadododelta);
    $respostax2 = (-$valor2 - $raiz) / (2*$valor1);
    return $respostax2;
}




$resultado["Delta"] = Delta($entrada["valora"], 
							 $entrada["valorb"], 
							 $entrada["valorc"]); 

$resultado["x1"] = x1($entrada["valora"],
	   				   $entrada["valorb"],
	   				   $resultadododelta);


$resultado["x2"] = x2($entrada["valora"],
	   				   $entrada["valorb"],
	   				   $resultadododelta);


echo "<pre>";
var_dump($resultado);


?>