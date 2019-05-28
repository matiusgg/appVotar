<?php

// *************************************
// *************************************
// *************************************
// *************************************
// *************************************


function edad($fecha)  {

    // LIST: Donde $Y: Año, $m: Mes, $d: dia.  
    
    // EXPLODE: Divide un string o string en varias partes de strings que le señalemos, ya sea si el string tiene caracteres especificos,
    // Los cuale sles podemos indicar que nos separe el string si encuentra uno de estos caracteres.
    //Lo que pasa aqui es que le decimos cada vez que encuentre en la $fecha un '-', nos introduczca esta nueva
    // pedazo de string dentro de una variable
    
    //list($Y, $m, $d) = explode('-', $fecha);
    // Aqui lo que hicimos fue lo mismo que el anterior, solo que con this-> llamamos a la variable para hacer parte de la funcion
    
    list($Y, $m, $d) = explode('-', $fecha);
    
    
    
    // DATE: Es una funcion que tiene muchas caracteristicas, una de las cuales es
    // date('md'), la cual nos permite saber el dia y mes actual, sonf echas anglosajonas, o date('Y'); para el saber el año.
    
    
    // Fecha actual
    $mesDiaActual = date('md');
    $añoactual = date('Y');
    
    // Ahora condicionamos 
    
    // ejm: 05-13 < 06-12. Aqui lo que hicimos es si mesdiaactual es menor a la fecha (que en este caso es de nacimiento), 
    $edad = $añoactual - $Y -1;
    // if($edad < 18) {

    //     echo('ERES MENOR DE EDAD, NO PUEDES VOTAR');
    // }

    // echo('<br>');

    if(($mesDiaActual < $m.$d) && ($edad >= 18)) {
    
        // Es menor a 1 porque si llega a coincidar en la mismo año pero con meses difernetes, entonces
        // tu no cumples, pero si el mes y el dia coinciden entonces aun no cumples todavia por lo cual se te baja un año, hasta que no cumplas no se te quita el -1
    
    // Aqui le decimos lo mismo que con mes y dia, que me saque la diferencia entre los dos años
  
        return ($edad);

    } 
    
    else {
        echo('ERES MENOR DE EDAD, NO PUEDES VOTAR. Tu edad es = ');
        
        return ( $añoactual - $Y);

        
    }
    
    // if(($mesDiaActual < $m.$d) && ($edad <= 18)) {


    // }
    
    // SHORTHAND: 
    
    // Basicamente es un 'if', en donde antes del ?, va la condicion, despues del interrogante va el contenido;
    // Solo podemos usar un else aqui, es una forma mas repida que el de arriba
    
    //return( $mesDiaActual < $m.$d ? $añoactual - $Y -1 : 
    //$añoactual - $Y
    //);

    
    }

    echo(edad('1999-06-12'));

echo('<br>');

// *************************************
// *************************************
// *************************************
// *************************************
// *************************************

  function horavoto() {

        $hora = time();
        echo date('H:i:s', $hora);
            }

            echo(horavoto());

            echo('<br>');
// funcion parA SACAR UNA LETRA ASIGNADA PARA UNA LINEA DE NUMEROS.

            function letraDNI ($dni) {

        
            
                // Obtiene letra del DNI 
            
                  $calcular = (int) ($dni / 23);
                  $calcular *= 23;
                  $calcular = $dni - $calcular;
                  $letras = 'TRWAGMYFPDXBNJZSQVHLCKEO';
                  $letraDNI = substr ($letras, $calcular, 1);
                  return $letraDNI;
                }

                echo(letraDNI('6564765888'));

                echo('<br>');

                $anyomesDiaActual= date("y-m-d");

                echo($anyomesDiaActual);

                // *************************************
