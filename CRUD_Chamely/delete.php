<?php

include_once 'conectar.php';

$id =$_GET['rn'];
$query = "DELETE FROM vehiculo WHERE id_vh = '$id'";

$data=mysqli_query($mysqli, $query);
header("location: ./index.php?insert=success");
?>