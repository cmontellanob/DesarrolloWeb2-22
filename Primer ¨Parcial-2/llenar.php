<?php
$filas=$_GET['filas'];
$columnas=$_GET['columnas'];
?>
<form action="calcular.php" method="post">
<?php  setcookie("filas",$filas,time()+3600);
setcookie("columnas",$columnas,time()+3600);
?>
<table>
  <?php 
  for ($i=0;$i<$filas;$i++){
    echo "<tr>";
    for ($j=0;$j<$columnas;$j++)
    { ?>
      <td><input type="number" name="matriz<?php echo $i.'_'.$j ?>">  </td>
   <?php }
    echo "</tr>";
  }

  ?>
   
</table>
<input type="submit" value="calcular">
</form>