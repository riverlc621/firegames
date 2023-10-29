<?php 
//este codigo permite validar el ingreso del login a una plataforma 

include "conexion.php";

$usuario= $_POST['usuario'];
$pass= $_POST['pass'];



session_start();
$_SESSION['usuario']= $usuario;


$consulta= "SELECT * FROM usuarios WHERE usuario = '$usuario' and pass = '$pass' ";

$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_num_rows($resultado);


if ($fila > 0 ){
    header('location:http://localhost/login%20fin%20de%20a%c3%b1o/proyecto/FIRE%20OF%20GAMES/login/pag_user.php');

}else{
    echo "problemas para iniciar sesion";
}


?>