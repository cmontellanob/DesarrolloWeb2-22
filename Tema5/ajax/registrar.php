<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
echo "<ul>";
echo "<li>Nombre: $nombre </li>";
echo "<li>Email: $email</li>";
echo "<li>Mensaje: $mensaje</li>";
echo "</ul>";
echo $_FILES['archivo']['name'];
echo $_FILES['archivo']['type'];
echo $_FILES['archivo']['size'];


?>
