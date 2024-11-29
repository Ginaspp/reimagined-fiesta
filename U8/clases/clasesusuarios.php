<?php 
include("../recursos.php");
class Usuario{
    public $baseconectada;

    function __construct($base)
    {
        $this->baseconectada = $base;
       
    }
   
    public function cargar_usuario($usuario,$contrasena){
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT, array('cost'=>4));
        $respuesta = $this->baseconectada->ejecutarQuery("INSERT INTO registro VALUES
        (DEFAULT,'$usuario','$contrasena')");
        return $respuesta;
    }

}
?>