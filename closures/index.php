<?php


$var2 = 3
$var = function(){
	echo "this is a closure";
};
$var1 = function() use ($var2){
	echo "$var2 es el valor de var2";
};

$var();
$var1();
?>