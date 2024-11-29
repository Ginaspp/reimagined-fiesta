<?php
class BaseDatos{
    private $conexion;
    public $error;

    function __construct($servidor, $usuario, $password, $base)
    {
        $this->conexion = new mysqli($servidor, $usuario, $password, $base);
    }

    public function ejecutarQuery($codigoSQL){
        $instruccion = substr($codigoSQL, 0,6);

        switch($instruccion) {
            case 'INSERT':
                $sql = $this->conexion->query($codigoSQL);
                if (!$sql) {
                    $this->error = $this->conexion->error;
                    return false;
                }else {
                    return $this->conexion->insert_id;
                }
                break;
            case 'UPDATE':
            case 'DELETE':
                $sql = $this->conexion->query($codigoSQL);
                if (!$sql) {
                    $this->error = $this->conexion->error;
                    return false;
                }else {
                    return $this->conexion->affected_rows;
                }
                break;
            break;
            case 'SELECT':   
                $sql = $this->conexion->query($codigoSQL);
                while($listarCont = $sql->fetch_assoc()){
                    $mostrarCont[] = $listarCont;
                }
                return $mostrarCont;
                break;

            default:
                $this->error = 'Consulta no válida';
                break;
        }
    }
}
?>