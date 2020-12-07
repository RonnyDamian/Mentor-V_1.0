<?php
require_once("../config/Conexion.php");
class Encuesta extends Conexion {
    private $preg1;
    private $preg2;
    private $preg3;
    private $preg4;
    private $preg5;
    private $preg6;
    private $preg7;
    private $preg8;
    private $preg9;
    private $preg10;
    private $preg11;
    private $preg12;
    private $preg13;
    private $preg14;
    private $animodo;
    private $id_Usuario;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarEncuesta(int $p1, int $p2, int $p3, int $p4, int $p5, int $p6, int $p7, int $p8,  int $p9, int $p10, int $p11, int $p12, int $p13, int $p14, int $sentirPensar, int $actuarObservar,String $animodo,
                                      int $id_Usuario)
    {
        $this->preg1 = $p1;
        $this->preg2 = $p2;
        $this->preg3 = $p3;
        $this->preg4 = $p4;
        $this->preg5 = $p5;
        $this->preg6 = $p6;
        $this->preg7 = $p7;
        $this->preg8 = $p8;
        $this->preg9 = $p9;
        $this->preg10 = $p10;
        $this->preg11 = $p11;
        $this->preg12 =$p12;
        $this->preg13 = $p13;
        $this->preg14 = $p14;
        $this->sentirPensar =$sentirPensar;
        $this->actuarObservar =$actuarObservar;
        $this->animodo=$animodo;
        $this->id_Usuario=$id_Usuario;

        $sql = "INSERT INTO t_animodo(preg1,preg2,preg3,preg4,preg5,preg6,preg7,preg8,preg9,preg10,preg11,preg12,preg13,preg14,sentirPensar,actuarObservar,animodo,id_Usuario)
              VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrayData = array($this->preg1,$this->preg2,$this->preg3,$this->preg4,$this->preg5,$this->preg6,$this->preg7,$this->preg8,$this->preg9,$this->preg10,$this->preg11,$this->preg12,$this->preg13,$this->preg14,$this->sentirPensar,$this->actuarObservar ,$this->animodo,$this->id_Usuario,);
        $resInsert= $insert->execute($arrayData);
        $idInsert = $this->conexion->lastInsertId();

        return $idInsert;
    }
    public function validaEncuesta(int $id_Usuario){
        $sql ="SELECT id_Usuario FROM t_animodo WHERE id_Usuario =?";
        $query = $this->conexion->prepare($sql);
        $arrayData = array($id_Usuario);
        $query->execute($arrayData);
        $request=$query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }
    public function editarEncuesta(int $p1, int $p2, int $p3, int $p4, int $p5, int $p6, int $p7, int $p8,  int $p9, int $p10, int $p11, int $p12, int $p13, int $p14, int $sentirPensar, int $actuarObservar,String $animodo,
                                   int $id_Usuario){

        $this->preg1 = $p1;
        $this->preg2 = $p2;
        $this->preg3 = $p3;
        $this->preg4 = $p4;
        $this->preg5 = $p5;
        $this->preg6 = $p6;
        $this->preg7 = $p7;
        $this->preg8 = $p8;
        $this->preg9 = $p9;
        $this->preg10 = $p10;
        $this->preg11 = $p11;
        $this->preg12 =$p12;
        $this->preg13 = $p13;
        $this->preg14 = $p14;
        $this->sentirPensar =$sentirPensar;
        $this->actuarObservar =$actuarObservar;
        $this->animodo=$animodo;
        $this->id_Usuario=$id_Usuario;

        $sql="UPDATE t_animodo SET    
                    preg1=?,
                    preg2=?,
                    preg3=?,
                    preg4=?,
                    preg5=?,
                    preg6=?,
                    preg7=?,
                    preg8=?,
                    preg9=?,
                    preg10=?,
                    preg11=?,
                    preg12=?,
                    preg13=?,
                    preg14=?,
                    sentirPensar=?,
                    actuarObservar=?,
                    animodo=? 
               WHERE id_Usuario=? ";
        $update = $this->conexion->prepare($sql);
        $arrayData = array($this->preg1,$this->preg2,$this->preg3,$this->preg4,$this->preg5,$this->preg6,$this->preg7,$this->preg8,$this->preg9,$this->preg10,$this->preg11,$this->preg12,$this->preg13,$this->preg14,$this->sentirPensar,$this->actuarObservar ,$this->animodo,$this->id_Usuario,);
        $resExecute =$update->execute($arrayData);
        return $resExecute;

    }

    public function buscAnimodo(int $id_Usuario){
        $sql ="SELECT animodo FROM t_animodo WHERE id_Usuario =?";
        $query = $this->conexion->prepare($sql);
        $arrayData = array($id_Usuario);
        $query->execute($arrayData);
        $request=$query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }
}
?>
