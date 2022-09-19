<?php 

$operador = 0;

$num1 = 27;

$div1 = $num1 % 2;
$div2 = $num1 % 5;
$div3 = $num1 % 10;

if ($div3 == 0){
    $operador = 3;
}else if ($div2 == 0){
    $operador = 2;
}elseif ($div1 == 0){
    $operador = 1;
}
else {
	$operador = 4;
}

switch ($operador){
    case '1':
        echo $num1." É divisível por 2";
        break;

    case '2':
        echo $num1." É divisível por 5";
        break;
    
    case '3':
        echo $num1." É divisível por 2 e por 10";
        break;

    default:
    echo $num1."  Não é divisível por nenhum destes";
    break;
}

 ?>

