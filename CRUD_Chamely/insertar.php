<?php

include_once 'conectar.php'; 

$matricula = $_POST['matricula']; // Nombre del campo en el formulario: "matricula"
$distintivo = $_POST['distintivo']; // Nombre del campo en el formulario: "distintivo"
$estado = $_POST['estado']; // Nombre del campo en el formulario: "estado"



$sqlinsert = "INSERT INTO vehiculo values(0,'$matricula',curdate(),'$distintivo',1,'$estado',1);";

mysqli_query($mysqli, $sqlinsert);
//echo $sqlinsert;

header("location:./index.php?insert=success");