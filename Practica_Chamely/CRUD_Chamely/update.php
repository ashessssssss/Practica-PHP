<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vehiculo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #8a2be2; /* Color morado */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        h3 {
            text-align: center;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form input[type="date"],
        form button[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form button[type="submit"] {
            background-color: #fff;
            color: #8a2be2; /* Color morado */
            cursor: pointer;
        }

        form button[type="submit"]:hover {
            background-color: #8a2be2; /* Color morado */
            color: #fff;
        }
    </style>
</head>

<body>

    <h3>Editar vehiculo</h3>
    <?php
include_once 'conectar.php';

// Cambia $id a $id_vh
$id_v = $_POST['id_vh'];

$sql = "SELECT * FROM vehiculo where id_vh=$id_v;";

$result = mysqli_query($mysqli, $sql);
$resultCheck = mysqli_num_rows($result);

$matricula = "";
$año_salida = "";
$distintivo = "";
$categoria = "";
$estado = "";
$marca = "";

// echo $resultCheck;
if ($resultCheck > 0) {
    $row = mysqli_fetch_assoc($result);
    $matricula = $row['matricula_vh'];
    $año_salida = $row['año_salida_vh'];
    $distintivo = $row['distintivo_vh'];
    $categoria = $row['id_catg'];
    $estado = $row['estado_vh'];
    $marca = $row['id_marca'];

}
?>


<form action="actualiza.php" method="POST">

<input type="hidden" name="id_vh" value="<?php echo $id_v ?>">

    Matricula:
    <br>
    <br>
    <input type="text" name="matricula" placeholder="Matrícula" value="<?php echo $matricula ?>">
    <br>
    <br>
    Año de salida:
    <br>
    <br>
    <input type="date" name="año_salida" placeholder="Año de salida" value="<?php echo $año_salida ?>">
    <br>
    <br>
    Distintivo:
    <br>
    <br>
    <input type="text" name="distintivo" placeholder="Distintivo" value="<?php echo $distintivo ?>">
    <br>
    <br>
    Categoría:
    <br>
    <br>
    <input type="text" name="categoria" placeholder="Categoría" value="<?php echo $categoria ?>">
    <br>
    <br>
    Estado:
    <br>
    <br>
    <input type="text" name="estado" placeholder="Estado" value="<?php echo $estado ?>">
    <br>
    <br>
    Marca:
    <br>
    <br>
    <input type="text" name="marca" placeholder="Marca" value="<?php echo $marca ?>">
    <br>
    <br>
    <button type="submit" name="update">Editar</button>
</form>

</body>

</html>
