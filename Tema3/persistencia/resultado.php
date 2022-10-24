<?php
$a=$_GET['a'];
$b=$_GET['b'];
$operacion=$_GET['operacion'];

if($operacion=='sumar'){
    $resultado=$a+$b;
    echo "El resultado de la suma es: $resultado";
}
if($operacion=='restar'){
    $resultado=$a-$b;
    echo "El resultado de la resta es: $resultado";
}