<?php
/*
$res = 0;
   for ($i=0; $i <11 ; $i++) {
$res = $i * 2;
echo "$res  <br>";

   }
 ?>

 <?php
 $a = 100;
 while ($a >= 85) {
   echo "$a <br>";
   $a--;
 }
  ?>

  <?php
  $contador = 1;
  while ($contador <= 5) {
    $doble = $contador * 2;
    echo "El doble de $contador es: $doble <br>";
    $contador++;
  }


   ?>
   <?php
   $cara = 0;
   $tiros = 0;
   while($cara <= 5){
     $tiros++;
     if (rand(0,1) == 1){
       $cara++;
      }
   }
   echo "$tiros <br>";


    ?>

<?php
$nombres = ["Juan", "Lucas","Jorge","Mariana","Maria"];

foreach ($nombres as $key => $value) {
  echo "$value <br>";
}

 ?>

 <?php
$nros = [];
for ($i=0; $i < 10 ; $i++) {
  $nros[$i] = rand(0,10);
}
foreach ($nros as $key => $value) {
  echo "$value <br>";
  if ($value == 5) {
    echo "Se encontro un 5!";
    break;
  }
}
*/
  ?>

  <?php
  $ceu = [

        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
        "Francia" => ["Paris", "Nantes", "Lyon"],
        "Italia" => ["Roma", "Milan", "Venecia"],
        "Alemania" => ["Munich", "Berlin", "Frankfurt"]
      ];

      foreach ($ceu as $pais => $ciudades) {
        echo "Las ciudades de $pais son:<br>";
        echo '<ul>';
        foreach ($ciudades as $ciudad) {
          echo "<li>$ciudad <br></li>";

        }
        echo '</ul>';
      }
   ?>
