<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Vehiculo encontrado</h3>

<table border="2">
 <tr>
     <th>ID</th>
     <th>Matricula</th>
     <th>Año de salida</th>
     <th>Distintivo</th>
     <th>Id_categoria</th>
     <th>Estado vehiculo</th>
     <th>Id_marca</th>
 </tr>
<?php 
include_once 'conectar.php';
$id = $_POST['id'];

     $query = "SELECT * FROM vehiculo where id_vh='$id' ";
     $data = mysqli_query($mysqli, $query);
     $total = mysqli_num_rows($data);

     if($total!=0){
         while($row=mysqli_fetch_assoc($data)){
             
             echo "<tr> <td>" . $row['id_vh'] . "</td> <td>" . $row['matricula_vh'] .
              "</td> <td>" . $row['año_salida_vh'] . "</td> <td>" . $row['distintivo_vh'] . 
              "</td><td>" . $row['id_catg'] . "</td> </tr>". $row['estado_vh'] . "</td> </tr>". $row['id_marca'] . "</td> </tr>";
         }
     }

?>
 </table>
</body>
</html>
