<?php
session_start();
require_once ("autoload.php");
$objEncuesta = new Encuesta3();
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


$cerebroIzq=($questionOne+$questionFive+$questionEight+$questionEleven+$questionTwelve+$questionFifTeen+
    $questionSixTeen+$questionTwentyTwo);
$cerebroCen=($questionTwo+$questionThirTeen+$questionSevenTeen+$questionEightTeen+$questionNineTeen+
    $questionTwentyOne+$questionTwentyThree);
$cerebroDer=($questionThree+$questionFour+$questionSix+$questionSeven+$questionNine+$questionTen+
    $questionFourTeen+$questionTwenty);

/*Valoración */

/*if($cerebroIzq>$cerebroDer && $cerebroIzq > $cerebroCen){
  $valoracion=1;
}elseif($cerebroCen>$cerebroIzq && $cerebroCen>$cerebroDer){
  $valoracion=2;
}else{
  $valoracion=3;
}*/

if($cerebroIzq > $cerebroCen && $cerebroIzq>$cerebroDer){
    $valoracion=1;
}else if($cerebroCen>$cerebroIzq && $cerebroCen>$cerebroDer){
    $valoracion=2;
}else if($cerebroDer>$cerebroCen && $cerebroDer>$cerebroIzq){
    $valoracion=3;
}else if($cerebroCen == $cerebroIzq || $cerebroCen== $cerebroDer){
    $valoracion=2;
}else if($cerebroIzq ==$cerebroDer){
    $valoracion=1;
}


$register = $objEncuesta->validaEncuesta3($id_Usuario);

if($register>0){
  $register=$objEncuesta->editarEncuesta($questionOne,$questionTwo,$questionThree,$questionFour,$questionFive,$questionSix,$questionSeven,$questionEight,$questionNine,$questionTen,$questionEleven,$questionTwelve,$questionThirTeen,$questionFourTeen,$questionFifTeen,
      $questionSixTeen,$questionSevenTeen,$questionEightTeen,$questionNineTeen,$questionTwenty,$questionTwentyOne,$questionTwentyTwo,$questionTwentyThree,$cerebroIzq,$cerebroCen,$cerebroDer,$valoracion,$id_Usuario);

  if($register>0){
    $_SESSION['id_Usuario']=$id_Usuario;
    require_once("modal3.php");
    //header("Location:questions4.php");

  }else{
    echo "Error de actualización";
    die();
  }

}else{
  $register = $objEncuesta->registrarEncuesta($questionOne,$questionTwo,$questionThree,$questionFour,$questionFive,$questionSix,$questionSeven,$questionEight,$questionNine,$questionTen,$questionEleven,$questionTwelve,$questionThirTeen,$questionFourTeen,$questionFifTeen,
      $questionSixTeen,$questionSevenTeen,$questionEightTeen,$questionNineTeen,$questionTwenty,$questionTwentyOne,$questionTwentyTwo,$questionTwentyThree,$cerebroIzq,$cerebroCen,$cerebroDer,$valoracion,$id_Usuario);

  if($register>0){
    $_SESSION['id_Usuario']=$id_Usuario;
    require_once("modal3.php");
    //header("Location:questions4.php");

  }else{
    echo "Error de registro";
    die();
  }
}
?>
