<?php

include_once 'con_db.php';
$id = $_POST['id'];
if (isset($_POST['update'])) {
    $query = "UPDATE `sector` SET nombre='$_POST[nombre]',municipio='$_POST[municipio]'
    where id_sector=$id ";
    mysqli_query($conex, $query);
}

header("location: buscar.php?insert=success");

?>