<?php


// INICIAR SECCION: Nos permite enviar informacion de un sitio a otro. cada veza que pongamos session_start();. y definiendo 4_SESSION[inombre cualquiera pero que identifique con la informacion que queremos enviar.]; 
// Queremos recuperar el dato que estaba en inde., el dato de $

// Si tengo un archivo donde parte de el es interesante, podemos usar seecion. 
session_start();

$dniusuario = $_SESSION['dni'];
$longitud = $_SESSION['longituddni'];
$letraOKEY = $_SESSION['letraOK'];

echo($dniusuario);
echo('<br>');
echo($longitud);
echo('<br>');
echo($letraOKEY);

?>