<?php
require_once("../config/Conexion.php");
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
class Encuesta2 extends Conexion {
    private $preg1op1;
    private $preg1op2;
    private $preg1op3;
    private $preg1op4;
    private $preg2op1;
    private $preg2op2;
    private $preg2op3;
    private $preg2op4;
    private $preg3op1;
    private $preg3op2;
    private $preg3op3;
    private $preg3op4;
    private $preg4op1;
    private $preg4op2;
    private $preg4op3;
    private $preg4op4;
    private $preg5op1;
    private $preg5op2;
    private $preg5op3;
    private $preg5op4;
    private $preg6op1;
    private $preg6op2;
    private $preg6op3;
    private $preg6op4;
    private $preg7op1;
    private $preg7op2;
    private $preg7op3;
    private $preg7op4;
    private $preg8op1;
    private $preg8op2;
    private $preg8op3;
    private $preg8op4;
    private $preg9op1;
    private $preg9op2;
    private $preg9op3;
    private $preg9op4;
    private $preg10op1;
    private $preg10op2;
    private $preg10op3;
    private $preg10op4;
    private $preg11op1;
    private $preg11op2;
    private $preg11op3;
    private $preg11op4;
    private $preg12op1;
    private $preg12op2;
    private $preg12op3;
    private $preg12op4;
    private $preg13op1;
    private $preg13op2;
    private $preg13op3;
    private $preg13op4;
    private $preg14op1;
    private $preg14op2;
    private $preg14op3;
    private $preg14op4;
    private $preg15op1;
    private $preg15op2;
    private $preg15op3;
    private $preg15op4;
    private $preg16op1;
    private $preg16op2;
    private $preg16op3;
    private $preg16op4;
    private $preg17op1;
    private $preg17op2;
    private $preg17op3;
    private $preg17op4;
    private $preg18op1;
    private $preg18op2;
    private $preg18op3;
    private $preg18op4;
    private $preg19op1;
    private $preg19op2;
    private $preg19op3;
    private $preg19op4;
    private $preg20op1;
    private $preg20op2;
    private $preg20op3;
    private $preg20op4;
    private $preg21op1;
    private $preg21op2;
    private $preg21op3;
    private $preg21op4;
    private $preg22op1;
    private $preg22op2;
    private $preg22op3;
    private $preg22op4;
    private $colorAmarillo;
    private $colorRojo;
    private $colorAzul;
    private $colorVerde;
    private $valoracion;
    private $id_Usuario;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarEncuesta(int $p1op1,int $p1op2,int $p1op3,int $p1op4, int $p2op1,int $p2op2,int $p2op3,int $p2op4, int $p3op1,int $p3op2,int $p3op3,int $p3op4, int $p4op1,int $p4op2,int $p4op3,int $p4op4,
                                      int $p5op1,int $p5op2,int $p5op3,int $p5op4,int $p6op1,int $p6op2,int $p6op3,int $p6op4, int $p7op1,int $p7op2,int $p7op3,int $p7op4, int $p8op1,int $p8op2,int $p8op3,int $p8op4,
                                      int $p9op1,int $p9op2,int $p9op3, int $p9op4,int $p10op1,int $p10op2,int $p10op3,int $p10op4,int $p11op1,int $p11op2,int $p11op3,int $p11op4, int $p12op1,int $p12op2,int $p12op3,int $p12op4,
                                      int $p13op1,int $p13op2,int $p13op3,int $p13op4,int $p14op1,int $p14op2,int $p14op3,int $p14op4,int $p15op1,int $p15op2,int $p15op3,int $p15op4,int $p16op1,int $p16op2,int $p16op3,int $p16op4,
                                      int $p17op1,int $p17op2,int $p17op3,int $p17op4,int $p18op1,int $p18op2,int $p18op3,int $p18op4,int $p19op1,int $p19op2,int $p19op3,int $p19op4,int $p20op1,int $p20op2,int $p20op3,int $p20op4,
                                      int $p21op1, int $p21op2,int $p21op3,int $p21op4,int $p22op1,int $p22op2,int $p22op3,int $p22op4, String $colorAmarillo, String $colorRojo, String $colorAzul, String $colorVerde, int $valoracion, int $id_Usuario)
    {
      $this->preg1op1 = $p1op1;
      $this->preg1op2 = $p1op2;
      $this->preg1op3 = $p1op3;
      $this->preg1op4 = $p1op4;
      $this->preg2op1 = $p2op1;
      $this->preg2op2 = $p2op2;
      $this->preg2op3 = $p2op3;
      $this->preg2op4 = $p2op4;
      $this->preg3op1 = $p3op1;
      $this->preg3op2 = $p3op2;
      $this->preg3op3 = $p3op3;
      $this->preg3op4 = $p3op4;
      $this->preg4op1 = $p4op1;
      $this->preg4op2 = $p4op2;
      $this->preg4op3 = $p4op3;
      $this->preg4op4 = $p4op4;
      $this->preg5op1 = $p5op1;
      $this->preg5op2 = $p5op2;
      $this->preg5op3 = $p5op3;
      $this->preg5op4 = $p5op4;
      $this->preg6op1 = $p6op1;
      $this->preg6op2 = $p6op2;
      $this->preg6op3 = $p6op3;
      $this->preg6op4 = $p6op4;
      $this->preg7op1 = $p7op1;
      $this->preg7op2 = $p7op2;
      $this->preg7op3 = $p7op3;
      $this->preg7op4 = $p7op4;
      $this->preg8op1 = $p8op1;
      $this->preg8op2 = $p8op2;
      $this->preg8op3 = $p8op3;
      $this->preg8op4 = $p8op4;
      $this->preg9op1 = $p9op1;
      $this->preg9op2 = $p9op2;
      $this->preg9op3 = $p9op3;
      $this->preg9op4 = $p9op4;
      $this->preg10op1 = $p10op1;
      $this->preg10op2 = $p10op2;
      $this->preg10op3 = $p10op3;
      $this->preg10op4 = $p10op4;
      $this->preg11op1 = $p11op1;
      $this->preg11op2 = $p11op2;
      $this->preg11op3 = $p11op3;
      $this->preg11op4 = $p11op4;
      $this->preg12op1 =$p12op1;
      $this->preg12op2 =$p12op2;
      $this->preg12op3 =$p12op3;
      $this->preg12op4 =$p12op4;
      $this->preg13op1 = $p13op1;
      $this->preg13op2 = $p13op2;
      $this->preg13op3 = $p13op3;
      $this->preg13op4 = $p13op4;
      $this->preg14op1 = $p14op1;
      $this->preg14op2 = $p14op2;
      $this->preg14op3 = $p14op3;
      $this->preg14op4 = $p14op4;
      $this->preg15op1 = $p15op1;
      $this->preg15op2 = $p15op2;
      $this->preg15op3 = $p15op3;
      $this->preg15op4 = $p15op4;
      $this->preg16op1 = $p16op1;
      $this->preg16op2 = $p16op2;
      $this->preg16op3 = $p16op3;
      $this->preg16op4 = $p16op4;
      $this->preg17op1 = $p17op1;
      $this->preg17op2 = $p17op2;
      $this->preg17op3 = $p17op3;
      $this->preg17op4 = $p17op4;
      $this->preg18op1 = $p18op1;
      $this->preg18op2 = $p18op2;
      $this->preg18op3 = $p18op3;
      $this->preg18op4 = $p18op4;
      $this->preg19op1 = $p19op1;
      $this->preg19op2 = $p19op2;
      $this->preg19op3 = $p19op3;
      $this->preg19op4 = $p19op4;
      $this->preg20op1 = $p20op1;
      $this->preg20op2 = $p20op2;
      $this->preg20op3 = $p20op3;
      $this->preg20op4 = $p20op4;
      $this->preg21op1 = $p21op1;
      $this->preg21op2 = $p21op2;
      $this->preg21op3 = $p21op3;
      $this->preg21op4 = $p21op4;
      $this->preg22op1 = $p22op1;
      $this->preg22op2 = $p22op2;
      $this->preg22op3 = $p22op3;
      $this->preg22op4 = $p22op4;
      $this->colorAmarillo=$colorAmarillo;
      $this->colorRojo=$colorRojo;
      $this->colorAzul=$colorAzul;
      $this->colorVerde=$colorVerde;
      $this->valoracion=$valoracion;
      $this->id_Usuario=$id_Usuario;

      $sql = "INSERT INTO t_colorcomunicacion
              VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                      ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                      ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                      ?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $insert = $this->conexion->prepare($sql);
      $arrayData = array($this->preg1op1,$this->preg1op2,$this->preg1op3,$this->preg1op4,$this->preg2op1,$this->preg2op2,$this->preg2op3,$this->preg2op4,$this->preg3op1,$this->preg3op2,$this->preg3op3,$this->preg3op4,
                         $this->preg4op1,$this->preg4op2,$this->preg4op3,$this->preg4op4,$this->preg5op1,$this->preg5op2,$this->preg5op3,$this->preg5op4,$this->preg6op1,$this->preg6op2,$this->preg6op3,$this->preg6op4,
                         $this->preg7op1,$this->preg7op2,$this->preg7op3,$this->preg7op4,$this->preg8op1,$this->preg8op2,$this->preg8op3,$this->preg8op4,$this->preg9op1,$this->preg9op2,$this->preg9op3,$this->preg9op4,
                         $this->preg10op1,$this->preg10op2,$this->preg10op3,$this->preg10op4,$this->preg11op1,$this->preg11op2,$this->preg11op3,$this->preg11op4,$this->preg12op1,$this->preg12op2,$this->preg12op3,$this->preg12op4,
                         $this->preg13op1,$this->preg13op2,$this->preg13op3,$this->preg13op4,$this->preg14op1,$this->preg14op2,$this->preg14op3,$this->preg14op4,$this->preg15op1,$this->preg15op2,$this->preg15op3,$this->preg15op4,
                         $this->preg16op1,$this->preg16op2,$this->preg16op3,$this->preg16op4,$this->preg17op1,$this->preg17op2,$this->preg17op3,$this->preg17op4,$this->preg18op1,$this->preg18op2,$this->preg18op3,$this->preg18op4,
                         $this->preg19op1,$this->preg19op2,$this->preg19op3,$this->preg19op4,$this->preg20op1,$this->preg20op2,$this->preg20op3,$this->preg20op4,$this->preg21op1,$this->preg21op2,$this->preg21op3,$this->preg21op4,
                         $this->preg22op1,$this->preg22op2,$this->preg22op3,$this->preg22op4, $this->colorAmarillo,$this->colorRojo, $this->colorAzul, $this->colorVerde,$this->valoracion,$this->id_Usuario);
      $resInsert= $insert->execute($arrayData);
      $idInsert = $this->conexion->lastInsertId();
      return $idInsert;
    }
    public function validaEncuesta2(int $id_Usuario){
        $sql ="SELECT id_Usuario FROM t_colorcomunicacion WHERE id_Usuario =?";
        $query = $this->conexion->prepare($sql);
        $arrayData = array($id_Usuario);
        $query->execute($arrayData);
        $request=$query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }

