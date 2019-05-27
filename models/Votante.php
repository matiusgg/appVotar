<?php


// class Votante implements ValidacionVoto{
class Votante {

private $dni;
private $nombre;
private $caducidad;
private $calle;
private $localizacion;
private $fechanacimiento;

// METODOS

public function setDatos($datos, $contenido){

    $this->$datos = true;

    if(($this->$datos == $this->dni){
echo('DNI: ' . $contenido);
    }
    }
}



$pepe = new Votante();
$pepe-> setDatos('dni', '24345535L');

echo('<pre>');
print_r($pepe);
echo('</pre>');

$alberto = new Votante();
$alberto-> setDatos('dni', '32435243L');

echo('<pre>');
print_r($pepe);
echo('</pre>');