// *************************************
// *************************************
// *************************************
// *************************************


                function Caducidad($caducidad){

$anyomesDiaActual= date("y-m-d");
list($Y, $m, $d) = explode('-', $caducidad);

if($caducidad <= $anyomesDiaActual){

    // Lo ponemor menos porqu lo que queremos hacer es que si la caducidad es menor que la fecha actual, entonces ya no tiene validez porque ya sobrepaso la fecha estimada que tenia
          
                 echo('FECHA DNI CADUCADA');
}
 else if($caducidad >= $anyomesDiaActual) {

        // En cambio si $caducidad es mayor que la fecha actual, como te imaginaras. Todavia no hemos llegado a esa fecha, por lo cual aun no ha caducado...

// echo('FECHA DNI CADUCADA');

echo('FECHA DE CADUCIDAD = ' . $caducidad);


}


}
echo('<br>');
echo(Caducidad('16-03-28'));


echo('<br>');

// *************************************
// *************************************
// *************************************
// *************************************
// *************************************

echo('<hr>');

// PRUEBA CON SET METODO DE EDAD

echo('CLASE PRUEBA. ');

echo('<br>');

class fecha{

    private $fechanacimiento;
    private $caducidad;




    function setedadfecha($fechanacimiento)  {

        $this->$fechanacimiento = true;

        if($this->fechanacimiento = $fechanacimiento){

        // LIST: Donde $Y: Año, $m: Mes, $d: dia.  
        
        // EXPLODE: Divide un string o string en varias partes de strings que le señalemos, ya sea si el string tiene caracteres especificos,
        // Los cuale sles podemos indicar que nos separe el string si encuentra uno de estos caracteres.
        //Lo que pasa aqui es que le decimos cada vez que encuentre en la $fecha un '-', nos introduczca esta nueva
        // pedazo de string dentro de una variable
        
        //list($Y, $m, $d) = explode('-', $fecha);
        // Aqui lo que hicimos fue lo mismo que el anterior, solo que con this-> llamamos a la variable para hacer parte de la funcion
        
list($Y, $m, $d) = explode('-', $fechanacimiento);
        
        
        
        // DATE: Es una funcion que tiene muchas caracteristicas, una de las cuales es
        // date('md'), la cual nos permite saber el dia y mes actual, sonf echas anglosajonas, o date('Y'); para el saber el año.
        
        
        // Fecha actual
        $mesDiaActual = date('md');
        $añoactual = date('Y');
        
        // Ahora condicionamos 
        
        // ejm: 05-13 < 06-12. Aqui lo que hicimos es si mesdiaactual es menor a la fecha (que en este caso es de nacimiento), 
        $edad = $añoactual - $Y -1;
        // if($edad < 18) {
    
        //     echo('ERES MENOR DE EDAD, NO PUEDES VOTAR');
        // }
    
        // echo('<br>');
    
        if(($mesDiaActual < $m.$d) && ($edad >= 18)) {
        
            // Es menor a 1 porque si llega a coincidar en la mismo año pero con meses difernetes, entonces
            // tu no cumples, pero si el mes y el dia coinciden entonces aun no cumples todavia por lo cual se te baja un año, hasta que no cumplas no se te quita el -1
        
        // Aqui le decimos lo mismo que con mes y dia, que me saque la diferencia entre los dos años
      
            return ($edad);
    
        } 
        
        else {
            echo('ERES MENOR DE EDAD, NO PUEDES VOTAR. Tu edad es = ');
            
            return ( $añoactual - $Y);
    
            
        }
        
        // if(($mesDiaActual < $m.$d) && ($edad <= 18)) {
    
    
        // }
        
        // SHORTHAND: 
        
        // Basicamente es un 'if', en donde antes del ?, va la condicion, despues del interrogante va el contenido;
        // Solo podemos usar un else aqui, es una forma mas repida que el de arriba
        
        //return( $mesDiaActual < $m.$d ? $añoactual - $Y -1 : 
        //$añoactual - $Y
        //);
    
        
        }

    }

  // *************************************
// *************************************
// *************************************
// *************************************
// *************************************
    
    // CADUCIDAD



