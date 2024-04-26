<?php

include_once 'conectar.php';
$id = $_POST['id'];

if(isset($_POST['update'])){

    $id = $_POST['id'];

    $query = "UPDATE vehiculo SET matricula_vh='{$matricula}', año_salida_vh='{$año_salida_vh}', distintivo_vh='{$distintivo}', id_catg='{$categoria}', estado_vh='{$estado}', id_marca='{$marca}' WHERE id_vh='{$_POST['id']}'";
    mysqli_query($mysqli, $query);
    
}


header("location: ./index.php?insert=success");

?>