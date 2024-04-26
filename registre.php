<?php 
    include("con_db.php");

    if (isset($_POST['registra'])) {
    if (strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['municipio']) >= 1 )
    {
        
	    $nom = trim($_POST['nombre']);
	    $muni = trim($_POST['municipio']);
        

	    $consulta = "INSERT INTO `sector`(`id_sector`, `nombre`, `municipio`) VALUES ('0','$nom','$muni')";

	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>