<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Noticia encontrada</h3>

<table border="2">
 <tr>
     <th>ID</th>
     <th>Titulo</th>
     <th>Contenido</th>
     <th>categoria</th>
     <th>Fecha</th>
 </tr>
<?php 
include_once 'conectar.php';
$categoria = $_POST['id'];

     $query = "SELECT * FROM noticias where categoria='$categoria' ";
     $data = mysqli_query($mysqli, $query);
     $total = mysqli_num_rows($data);

     if($total!=0){
         while($row=mysqli_fetch_assoc($data)){
             
             echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['titulo'] .
              "</td> <td>" . $row['texto'] . "</td> <td>" . $row['categoria'] . 
              "</td><td>" . $row['fecha'] . "</td> </tr>";
         }
     }

?>
 </table>
</body>
</html>
