<?php
include ("con_db.php");

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $query = "DELETE FROM sector where id_sector='$delete_id'";
    $data = mysqli_query($conex, $query);
   header('location:buscar.php');
}

?>