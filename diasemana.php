<!DOCTYPE html>
<html>
    <head>
        <title>Dia de la semana</title>
        <!--En este pequeño programa se realiza la muestra de los días de la semana 
            en español usando una cadena en ingles como base                    -->
    </head>
    <body>
        <h1>Veamos los días de la semana en español<br/></h1>
        <?php
            $dia_ingles='SA';
        
            if($dia_ingles==='MO'){
                
                echo 'Hoy es: Lunes';
                
                }elseif($dia_ingles==='TU'){
                    echo 'Hoy es: Martes';
                }elseif($dia_ingles==='WE'){
                    echo 'Hoy es: Miercoles';// Dependiendo del valor de la cadena de le asigna una cadena al echo
                }elseif($dia_ingles==='TH'){
                    echo 'Hoy es: Jueves';
                }elseif($dia_ingles==='FR'){
                    echo 'Hoy es: Viernes';
                }elseif($dia_ingles==='SA'){
                    echo 'Hoy es: Fin de semana';
                }elseif($dia_ingles==='SU'){
                    echo 'Hoy es: Fin de semana';
                }
  
        ?>
    </body>
</html>