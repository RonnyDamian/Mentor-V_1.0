<?php

  session_start();

  require_once ("autoload.php");
  $obj=new Encuesta2();
  $id_Usuario = $_SESSION['id_Usuario'];
  $preg1op1 =isset($_POST['preg1op1'])? $_POST['preg1op1'] :'';
  $preg1op2 =isset($_POST['preg1op2'])? $_POST['preg1op2'] :'';
  $preg1op3 =isset($_POST['preg1op3'])? $_POST['preg1op3'] :'';
  $preg1op4 =isset($_POST['preg1op4'])? $_POST['preg1op4'] :'';
  $preg2op1 =isset($_POST['preg2op1'])?$_POST['preg2op1']:'';
  $preg2op2 =isset($_POST['preg2op2'])?$_POST['preg2op2']:'';
  $preg2op3 =isset($_POST['preg2op3'])?$_POST['preg2op3']:'';
  $preg2op4 =isset($_POST['preg2op4'])?$_POST['preg2op4']:'';
  $preg3op1 =isset($_POST['preg3op1'])? $_POST['preg3op1'] :'';
  $preg3op2 =isset($_POST['preg3op2'])? $_POST['preg3op2'] :'';
  $preg3op3 =isset($_POST['preg3op3'])? $_POST['preg3op3'] :'';
  $preg3op4 =isset($_POST['preg3op4'])? $_POST['preg3op4'] :'';
  $preg4op1 =isset($_POST['preg4op1'])?$_POST['preg4op1']:'';
  $preg4op2 =isset($_POST['preg4op2'])?$_POST['preg4op2']:'';
  $preg4op3 =isset($_POST['preg4op3'])?$_POST['preg4op3']:'';
  $preg4op4 =isset($_POST['preg4op4'])?$_POST['preg4op4']:'';
  $preg5op1 =isset($_POST['preg5op1'])? $_POST['preg5op1'] :'';
  $preg5op2 =isset($_POST['preg5op2'])? $_POST['preg5op2'] :'';
  $preg5op3 =isset($_POST['preg5op3'])? $_POST['preg5op3'] :'';
  $preg5op4 =isset($_POST['preg5op4'])? $_POST['preg5op4'] :'';
  $preg6op1 =isset($_POST['preg6op1'])?$_POST['preg6op1']:'';
  $preg6op2 =isset($_POST['preg6op2'])?$_POST['preg6op2']:'';
  $preg6op3 =isset($_POST['preg6op3'])?$_POST['preg6op3']:'';
  $preg6op4 =isset($_POST['preg6op4'])?$_POST['preg6op4']:'';
  $preg7op1 =isset($_POST['preg7op1'])? $_POST['preg7op1'] :'';
  $preg7op2 =isset($_POST['preg7op2'])? $_POST['preg7op2'] :'';
  $preg7op3 =isset($_POST['preg7op3'])? $_POST['preg7op3'] :'';
  $preg7op4 =isset($_POST['preg7op4'])? $_POST['preg7op4'] :'';
  $preg8op1 =isset($_POST['preg8op1'])?$_POST['preg8op1']:'';
  $preg8op2 =isset($_POST['preg8op2'])?$_POST['preg8op2']:'';
  $preg8op3 =isset($_POST['preg8op3'])?$_POST['preg8op3']:'';
  $preg8op4 =isset($_POST['preg8op4'])?$_POST['preg8op4']:'';
  $preg9op1 =isset($_POST['preg9op1'])? $_POST['preg9op1'] :'';
  $preg9op2 =isset($_POST['preg9op2'])? $_POST['preg9op2'] :'';
  $preg9op3 =isset($_POST['preg9op3'])? $_POST['preg9op3'] :'';
  $preg9op4 =isset($_POST['preg9op4'])? $_POST['preg9op4'] :'';
  $preg10op1 =isset($_POST['preg10op1'])?$_POST['preg10op1']:'';
  $preg10op2 =isset($_POST['preg10op2'])?$_POST['preg10op2']:'';
  $preg10op3 =isset($_POST['preg10op3'])?$_POST['preg10op3']:'';
  $preg10op4 =isset($_POST['preg10op4'])?$_POST['preg10op4']:'';
  $preg11op1 =isset($_POST['preg11op1'])? $_POST['preg11op1'] :'';
  $preg11op2 =isset($_POST['preg11op2'])? $_POST['preg11op2'] :'';
  $preg11op3 =isset($_POST['preg11op3'])? $_POST['preg11op3'] :'';
  $preg11op4 =isset($_POST['preg11op4'])? $_POST['preg11op4'] :'';
  $preg12op1 =isset($_POST['preg12op1'])?$_POST['preg12op1']:'';
  $preg12op2 =isset($_POST['preg12op2'])?$_POST['preg12op2']:'';
  $preg12op3 =isset($_POST['preg12op3'])?$_POST['preg12op3']:'';
  $preg12op4 =isset($_POST['preg12op4'])?$_POST['preg12op4']:'';
  $preg13op1 =isset($_POST['preg13op1'])? $_POST['preg13op1'] :'';
  $preg13op2 =isset($_POST['preg13op2'])? $_POST['preg13op2'] :'';
  $preg13op3 =isset($_POST['preg13op3'])? $_POST['preg13op3'] :'';
  $preg13op4 =isset($_POST['preg13op4'])? $_POST['preg13op4'] :'';
  $preg14op1 =isset($_POST['preg14op1'])?$_POST['preg14op1']:'';
  $preg14op2 =isset($_POST['preg14op2'])?$_POST['preg14op2']:'';
  $preg14op3 =isset($_POST['preg14op3'])?$_POST['preg14op3']:'';
  $preg14op4 =isset($_POST['preg14op4'])?$_POST['preg14op4']:'';
  $preg15op1 =isset($_POST['preg15op1'])? $_POST['preg15op1'] :'';
  $preg15op2 =isset($_POST['preg15op2'])? $_POST['preg15op2'] :'';
  $preg15op3 =isset($_POST['preg15op3'])? $_POST['preg15op3'] :'';
  $preg15op4 =isset($_POST['preg15op4'])? $_POST['preg15op4'] :'';
  $preg16op1 =isset($_POST['preg16op1'])?$_POST['preg16op1']:'';
  $preg16op2 =isset($_POST['preg16op2'])?$_POST['preg16op2']:'';
  $preg16op3 =isset($_POST['preg16op3'])?$_POST['preg16op3']:'';
  $preg16op4 =isset($_POST['preg16op4'])?$_POST['preg16op4']:'';

  $preg17op1 =isset($_POST['preg17op1'])? $_POST['preg17op1'] :'';
  $preg17op2 =isset($_POST['preg17op2'])? $_POST['preg17op2'] :'';
  $preg17op3 =isset($_POST['preg17op3'])? $_POST['preg17op3'] :'';
  $preg17op4 =isset($_POST['preg17op4'])? $_POST['preg17op4'] :'';
  $preg18op1 =isset($_POST['preg18op1'])?$_POST['preg18op1']:'';
  $preg18op2 =isset($_POST['preg18op2'])?$_POST['preg18op2']:'';
  $preg18op3 =isset($_POST['preg18op3'])?$_POST['preg18op3']:'';
  $preg18op4 =isset($_POST['preg18op4'])?$_POST['preg18op4']:'';
  $preg19op1 =isset($_POST['preg19op1'])? $_POST['preg19op1'] :'';
  $preg19op2 =isset($_POST['preg19op2'])? $_POST['preg19op2'] :'';
  $preg19op3 =isset($_POST['preg19op3'])? $_POST['preg19op3'] :'';
  $preg19op4 =isset($_POST['preg19op4'])? $_POST['preg19op4'] :'';
  $preg20op1 =isset($_POST['preg20op1'])?$_POST['preg20op1']:'';
  $preg20op2 =isset($_POST['preg20op2'])?$_POST['preg20op2']:'';
  $preg20op3 =isset($_POST['preg20op3'])?$_POST['preg20op3']:'';
  $preg20op4 =isset($_POST['preg20op4'])?$_POST['preg20op4']:'';
  $preg21op1 =isset($_POST['preg21op1'])? $_POST['preg21op1'] :'';
  $preg21op2 =isset($_POST['preg21op2'])? $_POST['preg21op2'] :'';
  $preg21op3 =isset($_POST['preg21op3'])? $_POST['preg21op3'] :'';
  $preg21op4 =isset($_POST['preg21op4'])? $_POST['preg21op4'] :'';
  $preg22op1 =isset($_POST['preg22op1'])?$_POST['preg22op1']:'';
  $preg22op2 =isset($_POST['preg22op2'])?$_POST['preg22op2']:'';
  $preg22op3 =isset($_POST['preg22op3'])?$_POST['preg22op3']:'';
  $preg22op4 =isset($_POST['preg22op4'])?$_POST['preg22op4']:'';
  $valoracion=0;
   /*Procedimiento*/
   $resultSum=($preg1op1+$preg1op2+$preg1op3+$preg1op4+$preg2op1+$preg2op2+$preg2op3+$preg2op4+$preg3op1+$preg3op2+$preg3op3+$preg3op4+
               $preg4op1+$preg4op2+$preg4op3+$preg4op4+$preg5op1+$preg5op2+$preg5op3+$preg5op4+$preg6op1+$preg6op2+$preg6op3+$preg6op4+
               $preg7op1+$preg7op2+$preg7op3+$preg7op4+$preg8op1+$preg8op2+$preg8op3+$preg8op4+$preg9op1+$preg9op2+$preg9op3+$preg9op4+
               $preg10op1+$preg10op2+$preg10op3+$preg10op4+$preg11op1+$preg11op2+$preg11op3+$preg11op4+$preg12op1+$preg12op2+$preg12op3+$preg12op4+
               $preg13op1+$preg13op2+$preg13op3+$preg13op4+$preg14op1+$preg14op2+$preg14op3+$preg14op4+$preg15op1+$preg15op2+$preg15op3+$preg15op4+
               $preg16op1+$preg16op2+$preg16op3+$preg16op4+$preg17op1+$preg17op2+$preg17op3+$preg17op4+$preg18op1+$preg18op2+$preg18op3+$preg18op4+
               $preg19op1+$preg19op2+$preg19op3+$preg19op4+$preg20op1+$preg20op2+$preg20op3+$preg20op4+$preg21op1+$preg21op2+$preg21op3+$preg21op4+$preg22op1+$preg22op2+$preg22op3+$preg22op4);

    
    /*Color Amarillo*/
   $suma = ($preg1op1+$preg2op1+$preg3op1+$preg4op1+$preg5op1+$preg6op1+$preg7op1+$preg8op1+$preg9op1+$preg10op1+$preg11op1+
            $preg12op1+$preg13op1+$preg14op1+$preg15op1+$preg16op1+$preg17op1+$preg18op1+$preg19op1+$preg20op1+$preg21op1+$preg22op1);
  //Color Rojo
   $suma2 = ($preg1op2+$preg2op2+$preg3op2+$preg4op2+$preg5op2+$preg6op2+$preg7op2+$preg8op2+$preg9op2+$preg10op2+$preg11op2+
            $preg12op2+$preg13op2+$preg14op2+$preg15op2+$preg16op2+$preg17op2+$preg18op2+$preg19op2+$preg20op2+$preg21op2+$preg22op2);
  //Color Azul
   $suma3 = ($preg1op3+$preg2op3+$preg3op3+$preg4op3+$preg5op3+$preg6op3+$preg7op3+$preg8op3+$preg9op3+$preg10op3+$preg11op3+
            $preg12op3+$preg13op3+$preg14op3+$preg15op3+$preg16op3+$preg17op3+$preg18op3+$preg19op3+$preg20op3+$preg21op3+$preg22op3);
  //Color Verde
   $suma4 = ($preg1op4+$preg2op4+$preg3op4+$preg4op4+$preg5op4+$preg6op4+$preg7op4+$preg8op4+$preg9op4+$preg10op4+$preg11op4+
            $preg12op4+$preg13op4+$preg14op4+$preg15op4+$preg16op4+$preg17op4+$preg18op4+$preg19op4+$preg20op4+$preg21op4+$preg22op4);

  $colorAmarillo=(($suma*100)/$resultSum);
  $colorRojo = (($suma2*100)/$resultSum);
  $colorAzul=(($suma3*100)/$resultSum);
  $colorVerde = (($suma4*100)/$resultSum);

  $colorAmarillo= number_format($colorAmarillo, 2);
  $colorRojo=number_format($colorRojo, 2);
  $colorAzul=number_format($colorAzul, 2);
  $colorVerde = number_format($colorVerde, 2);


