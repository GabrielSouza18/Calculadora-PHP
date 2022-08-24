<?php

$resultado = $_POST['calculo'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];
//

switch($resultado){
    case 'Somar': echo "O resultado da conta é " .$resultado = $num1 + $num2; break;
    case 'Subtrair': echo "O resultado da conta é " .$resultado = $num1 - $num2; break;
    case 'Dividir': echo "O resultado da conta é " .$resultado = $num1 / $num2; break;
    case 'Multiplicar': echo "O resultado da conta é " .$resultado = $num1 * $num2; break;
     
}

