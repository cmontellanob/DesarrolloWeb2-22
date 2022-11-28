<?php include('verificar.php'); 
include('permiso.php'); ?>


include("conexion.php");
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];

$sql="INSERT INTO productos (nombre,descripcion,precio,categoria) VALUES ('$nombre','$descripcion',$precio,'$categoria')";

if ($con->query($sql) === TRUE) {
    echo "Se creo un nuevo producto";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />