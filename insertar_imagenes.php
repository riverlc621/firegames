<?php
	include("conexion.php");

	
	$nombre=$_POST["nombre"];

	$nombre_img=$_FILES['archivo']['name'];
	$tipo_img=$_FILES['archivo']['type'];
	$tam_img=$_FILES['archivo']['size'];
    

	if ($tam_img<=2000000)
{

	if ($tipo_img=="image/jpg" || $tipo_img=="image/jpeg" || $tipo_img=="image/png" || $tipo_img=="image/gif")
	{
			$carpeta=$_SERVER['DOCUMENT_ROOT'].'/login fin de año/proyecto/FIRE OF GAMES/login/archivos/';

			move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta.$nombre_img);
		
			mysqli_query($conexion,"insert into galeria(nombre,archivo) values ('$_POST[nombre]','$nombre_img')") or die("Problemas en el select".mysqli_error($conexion));

			 echo ("<script LANGUAGE='JavaScript'>
                   window.alert('Se Inserto la imagen Correctamente!!!');
                   window.location.href='seccion2-admin.html';
                   </script>");
  		

	}else

	        echo ("<script LANGUAGE='JavaScript'>
                   window.alert('Tipo de archivo incorrecto');
                   window.location.href='seccion2-admin.html';
                   </script>");
	
}else
     echo ("<script LANGUAGE='JavaScript'>
                   window.alert('EL tamaño excede el limite de 2 MB');
                   window.location.href='seccion2-admin.html';
                   </script>");
	
?>

</body>
</html>



