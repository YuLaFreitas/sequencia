<?php

if (isset($_POST['x']) && isset($_POST['y'])) {
    area();
  }
  
function area(){
 	$x = $_POST['x'];
 	$y = $_POST['y'];

    $resultado = $x * $x + (($x/2)-1);


	echo  $resultado;
}


?>