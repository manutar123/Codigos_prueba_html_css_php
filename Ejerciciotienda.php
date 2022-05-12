<!DOCTYPE html>
<html>
    <head>
        <title>mitiendaonline.com</title>
    </head>
    <body>
        <h1>Bienvenidos a la tienda OnLine</h1>
        <?php
            $compra=10;
            $falta=0;
            if($compra<=30){
                echo '<strong>Compra o te cobraremos abusivos 30 US del envío</strong>';
            }
            else if($compra>30 && $compra<90){
                    $falta=90-$compra;
                    echo 'Solo te faltan '.$falta.'US para que no pagues envío';
            }
            else{
                echo 'si, gasto de envío incluido';
            }
        ?>
    </body>
</html>