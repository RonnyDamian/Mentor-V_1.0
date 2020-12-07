<?php
session_start();
require_once ("autoload.php");
$objEncuesta = new Encuesta4();
$id_Usuario = $_SESSION['id_Usuario'];
$questionOne =isset($_POST['preg1'])? $_POST['preg1'] :'';
$questionTwo =isset($_POST['preg2'])?$_POST['preg2']:'';
$questionThree=isset($_POST['preg3'])? $_POST['preg3']:'';
$questionFour=isset($_POST['preg4'])?$_POST['preg4']:'';
$questionFive =isset($_POST['preg5'])? $_POST['preg5']:'';
$questionSix =isset($_POST['preg6'])? $_POST['preg6']:'';
$questionSeven =isset($_POST['preg7'])? $_POST['preg7']:'';
$questionEight =isset($_POST['preg8'])? $_POST['preg8']:'';
$questionNine =isset($_POST['preg9'])? $_POST['preg9']:'';
$questionTen = isset($_POST['preg10'])?$_POST['preg10']:'';
$questionEleven =isset($_POST['preg11'])? $_POST['preg11']:'';
$questionTwelve =isset($_POST['preg12'])? $_POST['preg12']:'';
$questionThirTeen =isset($_POST['preg13'])? $_POST['preg13']:'';
$questionFourTeen =isset($_POST['preg14'])? $_POST['preg14']:'';
$questionFifTeen =isset($_POST['preg15'])? $_POST['preg15']:'';
$questionSixTeen =isset($_POST['preg16'])? $_POST['preg16']:'';
$questionSevenTeen =isset($_POST['preg17'])? $_POST['preg17']:'';
$questionEightTeen =isset($_POST['preg18'])? $_POST['preg18']:'';
$questionNineTeen = isset($_POST['preg19'])?$_POST['preg19']:'';
$questionTwenty =isset($_POST['preg20'])? $_POST['preg20']:'';
$questionTwentyOne =isset($_POST['preg21'])? $_POST['preg21']:'';
$questionTwentyTwo =isset($_POST['preg22'])? $_POST['preg22']:'';
$questionTwentyThree=isset($_POST['preg23'])? $_POST['preg23']:'';
$questionTwentyFour =isset($_POST['preg24'])? $_POST['preg24']:'';
$questionTwentyFive =isset($_POST['preg25'])? $_POST['preg25']:'';
$questionTwentySix = isset($_POST['preg26'])?$_POST['preg26']:'';
$questionTwentySeven =isset($_POST['preg27'])? $_POST['preg27']:'';
$questionTwentyEight =isset($_POST['preg28'])? $_POST['preg28']:'';
$questionTwentyNine =isset($_POST['preg29'])? $_POST['preg29']:'';
$questionThirty=isset($_POST['preg30'])? $_POST['preg30']:'';
$cantidad=0;
$valoracion="";
$cualidad="";

$cantidad =($questionOne+$questionTwo+$questionThree+$questionFour+$questionFive+$questionSix+$questionSeven+$questionEight+$questionNine+$questionTen+
    $questionEleven+$questionTwelve+$questionThirTeen+$questionFourTeen+$questionFifTeen+$questionSixTeen+$questionSevenTeen+$questionEightTeen+
    $questionNineTeen+$questionTwenty+$questionTwentyOne+$questionTwentyTwo+$questionTwentyThree+$questionTwentyFour+$questionTwentyFive+$questionTwentySix+
    $questionTwentySeven+$questionTwentyEight+$questionTwentyNine+$questionThirty);

/*Inicio Averigua valoración*/
if($cantidad>=30 && $cantidad <=70){
  $valoracion="BAJO";
}elseif($cantidad>70 && $cantidad<=80){
  $valoracion="MEDIO";
}elseif ($cantidad >80 && $cantidad <=90){
  $valoracion="ALTO";
}else{
  $valoracion="NO MEDIDO";
}
/*Inicio averigua cualidad*/
if($cantidad>=30 && $cantidad<=60){
  $cualidad="Aparentemente no eres confiable para negociaciones complicadas";
}elseif($cantidad>60  && $cantidad<=65){
  $cualidad="La verdad no eres confiable como negociador";
}elseif($cantidad>65 && $cantidad <=70){
  $cualidad="Francamente eres un Negociador 'mediocre'";
}elseif($cantidad>70 && $cantidad<=75){
  $cualidad="Mas que negociador, eres 'manipulador'";
}elseif($cantidad>75 && $cantidad<=80){
  $cualidad="Eres un negociador 'de ocasion'";
}elseif($cantidad>80 && $cantidad <=85){
  $cualidad="Generalmente eres buen Negociador";
}elseif($cantidad>85 && $cantidad<=90){
  $cualidad="Generalmente eres buen Negociador";
}elseif($cantidad>30 && $cantidad>=0){
  $cualidad="No medido";
}



$register=$objEncuesta->validaEncuesta($id_Usuario);

if($register>0){
  $register = $objEncuesta->editarEncuesta($questionOne,$questionTwo,$questionThree,$questionFour,$questionFive,$questionSix,$questionSeven,$questionEight,$questionNine,$questionTen,$questionEleven,$questionTwelve,$questionThirTeen,$questionFourTeen,$questionFifTeen,
      $questionSixTeen,$questionSevenTeen,$questionEightTeen,$questionNineTeen,$questionTwenty,$questionTwentyOne,$questionTwentyTwo,$questionTwentyThree,$questionTwentyFour,$questionTwentyFive,$questionTwentySix,$questionTwentySeven,$questionTwentyEight,$questionTwentyNine,$questionThirty, $cantidad,$valoracion,$cualidad,$id_Usuario);

  if($register>0){
    $_SESSION['id_Usuario']=$id_Usuario;
    require_once('modal4.php');
    //header("Location:questions5.php");
  }else{
    echo "Error de registro";
    die();
  }
}else{
  $register = $objEncuesta->registrarEncuesta($questionOne,$questionTwo,$questionThree,$questionFour,$questionFive,$questionSix,$questionSeven,$questionEight,$questionNine,$questionTen,$questionEleven,$questionTwelve,$questionThirTeen,$questionFourTeen,$questionFifTeen,
      $questionSixTeen,$questionSevenTeen,$questionEightTeen,$questionNineTeen,$questionTwenty,$questionTwentyOne,$questionTwentyTwo,$questionTwentyThree,$questionTwentyFour,$questionTwentyFive,$questionTwentySix,$questionTwentySeven,$questionTwentyEight,$questionTwentyNine,$questionThirty, $cantidad,$valoracion,$cualidad,$id_Usuario);

  if($register>0){
    $_SESSION['id_Usuario']=$id_Usuario;
    require_once('modal4.php');
    //header("Location:questions5.php");
  }else{
    echo "Error de registro";
    die();
  }
}
?>
