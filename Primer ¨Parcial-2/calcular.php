<?php
$filas = $_COOKIE['filas'];
$columnas = $_COOKIE['columnas'];
$sumasfila = [];
$sumascolumna = [];
for ($i = 0; $i < $filas; $i++) {
    $sumascolumna[$i] =0;
}
for ($j = 0; $j < $columnas; $j++) {
    $sumasfila[$j] =0;
}

for ($i = 0; $i < $filas; $i++) {

    for ($j = 0; $j < $columnas; $j++) {
        $sumasfila[$j] += $_POST['matriz' . $i . '_' . $j];
        $sumascolumna[$i] += $_POST['matriz' . $i . '_' . $j];;
    }
} ?>
<h2>vector suma filas</h2>
<table border="1">
    <tr>
        <?php for ($i = 0; $i < $columnas; $i++) {
        ?>
            <td><?php echo $sumasfila[$i] ?> </td>
        <?php }

        ?>
    </tr>
</table>
<h2>vector suma columnas</h2>
<table border="1">

    <?php for ($j = 0; $j < $filas; $j++) {
    ?>
        <tr>
            <td><?php echo $sumascolumna[$j] ?> </td>
        </tr>
    <?php }

    ?>

</table>