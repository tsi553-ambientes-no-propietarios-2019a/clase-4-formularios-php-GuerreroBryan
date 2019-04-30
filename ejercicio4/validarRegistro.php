<?php
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];
switch (true) {
    case $clave1 == $clave2:
        header('location: RegistroCorrecto.php');
        break;
    
    default:
    echo"<script type=\"text/javascript\">alert('Usted esta siendo redireccionado a la pagina principal, introdujo mal las contraseñas'); window.location='index.php';</script>"; 
        break;
}
?>