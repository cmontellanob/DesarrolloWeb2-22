<?php include('verificar.php'); 
include('permiso.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="create.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" cols="10" rows="3"></textarea>
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="number" name="precio">
        </div>
        <div>
            <label for="stock">Categoria</label>
            <input type="string" name="categoria">
            <input type="submit" value="Enviar">
        </div>

    </form>
</body>

</html>