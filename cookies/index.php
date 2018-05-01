<?php
// setcookie('name', 'value', time() +3600) ; tiempo en segundos
//nombre, valor(cadena), tiempovida

setcookie('count', '1', time()+3600);


echo 'Cookie value ' . $_COOKIE['count'];
?>