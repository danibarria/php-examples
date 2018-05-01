<?php
// setcookie('name', 'value', time() +3600) ; tiempo en segundos
//nombre, valor(cadena), tiempovida

setcookie('count', null, -1);
echo 'Destruyendo cookie';
?>