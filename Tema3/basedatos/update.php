<?php include('verificar.php'); 
include('permiso.php'); ?>


include("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];

$sql="UPDATE productos SET nombre='$nombre',descripcion='$descripcion',precio=$precio,categoria='$categoria' WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "Se actualizo el producto";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3; url=read.php" />