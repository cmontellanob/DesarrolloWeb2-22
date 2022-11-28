<?php include('verificar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body><?php
        echo "bienvenido:".$_SESSION['nombres'];


        include("conexion.php");

        $sql = "SELECT id,nombre,descripcion,precio,categoria FROM productos";
        $resultado = $con->query($sql);
        $i=1;
        if ($resultado->num_rows > 0) {
        ?>
        <table>
            <tr>
            <th>Nro</th>    
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Acciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["nombre"]; ?></td>
                    <td><?php echo $row["descripcion"]; ?></td>
                    <td><?php echo $row["precio"]; ?></td>
                    <td><?php echo $row["categoria"]; ?></td>
                    <td>
                    <?php if ($_SESSION['nivel'] == 1) { ?>
                        <a href="formEditarProducto.php?id=<?php echo $row["id"]; ?>"><img src="images/editar.png" alt=""> Editar</a>
                        <a href="delete.php?id=<?php echo $row["id"]; ?>"><img src="images/eliminar.png" alt=""> Eliminar</a>
                    <?php } ?>    
                </tr>
            <?php  } ?>
        </table>
    <?php

        } else {
            echo "No tiene productos";
        }
    
    if ($_SESSION['nivel']==1) {?>
    <a href="formProducto.php">Crear Producto</a>
    <?php } ?>
</body>

</html>