if($colorAmarillo>$colorRojo && $colorAmarillo>$colorAzul && $colorAmarillo>$colorVerde){
  $valoracion=1;
}else if($colorRojo>$colorAmarillo && $colorRojo>$colorAzul && $colorRojo>$colorVerde){
  $valoracion=2;
}else if($colorAzul>$colorAmarillo && $colorAzul>$colorRojo && $colorAzul>$colorVerde){
  $valoracion=3;
}else if($colorVerde>$colorAmarillo && $colorVerde>$colorRojo && $colorVerde>$colorAzul){
  $valoracion=4;
}else if($rojo== $amarillo || $rojo==$azul || $rojo==$verde){
  $valoracion=2;
}else if ($verde==$azul || $verde==$amarillo){
  $valoracion=4;
}else if($amarillo==$azul){
  $valoracion=1;
}






  $colorAmarillo=strval($colorAmarillo);
  $colorRojo=strval($colorRojo);
  $colorAzul=strval($colorAzul);
  $colorVerde=strval($colorVerde);



  $register=$obj->validaEncuesta2($id_Usuario);
  if($register>0){
    $register = $obj->editarEncuesta2($preg1op1,$preg1op2,$preg1op3,$preg1op4,$preg2op1,$preg2op2,$preg2op3,$preg2op4,$preg3op1,$preg3op2,$preg3op3,$preg3op4,
        $preg4op1,$preg4op2,$preg4op3,$preg4op4,$preg5op1,$preg5op2,$preg5op3,$preg5op4,$preg6op1,$preg6op2,$preg6op3,$preg6op4,$preg7op1,$preg7op2,$preg7op3,$preg7op4,
        $preg8op1,$preg8op2,$preg8op3,$preg8op4,$preg9op1,$preg9op2,$preg9op3,$preg9op4,$preg10op1,$preg10op2,$preg10op3,$preg10op4,$preg11op1,$preg11op2,$preg11op3,$preg11op4,
        $preg12op1,$preg12op2,$preg12op3,$preg12op4,$preg13op1,$preg13op2,$preg13op3,$preg13op4,$preg14op1,$preg14op2,$preg14op3,$preg14op4,$preg15op1,$preg15op2,$preg15op3,$preg15op4,
        $preg16op1,$preg16op2,$preg16op3,$preg16op4,$preg17op1,$preg17op2,$preg17op3,$preg17op4,$preg18op1,$preg18op2,$preg18op3,$preg18op4,$preg19op1,$preg19op2,$preg19op3,$preg19op4,
        $preg20op1,$preg20op2,$preg20op3,$preg20op4,$preg21op1,$preg21op2,$preg21op3,$preg21op4,$preg22op1,$preg22op2,$preg22op3,$preg22op4,$colorAmarillo,$colorRojo,$colorAzul,
        $colorVerde,$valoracion,$id_Usuario);

    if($register>0){
      $_SESSION['id_Usuario']=$id_Usuario;
      require_once('modal2.php');
      //header("Location:questions3.php");
    }else{
      echo "Error de Actualización";
      die();
    }

  }else{
    $register = $obj->registrarEncuesta($preg1op1,$preg1op2,$preg1op3,$preg1op4,$preg2op1,$preg2op2,$preg2op3,$preg2op4,$preg3op1,$preg3op2,$preg3op3,$preg3op4,
        $preg4op1,$preg4op2,$preg4op3,$preg4op4,$preg5op1,$preg5op2,$preg5op3,$preg5op4,$preg6op1,$preg6op2,$preg6op3,$preg6op4,$preg7op1,$preg7op2,$preg7op3,$preg7op4,
        $preg8op1,$preg8op2,$preg8op3,$preg8op4,$preg9op1,$preg9op2,$preg9op3,$preg9op4,$preg10op1,$preg10op2,$preg10op3,$preg10op4,$preg11op1,$preg11op2,$preg11op3,$preg11op4,
        $preg12op1,$preg12op2,$preg12op3,$preg12op4,$preg13op1,$preg13op2,$preg13op3,$preg13op4,$preg14op1,$preg14op2,$preg14op3,$preg14op4,$preg15op1,$preg15op2,$preg15op3,$preg15op4,
        $preg16op1,$preg16op2,$preg16op3,$preg16op4,$preg17op1,$preg17op2,$preg17op3,$preg17op4,$preg18op1,$preg18op2,$preg18op3,$preg18op4,$preg19op1,$preg19op2,$preg19op3,$preg19op4,
        $preg20op1,$preg20op2,$preg20op3,$preg20op4,$preg21op1,$preg21op2,$preg21op3,$preg21op4,$preg22op1,$preg22op2,$preg22op3,$preg22op4,$colorAmarillo,$colorRojo,$colorAzul,
        $colorVerde,$valoracion,$id_Usuario);

    if($register>0){
      $_SESSION['id_Usuario']=$id_Usuario;
      require_once('modal2.php');
      //header("Location:questions3.php");
    }else{
      echo "Error de registro";
      die();
    }
  }



?>
