<?php
// setcookie('name', 'value', time() +3600) ; tiempo en segundos
//nombre, valor(cadena), tiempovida
$value = $_COOKIE['count'];
$value++;

setcookie('count', $value);

echo "agregando $value a cookie";
?>