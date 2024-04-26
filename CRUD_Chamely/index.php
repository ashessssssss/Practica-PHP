<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de vehiculo</title>
</head>
<body>

<h1>Bienvenido</h1>
<form action="insertar.php" method="post">
       
      <input type="text" name="titulo" placeholder="titulo noticias">
       <br>
       Contenido de la noticia:
       <br>
       <textarea cols="50" row="16" name="texto"> </textarea>
       <br>
       categoria:
       <select name="categoria">
        <option value="Seleccione" selected>Seleccione la categoria:
        <option value="Ciencia y Naturaleza">Ciencia y Naturaleza
        <option value="Salud y Medicina" >Salud y Medicina
        <option value="Economía" >Economía
        <option value="Tecnología y Seguridad Digital">Tecnología y Seguridad Digital
        <option value="Sociedad y Cultura">Sociedad y Cultura
       </select>
       <br>
       <button type="submit" name="submit">Guardar</button>
   </form>

   <form action="consulta.php" method="post">
   <br>
   <input type="text" name="id" placeholder="categoria noticia a buscar">
    <br>
   <button type="submit" name="submit">Buscar</button>
   </form>

   <h3>Editar noticia</h3>

<form action="update.php" method="POST">
    <input type="text" name="id" placeholder="ID">
    <button type="submit" name="update">Editar</button>
</form>

<h3>Lista de noticias</h3>

<table border="2">
 <tr>
     <th>ID</th>
     <th>Nombre</th>
     <th>Direccion</th>
     <th>telefono</th>
     <th></th>
  
 <?php
 include_once 'conectar.php';
 $query = "SELECT * FROM noticias";
 $data = mysqli_query($mysqli, $query);
 $total = mysqli_num_rows($data);

 if($total!=0){
     while($row=mysqli_fetch_assoc($data)){
         
         echo "<tr> <td>" . $row['id'] . "</td> 
         <td>" . $row['titulo'] . "</td> 
         <td>" . $row['texto'] . "</td> 
         <td>" . $row['categoria'] . "</td> 
         <td> <a href='delete.php?rn=$row[id]'>Borrar</td> </tr>";;
     }
 }
 ?>
</table>


</body>
</html>