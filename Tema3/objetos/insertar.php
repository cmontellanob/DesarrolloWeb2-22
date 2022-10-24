<?php
include ('pila.php');
$elemento = $_GET['elemento'];

$pila = new Pila(5);
$pila->insertar($elemento);
$pila->mostrar();

?>
Se inserto con exito
<meta http-equiv="refresh" content="7;url=menupila.html">