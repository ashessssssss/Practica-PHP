<?php
include ("con_db.php");
    $id = $_POST['id_sector'];
    $sql = "SELECT * FROM `sector` where  id_sector=$id";
    $result = mysqli_query($conex, $sql);
    $re_check = mysqli_num_rows($result);

if ($re_check){
    $row = mysqli_fetch_assoc($result);
    $ids = $row["id_sector"];
    $nombre = $row['nombre'];
    $municipio = $row['municipio'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container sign-up-container">
      <form action="actualizar.php" method="post">
        <h1>Actualiza una sector</h1>
        <input type="text" placeholder="ID" name="id" value="<?php echo $id ?>">
        <input type="text" placeholder="nombre" name="nombre" value="<?php echo $nombre ?>">
        <input type="text" placeholder="municipio" name="municipio"value="<?php echo $municipio ?>">
        <button type="submit" name="update">Actualiza</button>
      </form>
    
    </div>
    
</body>
</html>