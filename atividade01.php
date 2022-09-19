<?php 

$num1 = 8;
$num2 = 6;

$result = $num1 + $num2; 
$res1 = 0;

if ($result >= 20){
	$res1 = $result + 8;
	echo $res1;
}

else {
	$res1 = $result - 5;
	echo $res1;
}

//------------------------------------------------------------------//
$operador = 1;

if ($result >= 20){
	$operador = 1;
}
else {
	$operador = 2;
}
switch ($operador) {
	case '1':
		$resulta = somavalor ($result);
		$operacao = "Soma";
		break;
	case '2':
		$resulta = subvalor ($result);
		$operacao = "Subtração";
		break;

	default:
		echo "saindo...";
		break;
}

echo "\n Resultado da ".$operacao." é ".$resulta;

function somavalor($result){
	return ($result + 8);
}
function subvalor($result){
	return ($result - 5);
}


 ?>

