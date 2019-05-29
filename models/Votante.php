<?php


// // class Votante implements ValidacionVoto{
// class Votante {

// private $dni;
// private $nombre;
// private $caducidad;
// private $calle;
// private $localizacion;
// private $fechanacimiento;

// // METODOS

// public function setDatos($datos, $contenido){

//     $this->$datos = true;

//     if(($this->$datos == $this->dni){
// echo('DNI: ' . $contenido);
//     }
//     }
// }



// $pepe = new Votante();
// $pepe-> setDatos('dni', '24345535L');

// echo('<pre>');
// print_r($pepe);
// echo('</pre>');

// $alberto = new Votante();
// $alberto-> setDatos('dni', '32435243L');

// echo('<pre>');
// print_r($pepe);
// echo('</pre>');



 // *************************************
// *************************************
// *************************************
// *************************************
// *************************************

// METODOS QUE HIZO EL PROFESOR

// CLASS CARNET. CARNET SERIA lo que necesitamos para el archivo datosvotacion.php

class Carnet {

    // PROPIEDADES

    private $dni;
    private $nombre;
    private $direccion;
    private $caducidad;
    private $fnacimiento;

    // COMPROBACION DE DATOS PARA VOTAR
    private $colegio;
    // Lo declaramos 'false' porque si es Novalido, no es correcto, a que no podria votar. Por lo cual ahora definiendolo com 'false' estaria 'desactivado' y en los metodos siguientes le declarariamos como 'true' para que se active en visual() si llega a ser noValido la informacion de la persona, es decir, que si se activa esa persona no tiene algun requisito que le permita votar.
    private $noValido = false;

    private $yavotado = false;
    private $apto = true;



    // CONSTRUCTOR:


    public function __construct($dni, $nombre, $direccion, $caducidad, $fnacimiento, $colegio){

$this->dni = $dni;
$this->nombre = $nombre;
$this->direccion = $direccion;
$this->caducidad = $caducidad;
$this->fnacimiento = $fnacimiento;


//COmprobacion PROPIEDAD.
// $this->mesa = $mesa;
$this->colegio = $colegio;
// $this->yavotado = $yavotado;


    }



     // *************************************
// *************************************
// *************************************
// *************************************
// *************************************



    // METODOS:

    // METODO visual



    public function visual() {

        // Aquis acamos con este metodo sacamos la informacion por pantalla.

        // Sacar datos principales de la persona por su DNI.
        // Ya sea DNI; LOCALIZACION; CALLE

        // TIP: Podemos poner metodos dentro de otros metodos. Aqui lo usaremos para usar los otros metodos de edad, caducidad, mesa, hora voto, etc. Para poder visualizarlo. Estos metodos deben ir en la misma clase obviamente

            // Aqui podemos tener runa contabilizacion de los errores, es decir, si la edad es incorrecta, o la mesa, o la caducidad, que nos muestre los erroresay los contabilice. S tenemos:
// Comprobacion de errores
            // error < 1. APTO PARA VOTAR. Aqui lo que hicimos fue que si el error se cumple, sea '1'
// Ponemos en publico los metodos que estan eprivado, lo mismo que hacemos con las propiedades en este caso al no tener parametros dentro del este metodo seria una especie de GETTER.

// Declaramos la variable antes de pasar los metodos a publicos para que esta variable haga efecto dentro de los metodos.

// $noValido = 0;

// Aqui le pusimo a menor(), $this->fnacimiento porque le pusimos el parametro en el metodo abajo, que en este caso es para que nos separe si hay '-' el año, mes, dia.


       



            // COndicional para que si no es pato no muestre los metodos

            // Podriamos poner true o false. Pero si ponemos 1 o 0. Estariamos diciendo lo mismo, 1 = true y 0 = false.

    if(($this->noValido != 1) && ($this->yavotado != 1)){
                echo '<h2 style="color:green"> APTO PARA VOTAR </h2>';

            } else {

                $this-> menor($this->fnacimiento);
                $this-> Caducidad($this->caducidad);
                $this-> colegio($this->direccion);
                $this-> siyavoto($this->yavotado);
                $this-> botones($this->apto);

            }
            
            // else if($noValido = 1) {

            //     $sumarerrores = 
            // }

    }


    // Lo pusimos privado porque no nos interesa que salgan de esta clase, no por otra parte. Pero aunque lo pongamos privado si estos metodos los introducimos dentro de un metodo con public, al final no habria problemas, pasaria algo igual que con las PROPIEDADEs que estan en privado. Que en este caso seria el metodo visual

     // *************************************
// *************************************
// *************************************
// *************************************
// *************************************


