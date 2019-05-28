<?php

include_once('../models/Votante.php');
// INICIAR SECCION: Nos permite enviar informacion de un sitio a otro. cada veza que pongamos session_start();. y definiendo $_SESSION_SESSION[inombre cualquiera pero que identifique con la informacion que queremos enviar.]; 
// Queremos recuperar el dato que estaba en index., el dato de $

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

// SECCION DESTROY: Permite cerrar seccion.

// session_destroy();

// UNSET: Permite eliminar una variable

// EJM:

// unset $dniusuario = $_SESSION['dni'];

?>