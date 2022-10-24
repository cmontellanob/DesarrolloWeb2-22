<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php $a=$_GET['a']; 
    $b=$_GET['b'];

    ?>
    <li><a href="resultado.php?a=<?php echo $a?>&b=<?php echo $b?>&operacion=sumar">Sumar</a></li>
    <li><a href="resultado.php?a=<?php echo $a?>&b=<?php echo $b?>&operacion=restar">Restar</a></li>



</body>
</html>