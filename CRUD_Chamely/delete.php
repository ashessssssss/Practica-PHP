<?php

include_once 'conectar.php';

$id =$_GET['rn'];
$query = "DELETE FROM noticias WHERE id = '$id'";

$data=mysqli_query($mysqli, $query);
header("location: ./index.php?insert=success");
?>