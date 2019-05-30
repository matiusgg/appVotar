<?php

interface SeguridadMetodo {

    public function letraDNI ($dni) {

        // No activamos la siguiente linea de codigo con 4_POST porque cuando llamamos este metodo en el index, en el archivo index ya esta dentro un condicional donde ya se definio que se recopile $_POST
          // $dni = $_POST['dni'];
      
          // Obtiene letra del DNI 
      
            // $calcular = (int) ($dni / 23);
            // $calcular *= 23;
            // $calcular = $dni - $calcular;
            // $letras = 'TRWAGMYFPDXBNJZSQVHLCKEO';
            // $letraDNI = substr ($letras, $calcular, 1);
            // return $letraDNI;
          }
}

?>