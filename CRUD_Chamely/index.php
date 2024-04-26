<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de vehículo</title>
</head>
<body>

<h1>Bienvenido</h1>
<form action="insertar.php" method="post">
    Matrícula:
    <br>
    <input type="text" name="matricula" placeholder="Matrícula">
    <br>
    Año de salida:
    <br>
    <input type="date" name="año_salida">
    <br>
    Distintivo:
    <br>
    <input type="text" name="distintivo" placeholder="Distintivo">
    <br>
    Categoría:
    <select name="categoria">
        <option value="Seleccione" selected>Seleccione la categoría:</option>
        <option value="1">Sedán</option>
        <option value="2">vehículo Eléctrico</option>
        <option value="3">SUV</option>
        <option value="4">Hatcback</option>
        <option value="5">Furguneta</option>
        
    </select>
    <br>
    Estado:
    <br>
    <select name="estado">
        <option value="Seleccione" selected>
        <option value="Activo">Activo
        <option value="Inactivo">Inactivo    
    <br>
    Marca:
    <select name="marca">
        <option value="Seleccione" selected>Seleccione la marca:</option>
        <option value="1">Toyota</option>
        <option value="2">Honda</option>
        <option value="3">Ford</option>
        <option value="4">Volkswagen</option>
        <option value="5">Chevrolet</option>
    </select>
    <br>
    <button type="submit" name="submit">Guardar</button>
</form>

<h3>Editar vehículo</h3>
<form action="update.php" method="POST">
    <input type="text" name="id" placeholder="ID">
    <button type="submit" name="update">Editar</button>
</form>

<h3>Lista de vehículos</h3>

<table border="2">
 <tr>
     <th>ID</th>
     <th>Matrícula</th>
     <th>Año de salida</th>
     <th>Distintivo</th>
     <th>Categoría</th>
     <th>Estado</th>
     <th>Marca</th>
     <th></th>
  
 <?php
 include_once 'conectar.php';
 $query = "SELECT * FROM vehiculo";
 $data = mysqli_query($mysqli, $query);
 $total = mysqli_num_rows($data);

 if($total!=0){
     while($row=mysqli_fetch_assoc($data)){
         echo "<tr> <td>" . $row['id_vh'] . "</td> 
         <td>" . $row['matricula_vh'] . "</td> 
         <td>" . $row['año_salida_vh'] . "</td> 
         <td>" . $row['distintivo_vh'] . "</td> 
         <td>" . $row['id_catg'] . "</td> 
         <td>" . $row['estado_vh'] . "</td> 
         <td>" . $row['id_marca'] . "</td> 
         <td> <a href='delete.php?rn=$row[id]'>Borrar</td> </tr>";
     }
 }
 ?>
</table>

</body>
</html>
