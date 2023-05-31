<?php

/**

*Funciones que sirven para sumar restar multiplicar numeros

*@author Luke Skywalker

*@version PHP 8.8.8

*@copyright este documento tiene derecho copyright


*@package ejemplo

*/

/**
*Esta funcion devuelve la suma entre dos numeros
*sumar($num1, $num2) 
*@return $num1 + $num2
*@param $num1, $num2
*@version PHP 7.4.3

*/
function sumar($num1, $num2) {
  return $num1 + $num2;
}

/**
*Esta funcion devuelve la resta entre dos numeros
*restar($num1, $num2) 
*@return $num1 - $num2
*@param $num1, $num2
*@version PHP 7.4.3

*/


function restar($num1, $num2) {
  return $num1 - $num2;
}

/**
*Esta funcion devuelve la multiplicacion entre dos numeros
*multiplicar($num1, $num2) 
*@return $num1 * $num2
*@param $num1, $num2
*@version PHP 7.4.3

*/



function multiplicar($num1, $num2) {
  return $num1 * $num2;
}



/**
*Esta funcion devuelve la division entre dos numeros
*dividir($num1, $num2) 
*@return $num1 / $num2
*@param $num1, $num2
*@version PHP 7.4.3

*/


function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}

?>
