<?php
session_start();
require_once ("autoload.php");
$objEncuesta = new Encuesta5();
$id_Usuario =66; //$_SESSION['id_Usuario'];
$questionOne =isset($_POST['preg1'])? $_POST['preg1'] :'';
$questionTwo =isset($_POST['preg2'])?$_POST['preg2']:'';
$questionThree=isset($_POST['preg3'])? $_POST['preg3']:'';
$questionFour=isset($_POST['preg4'])?$_POST['preg4']:'';
$questionFive =isset($_POST['preg5'])? $_POST['preg5']:'';
$questionSix =isset($_POST['preg6'])? $_POST['preg6']:  '';
$questionSeven =isset($_POST['preg7'])? $_POST['preg7']:'';
$questionEight =isset($_POST['preg8'])? $_POST['preg8']:'';
$questionNine =isset($_POST['preg9'])? $_POST['preg9']:'';
$questionTen = isset($_POST['preg10'])?$_POST['preg10']:'';
$questionEleven =isset($_POST['preg11'])? $_POST['preg11']:'';
$questionTwelve =isset($_POST['preg12'])? $_POST['preg12']:'';

$arrayData=array($questionOne,$questionTwo,$questionThree,$questionFour,$questionFive,$questionSix,
    $questionSeven,$questionEight,$questionNine,$questionTen,$questionEleven,$questionTwelve);
$visual=0;

$auditivo=0;
$kinestesico=0;
$valoracion=0;
$contador=0;
while($contador<count($arrayData)){
  if($arrayData[$contador]==1){
    $visual+=1;
  }elseif($arrayData[$contador]==2){
    $auditivo+=1;
  }elseif($arrayData[$contador]==3){
    $kinestesico+=1;
  }
  $contador++;
}
if($visual>$auditivo && $visual>$kinestesico){
  $valoracion=1;
}elseif($auditivo>$visual && $auditivo>$kinestesico){
  $valoracion=2;
}else if($kinestesico>$visual && $kinestesico>$auditivo){
  $valoracion=3;
}else if($visual == $auditivo || $visual == $kinestesico || $auditivo== $kinestesico){
  $valoracion = 0;
}else if($auditivo == $visual && $auditivo== $kinestesico){
  $valoracion=0;
}
//registar encuesta

$register=$objEncuesta->validaEncuesta($id_Usuario);

if($register>0){
  $register = $objEncuesta->editarEncuesta($questionOne,$questionTwo,$questionThree,$questionFour,$questionFive,$questionSix,$questionSeven,$questionEight,$questionNine,$questionTen,$questionEleven,$questionTwelve,
      $visual,$auditivo, $kinestesico,$valoracion, $id_Usuario);

  if($register>0){
    $_SESSION['id_Usuario']=$id_Usuario;
    header("Location:nivelPersistencia.php");
  }else{
    echo "Error de actualización";
    die();
  }
}else{
  $register = $objEncuesta->registrarEncuesta($questionOne,$questionTwo,$questionThree,$questionFour,$questionFive,$questionSix,$questionSeven,$questionEight,$questionNine,$questionTen,$questionEleven,$questionTwelve,
      $visual,$auditivo, $kinestesico,$valoracion, $id_Usuario);
  if($register>0){
    $_SESSION['id_Usuario']=$id_Usuario;
    header("Location:nivelPersistencia.php");
  }else{
    echo "Error de registro";
    die();
  }
}
?>
