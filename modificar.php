<!DOCTYPE html>
<?php

session_start();
if (!isset($_SESSION["contador"])){

  $_SESSION["contador"]=0;

}



if($_POST){

  if(isset($_POST["Incrementar"])){

    $_SESSION["contador"]++;
  }

  if(isset($_POST["Reiniciar"])){

    $_SESSION["contador"]=0;
  }


}

var_dump ($_SESSION);




?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="modificar.php" method="post">

      <input type="submit" name="Reiniciar" value="Reiniciar" class=""></input>

      <input type="submit"  name="Incrementar" value="Incrementar" class=""></input>

    </form>

  </body>
</html>
