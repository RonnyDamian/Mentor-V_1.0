<?php

require_once("Empresa1.php");
$obj = new Empresa1();

$empresa = isset($_POST['empresa'])? $_POST['empresa']:"";
$clave =  isset($_POST['clave'])? $_POST['clave']:"";

$result = $obj->validacionModal($empresa,$clave);
if($result>0){
    echo  1;
}else{
    echo 0;
}

?>
