<?php
  session_start();
  require_once ("autoload.php");
  $objEncuesta = new Encuesta();
  $id_Usuario =$_SESSION['id_Usuario'];
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
   $sentirPensar=($questionOne + $questionThree+$questionFive+ $questionSeven+$questionNine+$questionEleven+ $questionThirTeen);
   $actuarObservar = ($questionTwo +$questionFour+$questionSix+$questionEight+$questionTen+$questionTwelve+$questionFourTeen);
  $animodo="";
  if(($actuarObservar>=6 && $actuarObservar<=25) && ($sentirPensar>=6 && $sentirPensar<=20)){
    $animodo="Delfin";
  }else if(($actuarObservar>=6 && $actuarObservar<=20) && ($sentirPensar==21 || $sentirPensar==22)){
    $animodo="Delfin";  
  }
  else if(($actuarObservar>=26 && $actuarObservar<=42) && ($sentirPensar>=6 && $sentirPensar<=20)){
    $animodo="Abeja";
  }else if(($actuarObservar>=28 && $actuarObservar<=42) && ($sentirPensar>=21 && $sentirPensar<=26 )){
    $animodo="Abeja";
  }else if(($actuarObservar>=6 && $actuarObservar<=22 ) && ($sentirPensar>=29 && $sentirPensar<=42)){
    $animodo="Buho";
  }else if(($actuarObservar>=6 && $actuarObservar<=20 ) && ($sentirPensar>=23 || $sentirPensar<=28)){
    $animodo="Buho";	
  }else if(($actuarObservar>=23 && $actuarObservar<=42 ) && ($sentirPensar>=29 && $sentirPensar<=42)){
    $animodo="Castor";
  }else if(($actuarObservar>=28 && $actuarObservar<=42 ) && ($sentirPensar==27 || $sentirPensar==28)){
    $animodo="Castor";
  }else if(($sentirPensar>=21 && $sentirPensar<=28 )&& ($actuarObservar>=21 && $actuarObservar<=27)){
    $animodo ="Camaleon";
  }else{
    $animodo="No definido";
  }
  //registar encuesta

   $validate = $objEncuesta->validaEncuesta($id_Usuario);
  if($validate>0){
       $register = $objEncuesta->editarEncuesta($questionOne,$questionTwo,$questionThree,$questionFour,$questionFive,$questionSix,$questionSeven,$questionEight,$questionNine,$questionTen,$questionEleven,$questionTwelve,$questionThirTeen,$questionFourTeen,$sentirPensar,$actuarObservar,$animodo,$id_Usuario);
    if($register>0){
      $_SESSION['id_Usuario']=11;
      require_once("modal.php");
      //header("Location:questions2.php");
    }else{
      echo "Error de Actualización";
      die();
    }
  }else{
    $register = $objEncuesta->registrarEncuesta($questionOne,$questionTwo,$questionThree,$questionFour,$questionFive,$questionSix,$questionSeven,$questionEight,$questionNine,$questionTen,$questionEleven,$questionTwelve,$questionThirTeen,$questionFourTeen,$sentirPensar,$actuarObservar,$animodo,$id_Usuario);
    if($register>0){
      $_SESSION['id_Usuario']=$id_Usuario;
      require_once("modal.php");
      //header("Location:questions2.php");
    }else{
      echo "Error de registro";
      die();
    }
  }
?>
