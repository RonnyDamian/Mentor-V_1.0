<?php
session_start();
require_once ("autoload.php");
$objEncuesta = new Persistencia();
$id_Usuario = $_SESSION['id_Usuario'];
$animodo=0;
$colorComunicacion=0;
$tiposCerebro=0;
$formaNegociadora=0;
$valoracion=0;
$persistente="";
$register = $objEncuesta->calculaNivelPersistencia();

foreach($register as $value){
    $animodo=$value['animodo'];
    $colorComunicacion=$value['valoracion_Comunicacion'];
    $tiposCerebro=$value['tipos_Cerebro'];
    $formaNegociadora=$value['valoracion_evaluacion'];
}

/*Verifica animodo encontrado
*para asignar un valor
*/

if($animodo=="Abeja"){
    $animodo2=1;
}elseif($animodo=="Castor"){
    $animodo2=1;
}elseif($animodo=="Buho"){
    $animodo2=1;
}elseif ($animodo=="Delfin"){
    $animodo2=0;
}elseif($animodo=="Camaleon"){
    $animodo2=0;
}

/*Verifica valor asignado a $colorComunicacion
*a partir de esa informaión asigna un valor
 * establecido
*/

if($colorComunicacion==1){
    $colorComunicacion=1;
}elseif($colorComunicacion==2){
    $colorComunicacion=1;
}elseif($colorComunicacion==3){
    $colorComunicacion=0;
}elseif($colorComunicacion==4){
    $colorComunicacion=1;
}

/*Verifica valor  tipos de cerebro
*A partir de la información verificada
 * asigna un valor
*/

if($tiposCerebro==1){
    $tiposCerebro=1;
}elseif($tiposCerebro==2){
    $tiposCerebro=1;
}elseif($tiposCerebro==3){
    $tiposCerebro=0;
}

/*Verifica valor forma negociadora
 *A partir de la verificación asigna
 * un valor
  */
if($formaNegociadora=="BAJO"){
    $formaNegociadora2=0;
}elseif($formaNegociadora=="MEDIO"){
    $formaNegociadora2=1;
}elseif ($formaNegociadora=="ALTO"){
    $formaNegociadora2=1;
}

$valoracion = 0;
$valoracion = $animodo2 + $colorComunicacion + $tiposCerebro + $formaNegociadora2;

/*Verifica valores obtenidos de la valoración
*a partir del valor verificado
 * asigna un valor
*/

if($valoracion==1 || $valoracion==2){
    $persistente="NO";
}elseif ($valoracion==3 || $valoracion==4){
    $persistente="SI";
}elseif($valoracion==0){
    $persistente="ALERTA";
}else{
    $persistente="NO DEFINIDO";
}
$register=$objEncuesta->validaEncuesta($id_Usuario);
if($register>0){
    $register=$objEncuesta->editarPersistencia($animodo2,$colorComunicacion,$tiposCerebro,$formaNegociadora2,
        $valoracion,$persistente,$id_Usuario);
    if($register>0){
        $_SESSION['id_Usuario']=$id_Usuario;
        require_once("modal5.php");
        //header("Location:../index.php");
        die();
    }else{
        echo "Error de actualización";
        die();
    }
}else{
    $register=$objEncuesta->registrarEncuesta($animodo2,$colorComunicacion,$tiposCerebro,$formaNegociadora2,
        $valoracion,$persistente,$id_Usuario);
    if($register>0){
        $_SESSION['id_Usuario']=$id_Usuario;
        require_once("modal5.php");
        //header("Location:../index.php");
    }else{
        echo "Error de registro";
        die();
    }
}
?>
