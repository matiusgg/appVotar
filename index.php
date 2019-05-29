<?php

include_once('models/Seguridad.php');
// include_once('models/Votante.php');

if(isset($_POST['dni'])){
// Desglosa el DNI introducido, pero solamente es eso. NO estamos verficando si el dNI es correcto o no.
    $dnicompleto = $_POST['dni'];
    // STRLEN PERMITE SABER LA LONGITUD DE UN STRING
    $longituddni = strlen($dnicompleto); // Ejm: 43235366
    $numerosdni = substr($dnicompleto, 0, $longituddni-1); // Nos saca solo los numeros, edn donde '0' es la primera letra del string, es como si fuera un array, va por posiciones con 'substr'. ¡-1¡ nos permite restarle la ultimo caracter del string, que en este caso seria la letra. 43235366
    $letraDNI = substr($dnicompleto, $longituddni-1, 1); // nos permite ver la letra. en donde tiene lo mismo que el anterior pero sin el '0' para que nonos haga como si fuera un array. y le agregamos el '1' para decirle que solo nosmuestre el ultimo dato eliminado en este caso la letra. L


echo('<pre>');
print_r($dnicompleto);
echo('<br>');
// print_r($longituddni); // Te muestra el total de caracteres si le haces un print_r.
// echo('<br>');
print_r($numerosdni);
echo('<br>');
print_r($letraDNI);
echo('</pre>');

// echo($validarletra->letraDNI($numerosdni));

$letraOK = $validarletra->letraDNI($numerosdni);

echo('<br>');
print_r($letraOK);
echo('</pre>');

if($letraDNI == $letraOK){

    // INICIAR SECCION: Podemos iniciae

    // VARIABLES DE SESION
    // $_SESSION: Nos permite almacenar la informacion para despues abrir de nuevo $_SESSION en otro arhivo para enviar la informacion.
// Aqui lo que hacemos es abrir la seccion en la pagina para despues con la funcion session_start() que nos permite abrir seccion en ese nuevo archivo para poder compartir la informacion con $_SESSION en ese  otro archivo; abrimos $_SECCION con cualquier nombre pero identificativo y con '=' deifinimos el tipo de informacion que queremos enviar a otros archivos o sitios, ya sean variables, $POST, $_REQUEST
   // $_SESSION['nombre_de_usuario'] = 'Toni';

   // LAs variables de seccion.

   // Ejm:

   session_start();

   $_SESSION['dni'] = $dnicompleto;
   $_SESSION['longituddni'] = $longituddni;
   $_SESSION['letraOK'] = $letraOK;
//    var_dump($letraOK);
   

    header('Location: php/datosvotacion.php');
} else {
    echo('<br>');
    echo('ERROR, DNI INCORRECTO O NO ENCONTRADO');
}

// $carnets = [

//     $carnet1,
//     $carnet2,
//     $carnet3
// ];

}

// $validarletra->letraDNI($numerosdni); // POnemos $numeroDNI porque el metodo que nos saca la letra de un conjunto de numeros. Por lo cual precisamente esta variable consiste en numero del dni.

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <section>
    
<div>

<label for="dni">
Introduzca DNI
</label>

<input type="text" name="dni">

<button type="submit">
Enviar
</button>
</div>

    </section>



    </form>
</body>
</html>

