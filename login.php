<?php

$user_ingresado = ($_POST['user']);

$pass_ingresado = ($_POST['pass']);

$bbdd=[
  'user' =>'admin',
  'pass' =>'1234'
];


if ($bbdd['user'] == $user_ingresado AND $bbdd['pass'] == $pass_ingresado){
  print('Aceptado');
} else {
  print('Esta maaal');
}

 ?>
