<?php

//Llamado del archivo conexion.php;
require_once ("../config/Conexion.php");

class Usuario extends Conexion{
    private $name;
    private $lastName;
    private $gender;
    private $ago;
    private $phone;
    private $email;
    private $business;
    private $position;
    private $connection;
    private $profesion;
    function __construct()
    {
        $this->connection = new Conexion();
        $this->connection=$this->connection->connect();
    }
    public function validaUsuario(String $facebook_id){
        $sql ="SELECT * FROM t_usuarios WHERE email=?";
        $query = $this->connection->prepare($sql);
        $arrayData = array($facebook_id);
        $query->execute($arrayData);
        $request=$query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }
    public function registrarUsuario(String $name, String $lastName, String $gender,String $ago, String $phone, String $email,String $profesion, int $business, String  $position){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->gender=$gender;
        $this->ago=$ago;
        $this->phone=$phone;
        $this->email=$email;
        $this->profesion=$profesion;
        $this->business=$business;
        $this->position=$position;

        $sql = "INSERT INTO t_usuarios (nombre,apellido,sexo,edad, celular,email,profesion, empresa, cargo, fechaRegistro)
                      VALUES (?,?,?,?,?,?,?,?,?,now())";
        $insert = $this->connection->prepare($sql);
        $arrayData =array($this->name,$this->lastName,$this->gender,$this->ago,$this->phone,$this->email,$this->profesion, $this->business,$this->position);
        $resInsert=$insert->execute($arrayData);
        $idInsert=$this->connection->lastInsertId();
        return $idInsert;

    }
    public function mostrarEdad(){
        $sql="SELECT * FROM t_edad";
        $execute=$this->connection->query($sql);
        $request=$execute->fetchAll(PDO::FETCH_ASSOC);
        return $request;
        }

    public function buscaUsuario(int $id_Usuario){
        $sql ="SELECT * FROM t_usuarios WHERE id_Usuario=?";
        $query = $this->connection->prepare($sql);
    $arrayData = array($id_Usuario);
        $query->execute($arrayData);
        $request=$query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }
}

?>
