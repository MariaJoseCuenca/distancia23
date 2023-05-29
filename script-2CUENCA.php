<?php

/**
* Creamos una clase para calcular el precio de la bebida o el snack del desayuno
* @author María José Cuenca Montilla
* @version 1.0.2
*/


class calcularPrecio{

/**
* La función precio bebida calcula el importe de la bebida consumida 
* @param string $bebida cadena de texto que corresponde al tipo de bebida
* consumida
* @param integer $cantidad total de productos consumidos
* @return string valor del ticket
* @access public
* @author María José Cuenca
* @version 1.0.3
*/

public function precioBebida ($bebida, $cantidad)
{
	$valor = 0;

	if($cantidad >0) 
        {
                if($bebida == "cafe") 
                {
                        $valor =  $cantidad * 2;
                } else if ($bebida == "chocolate")
                {
                        $valor = $cantidad * 3;
                 } else {
                        $valor = $cantidad * 2.5;
                }

                return "El valor de la bebida es ".$valor." €";
        } else {
                return "Tiene que indicar una cantidad superior a 0.";
        }
}


/**
* La función precio snack calcula el importe del snack consumio 
* @param string $snack cadena de texto que corresponde al snack consumido
* @param integer $cantidad total de productos consumidos
* @return string valor del ticket
* @access public
* @author María José Cuenca
* @version 1.0.3
*/

public static function precioSnack ($snack, $cantidad)
{

$valor = 0;
	if($cantidad >0)
	{
        	if($snack == "croissant") 
        	{
                	$valor =  $cantidad * 2.5;
       		} else if ($snack == "sandwich")
        	{
               		$valor = $cantidad * 3;
       		 } else {
 
                	$valor = $cantidad * 4;
        	}

        	return "El valor del snack es ".$valor." €";
	} else {
		return "Tiene que indicar una cantidad superior a 0.";
	}

}

}
?>
