<?php

include_once 'conectar.php'; 

$matricula = $_POST['matricula_vh'];
$año_salida = $_POST['año_salida_vh'];
$distintivo = $_POST['ditintivo_vh'];
$categoria = $_POST['id_catg'];
$estado = $_POST['estado_vh'];
$marca = $_POST['id_marca'];

$sqlinsert = "INSERT INTO noticias values(0,'$matricula','$año_salida_vh','$distintivo','$categoria','$estado','$marca');";

mysqli_query($mysqli, $sqlinsert);
//echo $sqlinsert;

header("location:./index.php?insert=success");