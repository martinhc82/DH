<?php
function triangulo(int $base,int $altura) {

  $superficie=($base*$altura)/2;
  return $superficie;

}
$sup=triangulo(5,10);

echo ("$sup <br>");

function rectangulo($base, $altura){
$superficie=($base*$altura);
return $superficie;

}

echo (rectangulo(5, 10));
?>
