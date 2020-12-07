<?php

Class Conexion{
    private $host = "127.0.0.1:3306";
    private $db_name = "pryencuesta";
    private $user = "root";
    private $password = "12345";
    private $connect;
    public function  __construct(){
        $connectionString ="mysql:host=".$this->host.";dbname=" .$this->db_name.";charset=utf8";
        try {
            $this->connect = new PDO($connectionString,$this->user,$this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (Exception $e){
            $this->connect="Error de conexión";
            echo "Error: ".$e->getMessage();
        }
    }
    public function connect(){
        return $this->connect;
    }
}
?>
