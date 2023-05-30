<?php
/**

*Clase que sirven para sumar restar multiplicar numeros

*@author Luke Anthony Underwood

*@version PHP 7.4.3

*@copyright este documento tiene derecho copyright

*@package ejemplo



*/





class Calculadora {
/**
*Este metodo devuelve la suma entre dos numeros
*sumar($num1, $num2) 
*@return $num1 + $num2
*@param $num1, $num2
*@version PHP 7.4.3

*/

  public static function sumar($num1, $num2) {
    return $num1 + $num2;
  }

/**
*Este metodo devuelve la resta entre dos numeros
*restar($num1, $num2) 
*@return $num1 - $num2
*@param $num1, $num2
*@version PHP 7.4.3

*/

  public static function restar($num1, $num2) {
    return $num1 - $num2;
  }

/**
*Este metodo devuelve la multiplicacion entre dos numeros
*multiplicar($num1, $num2) 
*@return $num1 * $num2
*@param $num1, $num2
*@version PHP 7.4.3

*/
  

public static function multiplicar($num1, $num2) {
    return $num1 * $num2;
  }

/**
*Este metodo devuelve la division entre dos numeros
*dividir($num1, $num2) 
*@return $num1 / $num2
*@param $num1, $num2
*@version PHP 7.4.3

*/
  

public static function dividir($num1, $num2) {
    if ($num2 == 0) {
      return "Error: No se puede dividir entre cero.";
    } else {
      return $num1 / $num2;
    }
  }
  
}

?>
