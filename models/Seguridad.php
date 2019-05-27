<?php

// Aqui iran los metodos que nos permitiran ingresar con el DNI

class Seguridad{

    private $dni;

    // public function IngresoDNI(){

    //     $ingresardni = $_REQUEST['dni'];

    //     if($this->$dni == $ingresardni){

    //         header('Location: php/datosvotacion.php');


    //     } else if($this->$dni != $ingresardni) {

    //         echo 'DNI NO ENCONTRADO. VUELVA HA INTENTARLO';
    //     }
    // }

// Aun no usamos SETTER o GETTER...

    
public function letraDNI ($dni) {

    // $dni = $_POST['dni'];

    // Obtiene letra del DNI 

      $calcular = (int) ($dni / 23);
      $calcular *= 23;
      $calcular = $dni - $calcular;
      $letras = 'TRWAGMYFPDXBNJZSQVHLCKEO';
      $letraDNI = substr ($letras, $calcular, 1);
      return $letraDNI;
    }


}


$validarletra = new Seguridad();





?>