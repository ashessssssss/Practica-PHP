<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Agregar Sector</h2>
    <form method="post">
        <label for="nombre_sector">Nombre del Sector:</label><br>
        <input type="text" id="nombre_sector" name="nombre"><br><br>
        
        <label for="municipio">Municipio:</label><br>
        <input type="text" id="municipio" name="municipio"><br><br>
        
        <input type="submit" value="Agregar Sector" name="registra">
</form>
        <form action="update.php" method="POST">
        <input type="text" name="id_sector" placeholder="ID">
        <button type="submit" name="update">Editar</button>
 
      </form>
      <button><a href="buscar.php">Lista sectors</a></button>
    <?php
    include ("registre.php");
    ?>
</body>
</html>