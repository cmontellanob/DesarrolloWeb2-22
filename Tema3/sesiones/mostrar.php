<?php 
include('pila.php');
session_start();
if(!isset($_SESSION['pila']))
{
    echo "No hay pila";
}
else{
    $_SESSION['pila']->mostrar();
}

?>

<meta http-equiv="refresh" content="7;url=menupila.html">