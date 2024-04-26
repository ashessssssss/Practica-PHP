<?php

include_once 'conectar.php';
$id_vh = $_POST['id_vh'];

if(isset($_POST['update'])){

    $id_vh = $_POST['id_vh'];

    $query = "UPDATE vehiculo SET matricula_vh= '$_POST[matricula]', año_salida_vh='$_POST[año_salida]', distintivo_vh='$_POST[distintivo]', id_catg='$_POST[categoria]', estado_vh='$_POST[estado]', id_marca='$_POST[marca]' WHERE id_vh='$_POST[id_vh]'";
    mysqli_query($mysqli, $query);
    
}


header("location: ./index.php?insert=success");

?>