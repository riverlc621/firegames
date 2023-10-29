<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Imagenes </title>  
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
    <th> Id_imagen </th>
    <th> Nombre </th>
    <th> Foto </th>
    <th> Nombre_foto </th>
    <th colspan="2"> Descargar </th>
  </tr>
    <tbody>
      <?php 

           $registros = mysqli_query($conexion,"SELECT * FROM GAMES") or die("problemas en el select".mysqli_error($conexion));
           
           while ($row = mysqli_fetch_array($registros)){  ?>
          
           <tr>
                <td> <?php echo $row['id']?> </td>
               <td> <?php echo $row['nombre']?> </td>
               <td> <?php echo $row['icono']?> </td>
               <td> <?php echo $row['archivo']?></td>
              
               
          <td> 
            <a href="./archivos/<?php echo $row['archivo']?>"> descargar</a>
          </td>
                   
           </tr>
       <?php  } ?>

    </tbody>
</table>
<a href="seccion2-admin.html" class="button"> VOLVER  </a>
</button>
</center>
</body>
</html>