    public function setCaducidad($caducidad){

        echo('<br>');

        $this->$caducidad = true;

$anyomesDiaActual= date("y-m-d");
list($Y, $m, $d) = explode('-', $caducidad);


if($this->caducidad = $caducidad) {

if($caducidad <= $anyomesDiaActual){

    
        // Lo ponemor menos porqu lo que queremos hacer es que si la caducidad es menor que la fecha actual, entonces ya no tiene validez porque ya sobrepaso la fecha estimada que tenia


     echo('FECHA DNI CADUCADA');
}
else if($caducidad >= $anyomesDiaActual) {

    
        // En cambio si $caducidad es mayor que la fecha actual, como te imaginaras. Todavia no hemos llegado a esa fecha, por lo cual aun no ha caducado...

// echo('FECHA DNI CADUCADA');

echo('FECHA DE CADUCIDAD = ' . $caducidad);


}

}
}
    


}

$fechan = new fecha();
$fechan->setedadfecha('1999-03-03');
$fechan->setCaducidad('2020-03-03');

echo('<pre>');
print_r($fechan);
echo('</pre>');

echo('<pre>');
print_r($fechan->setedadfecha('1999-03-03'));
echo('</pre>');

echo('<pre>');
print_r($fechan->setCaducidad('2020-03-03'));
echo('</pre>');



  // *************************************
// *************************************
// *************************************
// *************************************
// *************************************

// METODOS QUE HIZO EL PROFESOR

// CLASS CARNET. CARNET SERIA lo que necesitamos para el archivo datosvotacion.php

class Carnet{

    // PROPIEDADES

    private $dni;
    private $nombre;
    private $direccion;
    private $fCaducidad;
    private $fnacimiento;
    private $mesa;



    // CONSTRUCTOR:


    public function __construct($dni, $nombre, $direccion, $fCaducidad, $fnacimiento, $mesa){

$this->dni = $dni;
$this->nombre = $nombre;
$this->direccion = $direccion;
$this->fcaducidad = $fCaducidad;
$this->fnacimiento = $fnacimiento;


//COmprobacion PROPIEDAD.
$this->mesa = $mesa;

v
    }

    // METODOS:

    // METODO VISUAL



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

$noValido = 0;
            $this-> menor();
            $this-> Caducidad();
            $this-> mesa();
            $this-> voto();

            // COndicional para que si no es pato no muestre los metodos

            if($noValido < 1){
                echo '<h2 style="color:green"> APTO PARA VOTAR </h2>';

            }

    }


    // Lo pusimos privado porque no nos interesa que salgan de esta clase, no por otra parte. Pero aunque lo pongamos privado si estos metodos los introducimos dentro de un metodo con public, al final no habria problemas, pasaria algo igual que con las PROPIEDADEs que estan en privado. Que en este caso seria el metodo VISUAL


    private function menor(){
        echo '<h2 style="color:red"> ERES MENOR VETE A ESTUDIAR </h2>';
        // Aca hicimos que en cada metodo pongamos $noValido que ya fue declarada, y le la definimos con '+= 1', para que este no sea '0', porque '0' es que es APTO PARA VOTAR, entonces es '1', es para que cuando pase por el condicional en el cual decimos que si no es '1' es apto para votar. y el '+=' 
        

        // Si s verdad que es menor de edad, entonces es igual a 1.
$noValido += 1;

    }

    private function Caducidad(){
        echo '<h2 style="color:red"> TU DNI ESTA CADUCADO </h2>';
        $noValido += 1;
        
            }


            private function mesa(){
                echo '<h2 style="color:red"> NO ES TU COLEGIO. TU COLEGIO ES:' .  '</h2>';
                $noValido+= 1;
                
                    }
// Este metodo VOTO nos mostrara si es apto o no para votar.

                    private function voto(){
                        echo '<h2 style="color:green"> YA HAS VOTADO, PARCERO </h2>';
                        $noValido += 1;
                        
                            }



}

$carnet1 = new Carnet('46454567L', 'Mariaa xd', 'Calle hola. cada 23, puerta No tiene.', '1999-03-28', '012');


$carnet1 = new Carnet('12345678z', 'Mariaa xd', 'Calle hola. cada 23, puerta No tiene.', '1999-03-28', '012');


$carnet1 = new Carnet('4324325t', 'Mariaa xd', 'Calle hola. cada 23, puerta No tiene.', '1999-03-28', '012');

                

?>