    public function editarEncuesta2(int $p1op1,int $p1op2,int $p1op3,int $p1op4, int $p2op1,int $p2op2,int $p2op3,int $p2op4, int $p3op1,int $p3op2,int $p3op3,int $p3op4, int $p4op1,int $p4op2,int $p4op3,int $p4op4,
                                    int $p5op1,int $p5op2,int $p5op3,int $p5op4,int $p6op1,int $p6op2,int $p6op3,int $p6op4, int $p7op1,int $p7op2,int $p7op3,int $p7op4, int $p8op1,int $p8op2,int $p8op3,int $p8op4,
                                    int $p9op1,int $p9op2,int $p9op3, int $p9op4,int $p10op1,int $p10op2,int $p10op3,int $p10op4,int $p11op1,int $p11op2,int $p11op3,int $p11op4, int $p12op1,int $p12op2,int $p12op3,int $p12op4,
                                    int $p13op1,int $p13op2,int $p13op3,int $p13op4,int $p14op1,int $p14op2,int $p14op3,int $p14op4,int $p15op1,int $p15op2,int $p15op3,int $p15op4,int $p16op1,int $p16op2,int $p16op3,int $p16op4,
                                    int $p17op1,int $p17op2,int $p17op3,int $p17op4,int $p18op1,int $p18op2,int $p18op3,int $p18op4,int $p19op1,int $p19op2,int $p19op3,int $p19op4,int $p20op1,int $p20op2,int $p20op3,int $p20op4,
                                    int $p21op1, int $p21op2,int $p21op3,int $p21op4,int $p22op1,int $p22op2,int $p22op3,int $p22op4, String $colorAmarillo, String $colorRojo, String $colorAzul, String $colorVerde, int $valoracion, int $id_Usuario){

        $this->preg1op1 = $p1op1;
        $this->preg1op2 = $p1op2;
        $this->preg1op3 = $p1op3;
        $this->preg1op4 = $p1op4;
        $this->preg2op1 = $p2op1;
        $this->preg2op2 = $p2op2;
        $this->preg2op3 = $p2op3;
        $this->preg2op4 = $p2op4;
        $this->preg3op1 = $p3op1;
        $this->preg3op2 = $p3op2;
        $this->preg3op3 = $p3op3;
        $this->preg3op4 = $p3op4;
        $this->preg4op1 = $p4op1;
        $this->preg4op2 = $p4op2;
        $this->preg4op3 = $p4op3;
        $this->preg4op4 = $p4op4;
        $this->preg5op1 = $p5op1;
        $this->preg5op2 = $p5op2;
        $this->preg5op3 = $p5op3;
        $this->preg5op4 = $p5op4;
        $this->preg6op1 = $p6op1;
        $this->preg6op2 = $p6op2;
        $this->preg6op3 = $p6op3;
        $this->preg6op4 = $p6op4;
        $this->preg7op1 = $p7op1;
        $this->preg7op2 = $p7op2;
        $this->preg7op3 = $p7op3;
        $this->preg7op4 = $p7op4;
        $this->preg8op1 = $p8op1;
        $this->preg8op2 = $p8op2;
        $this->preg8op3 = $p8op3;
        $this->preg8op4 = $p8op4;
        $this->preg9op1 = $p9op1;
        $this->preg9op2 = $p9op2;
        $this->preg9op3 = $p9op3;
        $this->preg9op4 = $p9op4;
        $this->preg10op1 = $p10op1;
        $this->preg10op2 = $p10op2;
        $this->preg10op3 = $p10op3;
        $this->preg10op4 = $p10op4;
        $this->preg11op1 = $p11op1;
        $this->preg11op2 = $p11op2;
        $this->preg11op3 = $p11op3;
        $this->preg11op4 = $p11op4;
        $this->preg12op1 =$p12op1;
        $this->preg12op2 =$p12op2;
        $this->preg12op3 =$p12op3;
        $this->preg12op4 =$p12op4;
        $this->preg13op1 = $p13op1;
        $this->preg13op2 = $p13op2;
        $this->preg13op3 = $p13op3;
        $this->preg13op4 = $p13op4;
        $this->preg14op1 = $p14op1;
        $this->preg14op2 = $p14op2;
        $this->preg14op3 = $p14op3;
        $this->preg14op4 = $p14op4;
        $this->preg15op1 = $p15op1;
        $this->preg15op2 = $p15op2;
        $this->preg15op3 = $p15op3;
        $this->preg15op4 = $p15op4;
        $this->preg16op1 = $p16op1;
        $this->preg16op2 = $p16op2;
        $this->preg16op3 = $p16op3;
        $this->preg16op4 = $p16op4;
        $this->preg17op1 = $p17op1;
        $this->preg17op2 = $p17op2;
        $this->preg17op3 = $p17op3;
        $this->preg17op4 = $p17op4;
        $this->preg18op1 = $p18op1;
        $this->preg18op2 = $p18op2;
        $this->preg18op3 = $p18op3;
        $this->preg18op4 = $p18op4;
        $this->preg19op1 = $p19op1;
        $this->preg19op2 = $p19op2;
        $this->preg19op3 = $p19op3;
        $this->preg19op4 = $p19op4;
        $this->preg20op1 = $p20op1;
        $this->preg20op2 = $p20op2;
        $this->preg20op3 = $p20op3;
        $this->preg20op4 = $p20op4;
        $this->preg21op1 = $p21op1;
        $this->preg21op2 = $p21op2;
        $this->preg21op3 = $p21op3;
        $this->preg21op4 = $p21op4;
        $this->preg22op1 = $p22op1;
        $this->preg22op2 = $p22op2;
        $this->preg22op3 = $p22op3;
        $this->preg22op4 = $p22op4;
        $this->colorAmarillo=$colorAmarillo;
        $this->colorRojo=$colorRojo;
        $this->colorAzul=$colorAzul;
        $this->colorVerde=$colorVerde;
        $this->valoracion=$valoracion;
        $this->id_Usuario=$id_Usuario;

        $sql="UPDATE t_colorcomunicacion SET
                preg1op1=?,preg1op2=?,preg1op3=?,preg1op4=?,
                preg2op1=?,preg2op2=?,preg2op3=?,preg2op4=?,
                preg3op1=?,preg3op2=?,preg3op3=?,preg3op4=?,
                preg4op1=?,preg4op2=?,preg4op3=?,preg4op4=?,
                preg5op1=?,preg5op2=?,preg5op3=?,preg5op4=?,
                preg6op1=?,preg6op2=?,preg6op3=?,preg6op4=?,
                preg7op1=?,preg7op2=?,preg7op3=?,preg7op4=?,
                preg8op1=?,preg8op2=?,preg8op3=?,preg8op4=?,
                preg9op1=?,preg9op2=?,preg9op3=?,preg9op4=?,
                preg10op1=?,preg10op2=?,preg10op3=?,preg10op4=?,
                preg11op1=?,preg11op2=?,preg11op3=?,preg11op4=?,
                preg12op1=?,preg12op2=?,preg12op3=?,preg12op4=?,
                preg13op1=?,preg13op2=?,preg13op3=?,preg13op4=?,
                preg14op1=?,preg14op2=?,preg14op3=?,preg14op4=?,
                preg15op1=?,preg15op2=?,preg15op3=?,preg15op4=?,
                preg16op1=?,preg16op2=?,preg16op3=?,preg16op4=?,
                preg17op1=?,preg17op2=?,preg17op3=?,preg17op4=?,
                preg18op1=?,preg18op2=?,preg18op3=?,preg18op4=?,
                preg19op1=?,preg19op2=?,preg19op3=?,preg19op4=?,
                preg20op1=?,preg20op2=?,preg20op3=?,preg20op4=?,
                preg21op1=?,preg21op2=?,preg21op3=?,preg21op4=?,
                preg22op1=?,preg22op2=?,preg22op3=?,preg22op4=?,
                colorAmarillo=?,colorRojo=?,colorAzul=?,colorVerde=?,
                valoracion=?
              WHERE id_Usuario=?";

        $update = $this->conexion->prepare($sql);
        $arrayData = array($this->preg1op1,$this->preg1op2,$this->preg1op3,$this->preg1op4,$this->preg2op1,$this->preg2op2,$this->preg2op3,$this->preg2op4,$this->preg3op1,$this->preg3op2,$this->preg3op3,$this->preg3op4,
            $this->preg4op1,$this->preg4op2,$this->preg4op3,$this->preg4op4,$this->preg5op1,$this->preg5op2,$this->preg5op3,$this->preg5op4,$this->preg6op1,$this->preg6op2,$this->preg6op3,$this->preg6op4,
            $this->preg7op1,$this->preg7op2,$this->preg7op3,$this->preg7op4,$this->preg8op1,$this->preg8op2,$this->preg8op3,$this->preg8op4,$this->preg9op1,$this->preg9op2,$this->preg9op3,$this->preg9op4,
            $this->preg10op1,$this->preg10op2,$this->preg10op3,$this->preg10op4,$this->preg11op1,$this->preg11op2,$this->preg11op3,$this->preg11op4,$this->preg12op1,$this->preg12op2,$this->preg12op3,$this->preg12op4,
            $this->preg13op1,$this->preg13op2,$this->preg13op3,$this->preg13op4,$this->preg14op1,$this->preg14op2,$this->preg14op3,$this->preg14op4,$this->preg15op1,$this->preg15op2,$this->preg15op3,$this->preg15op4,
            $this->preg16op1,$this->preg16op2,$this->preg16op3,$this->preg16op4,$this->preg17op1,$this->preg17op2,$this->preg17op3,$this->preg17op4,$this->preg18op1,$this->preg18op2,$this->preg18op3,$this->preg18op4,
            $this->preg19op1,$this->preg19op2,$this->preg19op3,$this->preg19op4,$this->preg20op1,$this->preg20op2,$this->preg20op3,$this->preg20op4,$this->preg21op1,$this->preg21op2,$this->preg21op3,$this->preg21op4,
            $this->preg22op1,$this->preg22op2,$this->preg22op3,$this->preg22op4, $this->colorAmarillo,$this->colorRojo, $this->colorAzul, $this->colorVerde,$this->valoracion,$this->id_Usuario);
        $resExecute =$update->execute($arrayData);
        return $resExecute;
    }

    public function buscaColor(int $id_Usuario){
        $sql ="SELECT colorAmarillo,colorRojo,colorAzul,colorVerde  FROM t_colorcomunicacion WHERE id_Usuario =?";
        $query = $this->conexion->prepare($sql);
        $arrayData = array($id_Usuario);
        $query->execute($arrayData);
        $request=$query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }
}
?>
