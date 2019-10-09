<?php
require_once('Usuario.php');

$user1 = new Usuario('juan', 'juan@hotmail.com', 'qwerty');
$user2 = new Usuario('pepe', 'pepe@gmail.com', '12345');

var_dump($user1, $user2)

 ?>
