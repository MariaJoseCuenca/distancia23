<?php
/**
* Documentación PHP de las funciones básicas matemáticas
* @author María José Cuenca
* @version 1.0.1
*/


/**
* La función realizará una operación de suma de dos valores.
* @param integer $num1 primer valor a sumar
* @param integer $num2 segundo valor a sumar
* @return integer resultado de la operación sumatoria
* @access public
* @author María José Cuenca
* @version 1.0.1
*/
function suma($num1, $num2)
{
	return $num1+$num2;
}

/**
* La función realizará una operación de resta  de dos valores siempre que
* ambos sean positivos.
* @param integer $num1 primer valor de la resta
* @param integer $num2 segundo valor de la resta
* @return integer resultado de la operación de resta si la operación
* se ha realizado correctamente.
* @access public
* @author María José Cuenca
* @version 1.0.1
*/

function resta($num1,$num2)
{
	if($num1<0 && $num2<2)
	{
		echo "Los valores tienen que ser positivos";
	} else {

		return $num1-$num2;
	}
}


/**
* La función realizará una operación de multiplicación de dos valores
* si son positivos.
* @param integer $num1 primer valor a multiplicar
* @param integer $num2 segundo valor a multiplicar
* @return integer resultado de la operación de multiplicar
* @access public
* @author María José Cuenca
* @version 1.0.1
*/

function  multiplicar($num1, $num2)
{
	if($num1<0 && $num2<2)
        {
               	echo "Los valores tienen que ser positivos";
	} else {

                return $num1*$num2;
        }

}


/**
* La función realizará una operación de división de dos valores si son 
* positivos.
* @param integer $num1 el primer valor es el dividenso
* @param integer $num2 el segundo valor es el divisor
* @return integer resultado de división, el resto
* @access public
* @author María José Cuenca
* @version 1.0.1
*/

function dividir($num1, $num2){

	if($num1<0 && $num2<2)
        {
                echo "Los valores tienen que ser positivos";
        } else  {

                return $num1/$num2;
        }

}
?>
