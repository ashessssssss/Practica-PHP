<?php

include_once 'conectar.php';
$id = $_POST['id'];

if(isset($_POST['update'])){

    $id = $_POST['id'];

    $query = "UPDATE `noticias` SET titulo='$_POST[titulo]',texto='$_POST[texto]',categoria='$_POST[categoria]' where id='$_POST[id]'";
    mysqli_query($mysqli, $query); 
    
}


header("location: ./index.php?insert=success");

?>