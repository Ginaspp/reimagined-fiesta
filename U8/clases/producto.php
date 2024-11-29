<?php
class Productos{
    public $baseconectada;

    function __construct($base)
    {
        $this->baseconectada = $base;
    }

    public function listar_productos(){
        $respuesta =$this->baseconectada->ejecutarQuery("SELECT * 
        FROM productos ORDER BY producto");
        return $respuesta;
    }
}
 
?>