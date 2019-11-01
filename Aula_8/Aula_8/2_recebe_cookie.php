<?php


/* Para criar um cookie utlizamos a function setcookie(nome,valor, duracao)

  duracao é medida em segundos 
  1 minuto - 60 s
  1 hora  - 60 minutos - 3600 segundos
  1 dia - 24 horas - 1440 minutos - 86400 segundos

  time()+60

*/

setcookie("login", $_POST['login'], time()+60);
setcookie("senha", $_POST['senha'], time()+60);
echo "<pre>";
echo "POST:";
print_r($_POST);

echo "</pre>";


echo "<pre>";
echo "COOKIE:";
print_r($_COOKIE);
echo "</pre>";


