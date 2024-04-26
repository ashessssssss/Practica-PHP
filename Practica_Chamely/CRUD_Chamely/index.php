<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de vehículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        h1, h2, h3 {
            color: #6a0dad;
            text-align: center;
        }
        
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        form input[type="text"],
        form input[type="date"],
        form select,
        form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        form button {
            background-color: #6a0dad;
            color: #fff;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        
        form button:hover {
            background-color: #4b078d;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        
        table th {background-color: #6a0dad;
            color: #fff;
        }
        
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        table tr:hover {
            background-color: #ddd;
        }
        
        table td a {
            color: #6a0dad;
            text-decoration: none;
        }
        
        table td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Bienvenido</h1>
<br>
<h2>Formulario de ingreso de vehiculos</h2>
<form action="insertar.php" method="post">
    Matrícula:
    <br>
    <input type="text" name="matricula" placeholder="Matrícula">
    <br>
    <br>
    Año de salida:
    <br>
    <input type="date" name="año_salida">
    <br>
    <br>
    Distintivo:
    <br>
    <input type="text" name="distintivo" placeholder="Distintivo">
    <br>
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
    <br>
    Estado:
    <br>
    
    <select name="estado">
        <option value="Seleccione" selected>Seleccione estado
        <option value="Activo">Activo
        <option value="Inactivo">Inactivo   
</select> 
<br>
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
    <br>
    <button type="submit" name="submit">Guardar</button>
</form>

<h3>Editar vehículo</h3>
<form action="update.php" method="POST">
    <input type="text" name="id_vh" placeholder="ID">
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
         <td> <a href='delete.php?rn=$row[id_vh]'>Borrar</td> </tr>";
     }
 }
 ?>
</table>

</body>
</html>
