<?php

include_once 'conectar.php'; 

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$categoria = $_POST['categoria'];

$sqlinsert = "INSERT INTO noticias values(0,'$titulo','$texto','$categoria',curdate());";

mysqli_query($mysqli, $sqlinsert);
//echo $sqlinsert;

header("location:./index.php?insert=success");