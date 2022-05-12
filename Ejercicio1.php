<!--En este código se va a calcular el número más cercano a cero de un arreglo de valores positivos  negativos-->
<!DOCTYPE html>
<head><title>Ejercicio1</title></head>
<!--Declaramos en DOCTYPE e iniciamos el codigo en php-->
<?php
// Declaramos el arreglo que queremos usar para el ejercicio
$ts=array(10,3,-2,-1,1);


/* Forma usual de tomar datos de un arreglo
echo 'el arreglo es '.$ts[0].','.$ts[1];*/
    function cercanoacero(array $ts)
    {
        $salida=0;// Declaramos la variable $salida= para usarla en los if
        if (empty($ts)){// Si el arreglo está vacio devuelve un cero
            return 0; }
            
            for($i=0;$i<=count($ts);$i++){// Para $i que va desde cero hasta el tamaño del arreglo
               if($salida==0){
                   $salida=$ts[$i];// si salida=0 entonces ponemos el primer dato del arreglo
               }
               else if (isset($ts[$i])> 0 && $ts[$i]<=abs($salida)){// el isset es para verificar que el valor si existe
                   $salida=$ts[$i];/* si el valor actual del arreglo es mayor a cero y menor al absoluto de salida entonces 
                                        salida es igual a valor actual del arreglo*/
               }
               elseif(isset($ts[$i])<0 && (-$ts[$i]<abs($salida))){/*si no si, el valor actual del arreglo es
                                                                    menor a cero y el negativo de este es menor
                                                                    al valor absoluto de salida*/   
                    $salida=$ts[$i];                                
               }
            }
           
             return $salida;// El valor a retornar de la funcion es salida o el menor valor
    }
    
        echo 'EL Número más cercano a cero es: ' .cercanoacero($ts);// usamos un echo para mostrar el valor más cercano a cero
   
   
?>

