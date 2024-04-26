
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar noticia</title>
</head>

<body>

    <h3>Editar noticia</h3>
    <?php
    include_once 'conectar.php';
        $id = $_POST['id'];

             $sql = "SELECT * FROM noticias where id=$id;";

            $result = mysqli_query($mysqli, $sql);
            $resultCheck = mysqli_num_rows($result);
           // echo $resultCheck;
                if ($resultCheck > 0){
                    $row = mysqli_fetch_assoc($result);
                    $titulo=$row['titulo'];
                    $texto=$row['texto'];
                    $categoria=$row['categoria'];
    
                }
?>

    <form action="actualiza.php" method="POST">
        <input type="text" name="id" placeholder="ID" value="<?php echo $id?>">
        <br>
        <input type="text" name="titulo" placeholder="titulo" value="<?php echo $titulo?>">
        <br>
        <input type="text" name="texto" placeholder="texto" value="<?php echo $texto?>">
        <br>
        <input type="text" name="categoria" placeholder="categoria" value="<?php echo $categoria?>">
        <br>
        <button type="submit" name="update">Editar</button>
    </form>

   </body>

</html>
