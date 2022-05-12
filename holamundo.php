<h1>Punto uno<br/></h1>
<?php
echo 'mostrando numeros del 1 al 10 <br/>';
$i=1;
for($i=1;$i<=10;$i++){
    if($i<10){
    echo $i .'-';
    }else{
        echo $i.'';
    }
      
  
}
echo '<br> Final no va más';


?>
<!DOCTYPE html>
<head>
    <title>
        Pagina de prueba
    </title>
    <h1>Punto dos</h1>
    <p>En este parrafo vamos a ver que pedo <br/></p>
</head>

<html>
    <h1>Punto tres</h1>
<body>
    
    <img src="Imagen/ManuelT02.jpg">
    
  <h1>Punto cuatro</h1>
  <select>
      <?php
      for($n=1;$n<=10;$n++){
            echo '<option value="">'.$n.'</option>';
      }
      ?>
  </select>
  <h1>punto cinco</h1>
  <?php
  echo '<td><Strong>TABLAS DE MULTIPLICAR</Strong></td>';
  echo '<table border =1>';
  echo '<tr/>';
  
  for ($a=1;$a<=10;$a++){
      echo '<tr>';
      echo '<td>';
      echo $a;
      echo '</td>';   
  
for($b=2;$b<=10;$b++){
   echo '<td>';
    echo $a*$b;
    echo '</td>';
}
echo '</tr>';
  }
  echo '</table>'
  ?>
</body>

</html>