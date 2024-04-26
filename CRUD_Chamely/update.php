<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vehiculo</title>
</head>

<body>

    <h3>Editar vehiculo</h3>
    <?php
    include_once 'conectar.php';
    $id = $_POST['id'];

    $sql = "SELECT * FROM vehiculo where id_vh=$id;";

    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);
    // echo $resultCheck;
    if ($resultCheck > 0) {
        $row = mysqli_fetch_assoc($result);
        $matricula = $row['matricula_vh'];
        $año_salida = $row['año_salida_vh'];
        $distintivo = $row['ditintivo_vh'];
        $categoria = $row['id_catg'];
        $estado = $row['estado_vh'];
        $marca = $row['id_marca'];

    }
    ?>

<form action="actualiza.php" method="POST">
    <input type="text" name="matricula" placeholder="Matrícula" value="<?php echo $matricula ?>">
    <br>
    <input type="date" name="año_salida" placeholder="Año de salida" value="<?php echo $año_salida ?>">
    <br>
    <input type="text" name="distintivo" placeholder="Distintivo" value="<?php echo $distintivo ?>">
    <br>
    <input type="text" name="categoria" placeholder="Categoría" value="<?php echo $categoria ?>">
    <br>
    <input type="text" name="estado" placeholder="Estado" value="<?php echo $estado ?>">
    <br>
    <input type="text" name="marca" placeholder="Marca" value="<?php echo $marca ?>">
    <br>
    <button type="submit" name="update">Editar</button>
</form>

</body>

</html>