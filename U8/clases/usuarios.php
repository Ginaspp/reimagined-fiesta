<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct($nom, $app, $nac)
    {
      $this->nombre = $nom;
      $this->apellido = $app;
      $this->fecha_nacimiento=$nac;
    }
    function calcular_edad(){
        return (strtotime(date("d-m-Y"))-strtotime($this->fecha_nacimiento))/31536000;
    }
    function imprime_caracteristicas(){
        echo "<p><span class='spann'>Nombre:</span> ".$this->nombre."</p>
        <p><span class='spann'>Apellido:</span> ".$this->apellido."</p>
        <p><span class='spann'>Edad:</span> ".round($this->calcular_edad())."</p>";
    }
}

?>