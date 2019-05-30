<?php

include_once('../models/Votante.php');
// INICIAR SECCION: Nos permite enviar informacion de un sitio a otro. cada veza que pongamos session_start();. y definiendo $_SESSION_SESSION[inombre cualquiera pero que identifique con la informacion que queremos enviar.]; 
// Queremos recuperar el dato que estaba en index., el dato de $

// Si tengo un archivo donde parte de el es interesante, podemos usar seecion. 

// Si no ceramos seccion, porque siempre va a coger los mismos datos.
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <section>

    <article>

    <?php
//     $dniregistro = fopen('registrodni.txt', 'w');
// $dni = $_GET['dni'];
// $horavoto = $_GET['horavoto'];

// fwrite($dniregistro, $dni . PHP_EOL);
// fwrite($dniregistro, $horavoto . PHP_EOL);

// while(!feof($dniregistro)){
   
//     $linea = fgets($dniregistro);
//     }

// fclose($dniregistro);


// $arraydni = file("registrodni.txt", FILE_IGNORE_NEW_LINES);

// echo('<pre>');
// print_r($arraydni);
// echo('</pre>');

// $i = 0;

// foreach($array AS $valor){

//     if($valor[$i]){

// $carnet1
//     }
// $i++;
// }



?>

    </article>
    </section>
</body>
</html>

<?php

// session_destroy();

?>