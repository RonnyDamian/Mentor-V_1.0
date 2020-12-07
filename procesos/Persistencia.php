<?php
require_once("../config/Conexion.php");
class Persistencia extends Conexion {
    private $animodo;
    private $colorComunicacion;
    private $tiposCerebro;
    private $formaNegociadora;
    private $valoracion;
    private $persistente;
    private $id_Usuario;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarEncuesta(int $animodo, int $colorComunicacion,int $tiposCerebro,int $formaNegociadora,
                                       int $valoracion, String $persistente, int $id_Usuario )
    {
      $this->animodo=$animodo;
      $this->colorComunicacion=$colorComunicacion;
      $this->tiposCerebro=$tiposCerebro;
      $this->formaNegociadora=$formaNegociadora;
      $this->valoracion=$valoracion;
      $this->persistente=$persistente;
      $this->id_Usuario=$id_Usuario;



      $sql = "INSERT INTO t_nivelpersistencia(animodo,colorComunicacion,tiposCerebro,formaNegociadora,
                                              valoracion,persistente,id_Usuario)
                     VALUES (?,?,?,?,?,?,?)";
      $insert = $this->conexion->prepare($sql);
      $arrayData = array($this->animodo,$this->colorComunicacion,$this->tiposCerebro,$this->formaNegociadora,
                         $this->valoracion,$this->persistente,$this->id_Usuario);
      $resInsert= $insert->execute($arrayData);
      $idInsert = $this->conexion->lastInsertId();

      return $idInsert;
    }

    public function  calculaNivelPersistencia(){
        $sql="SELECT a.animodo,
                     a.id_Usuario,                     
                     c.valoracion AS valoracion_Comunicacion,
                     c.id_Usuario,
                     e.valoracion AS valoracion_evaluacion,
                     e.id_Usuario ,
                     t.valoracion AS tipos_Cerebro,
                     u.id_Usuario
               FROM t_usuarios AS u INNER JOIN t_animodo AS a
               ON   u.id_Usuario=a.id_Usuario
               INNER JOIN t_colorcomunicacion AS c 
               ON u.id_Usuario = c.id_Usuario
               INNER JOIN t_evalnegociadora AS e
               ON u.id_Usuario =e.id_Usuario
               INNER JOIN t_tiposcerebro AS t 
               ON  u.id_Usuario=t.id_Usuario ";
        $execute=$this->conexion->query($sql);
        $request=$execute->fetchAll(PDO::FETCH_ASSOC);
        return $request;
    }

    public function validaEncuesta(int $id_Usuario){
        $sql ="SELECT id_Usuario FROM t_nivelpersistencia WHERE id_Usuario =?";
        $query = $this->conexion->prepare($sql);
        $arrayData = array($id_Usuario);
        $query->execute($arrayData);
        $request=$query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }

    public function editarPersistencia(int $animodo, int $colorComunicacion,int $tiposCerebro,int $formaNegociadora,
                                      int $valoracion, String $persistente, int $id_Usuario )
    {
        $this->animodo=$animodo;
        $this->colorComunicacion=$colorComunicacion;
        $this->tiposCerebro=$tiposCerebro;
        $this->formaNegociadora=$formaNegociadora;
        $this->valoracion=$valoracion;
        $this->persistente=$persistente;
        $this->id_Usuario=$id_Usuario;

        $sql = "UPDATE t_nivelpersistencia 
                SET animodo=?,colorComunicacion=?,tiposCerebro=?,
                    formaNegociadora=?,valoracion=?,persistente=?
                WHERE id_Usuario=?";
        $update = $this->conexion->prepare($sql);
        $arrayData = array($this->animodo,$this->colorComunicacion,$this->tiposCerebro,$this->formaNegociadora,
            $this->valoracion,$this->persistente,$this->id_Usuario);
        $resExecute= $update->execute($arrayData);

        return $resExecute;
    }
    public function buscaPersistencia(int $id_Usuario){
        $sql ="SELECT persistente FROM t_nivelpersistencia WHERE id_Usuario =?";
        $query = $this->conexion->prepare($sql);
        $arrayData = array($id_Usuario);
        $query->execute($arrayData);
        $request=$query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }
}
?>
