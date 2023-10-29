<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Archivos </title>
  <link rel="stylesheet" href="./css/listar.css">
</head>
<body>

<?php 

include "conexion.php";

?>
<center>
<h1> LISTA DE ARCHIVOS </h1>

<table border="1">
  <tr>
    <th> Codigo Imagen </th>
    <th> Nombre Imagen </th>
    <th> Archivo </th>
     <th> Imagen </th>
    <th colspan="2">Descargar </th>
  </tr>
    <tbody>
      <?php 

           $registros = mysqli_query($conexion,"SELECT * FROM galeria") or die("problemas en el select".mysqli_error($conexion));
           
           while ($row = mysqli_fetch_array($registros)){  ?>
          
           <tr>
                <td> <center><?php echo $row['id']?></center></td>
                <td> <center><?php echo $row['nombre']?></center></td>
                <td> <center><?php echo $row['archivo']?></center></td>
                <td><img width="40" src="./archivos/<?php echo $row['archivo']; ?>"></td>
              <td> 
            <a download href="./archivos/?php echo $row['archivo']?>">DESCARGAR</a>
          </td>
       </tr>
  


       <?php  } ?>

    </tbody>



</table>
<br>
<a href="seccion2-admin.html" class="button"> VOLVER  </a>
  </center>
</body>
</html>
