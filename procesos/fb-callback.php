<?php
session_start();
require_once  '../vendor/autoload.php';
require_once ("autoload.php");
$objUsuario = new Usuario();

$name=isset($_POST['nombre'])? $_POST['nombre']:'';
$lastName=isset($_POST['apellido'])? $_POST['apellido']:'';
$gender=isset($_POST['sexo'])? $_POST['sexo']:'';
$ago=isset($_POST['edad'])? $_POST['edad']:'';
$phone=isset($_POST['celular'])? $_POST['celular']:'';
$email=isset($_POST['email'])? $_POST['email']:'';
$business=isset($_POST['empresa'])? $_POST['empresa']:'';
$position=isset($_POST['cargo'])? $_POST['cargo']:'';
$profesion=isset($_POST['profesion'])? $_POST['profesion']:'';

$name = strtoupper($name);
$lastName=strtoupper($lastName);
$position = strtoupper($position);
$profesion = strtoupper($profesion);
if(empty($business)){
  $business=24;
}
if(empty($position)){
  $position="SIN  ASIGNAR";
}

$validaUser=$objUsuario->validaUsuario($email);
if($validaUser>0){
  echo "<script>alert(' El correo electronico ingresado ya existe');
         window.location.href='contacto.php';   
        </script>";

  die();
}else{
  $registro=$objUsuario->registrarUsuario($name,$lastName,$gender,$ago,$phone,$email,$profesion,$business,$position);
  if($registro>=0){
    $_SESSION['id_Usuario']=$registro;
    header("Location:questions.php");
  }else{
    echo "Error de registro";
  }
}

?>

