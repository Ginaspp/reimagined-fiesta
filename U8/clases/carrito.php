<?php
class Carrito {
    public $baseconectada;

    function __construct($base)
    {
        $this->baseconectada = $base;
    }

    public function introducir_compra($codigo_prod,$producto_prod,$descripcion_prod,$precio_prod){
       $respuesta = $this->baseconectada->ejecutarQuery("INSERT INTO compras VALUES (DEFAULT,$codigo_prod,'$producto_prod',
       '$descripcion_prod',$precio_prod)");
       return $respuesta;
    }
    public function eliminar_compra($codigo_p){
        $respuesta = $this->baseconectada->ejecutarQuery("DELETE FROM  compras 
        WHERE codigo=$codigo_p");
        return $respuesta;
    }
   
    public function listar_compra(){
        $respuesta =$this->baseconectada->ejecutarQuery("SELECT * FROM compras ORDER BY producto");
        return $respuesta;
    }
}
?>