<?php
require_once("../config/Conexion.php");
class Empresa1 extends Conexion {

    private $connection;

    function __construct()
    {
        $this->connection = new Conexion();
        $this->connection=$this->connection->connect();
    }
    public  function mostrarEmpresa(){
        $sql="SELECT id_Empresa,empresa FROM t_empresa";
        $execute=$this->connection->query($sql);
        $request=$execute->fetchAll(PDO::FETCH_ASSOC);
        print_r($request);
        return $request;
    }
    public function validacionModal(String $empresa, String $clave){
        $sql="SELECT id_Empresa,claveRegistro FROM t_empresa WHERE id_Empresa=? AND claveRegistro=?";
        $query = $this->connection->prepare($sql);
        $arrayData = array($empresa, $clave);
        $query->execute($arrayData);
        $request=$query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }

}
?>