    private function menor($fecha){


    list($Y, $m, $d) = explode('-', $fecha);
    
    
    echo($fecha);
    echo('<br>');
    
    
    // Fecha actual
    $mesDiaActual = date('md');
    $añoactual = date('Y');

    echo($mesDiaActual . '<br>' . $añoactual);
    
    // Ahora condicionamos 
    
    // ejm: 05-13 < 06-12. Aqui lo que hicimos es si mesdiaactual es menor a la fecha (que en este caso es de nacimiento), 

    // ESta variable es la diferencia del año actual con el año de nacimiento, y el -1 para el condicional, y es si mesdiaActual es menor o no ha llegado al mes y dia de la fecha de nacimiento, entonces aun no ha cumplido años por lo cual le restamos menos -1
    $edad = $añoactual - $Y -1;

    echo('<br>');
    echo($edad);
    // if($edad < 18) {

    //     echo('ERES MENOR DE EDAD, NO PUEDES VOTAR');
    // }

    // echo('<br>');

    // ACTUALIZACION: Si el metodo va bien pero al momento de pasarlo a publico no te da error pero no te muestra si se aplicaron los condicionales, entonces intenta cambiar la posiciond de los condicionales, aqui me paso que el primer condicional no me lo reconocia porque estaba abajo, y ahora lo puse arriba y obviamente me lo reconocio porque esta de primero.

    if($edad < 18){
        $this->noValido = true;
        
    
    
    // if(($mesDiaActual < $m.$d) && ($edad <= 18)) {


    // }


        // return $this->fnacimiento;
        echo '<h2 style="color:red"> ERES MENOR VETE A ESTUDIAR </h2>';
        // Aca hicimos que en cada metodo pongamos $noValido que ya fue declarada, y le la definimos con '+= 1', para que este no sea '0', porque '0' es que es APTO PARA VOTAR, entonces es '1', es para que cuando pase por el condicional en el cual decimos que si no es '1' es apto para votar. y el '+='
        
        //ACTUALIZACION: Como te dara cuenta si usamos $noValido += en cada metodo. Nos pondria variable indefninida porque recordemos que cada metodo(funcion) es como si fuera una isla propia, el contenido que hay en ellas solo es para ellas, no puede salir de la funcion. Por lo cual lo ideal para reemplazar
        

        // Si s verdad que es menor de edad, entonces es igual a 1.
// $noValido = 1;

    }
    else if($mesDiaActual < $m.$d) {
    
 
        return ($edad);

    } 
    
    else if($mesDiaActual > $m.$d){
        // echo('ERES MENOR DE EDAD, NO PUEDES VOTAR. Tu edad es = ');
        
        return ( $añoactual - $Y);

    }

    }

     // *************************************
// *************************************
// *************************************
// *************************************
// *************************************

    private function Caducidad($caducidad){

        $anyomesDiaActual= date("Y-m-d");
    
list($Y, $m, $d) = explode('-', $caducidad);


if($caducidad <= $anyomesDiaActual){

    $this->noValido = true;

    // Lo ponemor menos porqu lo que queremos hacer es que si la caducidad es menor que la fecha actual, entonces ya no tiene validez porque ya sobrepaso la fecha estimada que tenia
          
    echo '<h2 style="color:red"> TU DNI ESTA CADUCADO </h2>';

    
}
else if($caducidad >= $anyomesDiaActual) {

//         // En cambio si $caducidad es mayor que la fecha actual, como te imaginaras. Todavia no hemos llegado a esa fecha, por lo cual aun no ha caducado...

// // echo('FECHA DNI CADUCADA');

// // $this->noValido = true;

echo('<h2 style="color:green">' . 'FECHA DE CADUCIDAD = ' . $caducidad . '</h2>');


} 



        // echo '<h2 style="color:red"> TU DNI ESTA Caducidad </h2>';
        // $noValido = 1;
        
            }

             // *************************************
// *************************************
// *************************************
// *************************************
// *************************************


            private function colegio($direccion){

                $colegios = [

                    'calle hola' => 'Colegio pepito',
                    'calle las avenidas' => 'Colegio Parcero',
                    'calle pereu garau' => 'Colegio Voludo'
                ];

              

                    if(isset($colegios[$direccion])) {


                        echo '<h2 style="color:green">TU COLEGIO ES:' . $colegios[$direccion] . '<br>' . 'TU MESA ES: ' . $this->colegio . '</h2>';


                    } else{

                        $this->noValido = true;

                        echo '<h2 style="color:red"> NO ES TU Colegio. TU Colegio ES:' . $direccion . '</h2>';
                    }
                    
                    // else  if($key == $direccion){

                    //     echo('Tu codigo de Colegio es = ' . $this->colegio);
                        
                    //                         }
             
            

                
                // $noValido = 1;
                
                    }
// Este metodo VOTO nos mostrara si es apto o no para votar.


 // *************************************
// *************************************
// *************************************
// *************************************
// *************************************

                    private function siyavoto($yavotado){

$yavotado = true;

                        echo '<h2 style="color:red"> YA HAS VOTADO, PARCERO </h2>';

                       


                        $noValido = true;
                        
                            

                        }

                        private function botones($apto){
if($apto == false){
                            echo('<li class ="boton" style="background-color: red"> <a href="../index.php?nombre=' . $this->dni . '">VOLVER</a> </li>');
                        }

                    
                    }

}

$carnet1 = new Carnet('46454567H', 'Mariaa xd', 'calle hola', '2020-03-28', '1999-03-28', '012');

$carnet2 = new Carnet('12345678z', 'Roberto xd', 'calle las avenidas', '1999-03-28', '2006-03-03', '013');


$carnet3 = new Carnet('4324325t', 'Maria xd', 'calle pereu garau', '1999-03-28', '1999-05-23', '014');

$carnet1->visual();
$carnet2->visual();
$carnet3->visual();






// $carnet2 = new Carnet('12345678z', 'Pedro xd', 'Calle hola2. cada 24, puerta tiene.', '2021-07-28', '1978-08-28', '013');

// $carnet2->visual();
// $carnet2->Caducidad();
// $carnet2->menor();
// $carnet2->mesa();
// $carnet2->voto();


// $carnet3 = new Carnet('4324325a', 'Alberto xd', 'Calle hola3. cada 25, puerta tiene.', '2023-06-28', '2005-12-28', '014');

// $carnet3->visual();
// $carnet3->Caducidad();
// $carnet3->menor();
// $carnet3->mesa();
// $carnet3->voto();

echo('<pre>');
print_r($carnet1);
echo('</pre>');

echo('<br>');

// echo('<pre>');
// print_r($carnet2);
// echo('</pre>');

// echo('<br>');

// echo('<pre>');
// print_r($carnet3);
// echo('</pre>');

// echo('<br>');



                

?>