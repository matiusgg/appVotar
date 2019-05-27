<?php

// Aqui iran todas los metodos que nos serviran para mostrar el contenido respecto al vovante y si cumple los requisitos.

interface ValidacionVoto{

    public function horavoto() {

        $hora = time();
        echo date('H:i:s', $hora);
            }
        
        
            function edad($fecha)  {

                // LIST: Donde $Y: Año, $m: Mes, $d: dia.  
                
                // EXPLODE: Divide un string o string en varias partes de strings que le señalemos, ya sea si el string tiene caracteres especificos,
                // Los cuale sles podemos indicar que nos separe el string si encuentra uno de estos caracteres.
                //Lo que pasa aqui es que le decimos cada vez que encuentre en la $fecha un '-', nos introduczca esta nueva
                // pedazo de string dentro de una variable
                
                //list($Y, $m, $d) = explode('-', $fecha);
                // Aqui lo que hicimos fue lo mismo que el anterior, solo que con this-> llamamos a la variable para hacer parte de la funcion
                
                list($Y, $m, $d) = explode('-', '{$this->fechanacimiento}');
                
                
                
                // DATE: Es una funcion que tiene muchas caracteristicas, una de las cuales es
                // date('md'), la cual nos permite saber el dia y mes actual, sonf echas anglosajonas, o date('Y'); para el saber el año.
                
                
                // Fecha actual
                $mesDiaActual = date('md');
                $añoactual = date('Y');
                
                // Ahora condicionamos 
                
                // ejm: 05-13 < 06-12. Aqui lo que hicimos es si mesdiaactual es menor a la fecha (que en este caso es de nacimiento), 
                
                if( $mesDiaActual < $m.$d) {
                
                    // Es menor a 1 porque si llega a coincidar en la mismo año pero con meses difernetes, entonces
                    // tu no cumples, pero si el mes y el dia coinciden entonces aun no cumples todavia por lo cual se te baja un año, hasta que no cumplas no se te quita el -1
                
                // Aqui le decimos lo mismo que con mes y dia, que me saque la diferencia entre los dos años
                    return ( $añoactual - $Y -1);
                } 
                
                else {
                
                    return ( $añoactual - $Y);
                }
                
                // SHORTHAND: 
                
                // Basicamente es un 'if', en donde antes del ?, va la condicion, despues del interrogante va el contenido;
                // Solo podemos usar un else aqui, es una forma mas repida que el de arriba
                
                //return( $mesDiaActual < $m.$d ? $añoactual - $Y -1 : 
                //$añoactual - $Y
                //);
                
                }

                public function Caducidad($fecha){


                }
}

?>