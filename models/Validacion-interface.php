<?php

// Aqui iran todas los metodos que nos serviran para mostrar el contenido respecto al vovante y si cumple los requisitos.

interface ValidacionVoto{

    

    public function horavoto() {

        $hora = time();
        echo date('H:i:s', $hora);
            }
        
        
            function edad($fechanacimiento, $mostrarfecha)  {

                $this->$fechanacimiento = true;

                if($this->$fechanacimiento = $this->fechanacimiento){

                // LIST: Donde $Y: Año, $m: Mes, $d: dia.  
                
                // EXPLODE: Divide un string o string en varias partes de strings que le señalemos, ya sea si el string tiene caracteres especificos,
                // Los cuale sles podemos indicar que nos separe el string si encuentra uno de estos caracteres.
                //Lo que pasa aqui es que le decimos cada vez que encuentre en la $fecha un '-', nos introduczca esta nueva
                // pedazo de string dentro de una variable
                
                //list($Y, $m, $d) = explode('-', $fecha);
                // Aqui lo que hicimos fue lo mismo que el anterior, solo que con this-> llamamos a la variable para hacer parte de la funcion
                
 list($Y, $m, $d) = explode('-', $mostrarfecha);
                
                
                
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

                public function Caducidad($caducidad, $fechacaducidad){

                    $this->$caducidad = true;

$anyomesDiaActual= date("y-m-d");
list($Y, $m, $d) = explode('-', $fechacaducidad);

if(($this->$caducidad = $this->caducidad) && ($fechacaducidad <= $anyomesDiaActual)){

          
                 echo('FECHA DNI CADUCADA');
}
 else if(($this->$caducidad = $this->caducidad) && ($fechacaducidad >= $anyomesDiaActual)) {

echo('FECHA DNI CADUCADA');

echo('FECHA DE CADUCIDAD = ' . $fechacaducidad);


}


}


}

?>