<?php 
include ('pila.php');
session_start();

$elemento = $_GET['elemento'];

if(!isset($_SESSION['pila']))
{
    $_SESSION['pila'] = new Pila(5);
}
$_SESSION['pila']->insertar($elemento);


?>
Se inserto con exito
<meta http-equiv="refresh" content="7;url=menupila.html">