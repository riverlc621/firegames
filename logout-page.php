<?php
session_start();
//destruir la sesion y redirigir al usuario
session_unset();
session_destroy();
header('location:formulario.html');
exit();
?>