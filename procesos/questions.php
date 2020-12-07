<?php
session_start();
$id_Usuario= isset($_SESSION['id_Usuario'])? $_SESSION['id_Usuario']:'';

if(empty($id_Usuario)){
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animodo</title>
        <link rel="shortcut icon" href="../img/icono2.png" type="image/x-icon" style="border-radius: 50%">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/toastr.min.css">
    <link rel="stylesheet" href="../style/styleDos.css">
    <link rel="stylesheet" href="../style/estilosDos.css">

<style>
    @media screen and (max-width: 768px){
        img{
                width:80%;
            }
    }
    
    @media screen and (max-width: 558px){
        
        img{
                width:80%;
                ´padding:0;
                margin:0;
        }
    }
    #boton:hover,#boton2:hover{
        background: #4d0686;
        color:#ffffff;
        transition:0.2ms, ease-out;
    }
    #boton,#boton2{
        width:80px !important;
    }
    
</style>

</head>
<body>
<header style="height: 70px;justify-content: space-between">
</header>
<div style="height: 30px;"></div>

<form action="capturaPreguntas.php" id="formulario" method="post" enctype="multipart/form-data" onsubmit="showResult(); return false;" >

    <!--Especificaciones -->
    <div class="box mt-4"  id="questionScreen" >
        <div class="title">
            Test Animodo
        </div>
        <div class="header">
            <img src="../img/logo.png" alt="iDrCrop." id="imagenLogo" width="400" height="200"  style="margin-left: 16%;">
        </div>

        <div class="questionBox mt-3 bg-light text-justify" id="description">

            <strong>ENUNCIADO</strong> <br>
            Existen dos descripciones con una cantidad de 6 respuestas numeradas del 1 al 6.<br>
            Si usted se define mejor con la descripción de la pregunta a lado izquierdo haga click en el círculo bajo el # 1, si su descripción es mucho más semejante a la segunda definición haga click en el círculo bajo el # 6.
            Si considera que las dos definiciones marcan su personalidad escoja con un click los diferentes círculos centrales que están debajo de los números intermedios, dependiendo a que definición se incline su personalidad.
            <br>
            Recuerde piense siempre en como usted se define.<br>
            <strong>SUGERENCIA</strong> <br>
            Es importante que se tome en cuenta estas consideraciones antes de iniciar este test.
            Cada pregunta cuenta con dos opciones de acuerdo a como se identifique, responda cada una de ellas, considerando que 1 es el grado de mayor prioridad de la respuesta de la izquierda y 6 es el grado de mayor prioridad de la derecha.
            <br>
            Aquí le dejamos un ejemplo: <br>
            Juan se describe como una persona de mentalidad abierta por esta razón marca 1. <br>
            Si Juan se consideraría como una persona tajante marcaría el número 6. Si Juan considera que tiene las dos personalidades, marcaría entre los casilleros 2, 3, 4, y 5.
        </div>

    </div>
    <!--Inicio Pregunta 1 -->
    <div class="box mt-4"  id="questionScreen" >
        <div class="title">
            Encuesta Online 2020
        </div>
        <div class="card-header">
            Pregunta número 1
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span >Yo me describiría como de mentalidad abierta.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class= "radio ">
               <label for="" class="numeros " >
                    <span class="ml-sm-1 op1preg1" >1</span>
                    <span class=" ml-sm-3 op2preg1">2</span>
                    <span class="ml-sm-3 op3preg1" >3</span>
                    <span class="ml-sm-3 op4preg1" >4</span>
                    <span class="ml-sm-3 op5preg1" >5</span>
                    <span class="ml-sm-3 op6preg1">6</span>
                </label> <br>
      <input type="radio" name="preg1" id="preg1op1" value="1"  class="ancla radio " data-ancla="pregunta2" >
      <input type="radio" name="preg1" id="preg1op2" value="2"  class="ancla  radio" data-ancla="pregunta2" >
      <input type="radio" name="preg1" id="pre1op3" value="3"  class="ancla radio" data-ancla="pregunta2" >
      <input type="radio" name="preg1" id="preg1op4" value="4"  class="ancla radio" data-ancla="pregunta2" >
      <input type="radio" name="preg1" id="preg1op5" value="5"  class="ancla radio" data-ancla="pregunta2" >
      <input type="radio" name="preg1" id="preg1op6" value="6"  class="ancla radio" data-ancla="pregunta2" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Yo me describiría como explícito y tajante.</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Inicio Pregunta 2 -->
    <div class="box mt-4"   id="pregunta2" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 2
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center" >
                        <span>Yo me describiría como reflexivo.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 " id="pregunta2">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg2" id="preg1op1" value="1"  class="ancla radio" data-ancla="pregunta3">
      <input type="radio" name="preg2" id="preg1op2" value="2"  class="ancla radio" data-ancla="pregunta3">
      <input type="radio" name="preg2" id="pre1op3" value="3"  class="ancla radio" data-ancla="pregunta3">
      <input type="radio" name="preg2" id="preg1op4" value="4"  class="ancla radio" data-ancla="pregunta3">
      <input type="radio" name="preg2" id="preg1op5" value="5"  class="ancla radio" data-ancla="pregunta3">
      <input type="radio" name="preg2" id="preg1op6" value="6"  class="ancla radio" data-ancla="pregunta3">
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Yo me describiría como orientado a la acción</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Inicio Pregunta 3 -->
    <div class="box mt-4"  id="pregunta3">
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 3
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Me gusta ser específico.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 " >
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg3" id="preg1op1" value="1"  class="ancla radio" data-ancla="pregunta4" >
      <input type="radio" name="preg3" id="preg1op2" value="2"  class="ancla radio" data-ancla="pregunta4" >
      <input type="radio" name="preg3" id="pre1op3" value="3"  class="ancla radio" data-ancla="pregunta4" >
      <input type="radio" name="preg3" id="preg1op4" value="4"  class="ancla radio" data-ancla="pregunta4" >
      <input type="radio" name="preg3" id="preg1op5" value="5"  class="ancla radio" data-ancla="pregunta4" >
      <input type="radio" name="preg3" id="preg1op6" value="6"  class="ancla radio" data-ancla="pregunta4" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Me gusta permanecer flexible.</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Inicio Pregunta 4 -->
    <div class="box mt-4"  id="pregunta4" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 4
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Valoro la paciencia.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg4" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta5" >
      <input type="radio" name="preg4" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta5" >
      <input type="radio" name="preg4" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta5" >
      <input type="radio" name="preg4" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta5" >
      <input type="radio" name="preg4" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta5" >
      <input type="radio" name="preg4" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta5" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Valoro lograr hacer cosas. </span>
                    </div>
                </div>
            </div>
        </div>

    </div >

    <!--Inicio Pregunta 5 -->
    <div class="box mt-4" id="pregunta5" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 5
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Me gusta que las cosas sean variadas tengan colorido.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg5" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta6" >
      <input type="radio" name="preg5" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta6" >
      <input type="radio" name="preg5" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta6" >
      <input type="radio" name="preg5" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta6" >
      <input type="radio" name="preg5" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta6" >
      <input type="radio" name="preg5" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta6" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Me gusta que las cosas sean exactas y precisas.</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Inicio Pregunta 6 -->
    <div class="box mt-4"  id="pregunta6" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 6
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Yo me describiría como activo.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg6" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta7" >
      <input type="radio" name="preg6" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta7" >
      <input type="radio" name="preg6" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta7" >
      <input type="radio" name="preg6" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta7" >
      <input type="radio" name="preg6" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta7" >
      <input type="radio" name="preg6" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta7" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Yo me describiría como observador.</span>
                    </div>
                </div>
            </div>
        </div>

    </div >

    <!--Inicio Pregunta 7 -->
    <div class="box mt-4"  id="pregunta7" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 7
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Tomo un enfoque creativo e imaginativo para resolver problemas.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg7" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta8" >
      <input type="radio" name="preg7" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta8" >
      <input type="radio" name="preg7" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta8" >
      <input type="radio" name="preg7" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta8" >
      <input type="radio" name="preg7" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta8" >
      <input type="radio" name="preg7" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta8" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Tomo un enfoque preciso y calculado para resolver problemas.</span>
                    </div>
                </div>
            </div>
        </div>

    </div >

    <!--Inicio Pregunta 8 -->
    <div class="box mt-4"  id="pregunta8" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 8
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Me siento bien cuando entiendo las cosas.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg8" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta9" >
      <input type="radio" name="preg8" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta9" >
      <input type="radio" name="preg8" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta9" >
      <input type="radio" name="preg8" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta9" >
      <input type="radio" name="preg8" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta9" >
      <input type="radio" name="preg8" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta9" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Me siento bien cuando logro un impacto en las cosas.</span>
                    </div>
                </div>
            </div>
        </div>

    </div >

    <!--Inicio Pregunta 9 -->
    <div class="box mt-4"  id="pregunta9" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 9
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Soy hospitalario con ideas nuevas.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg9" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta10" >
      <input type="radio" name="preg9" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta10" >
      <input type="radio" name="preg9" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta10" >
      <input type="radio" name="preg9" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta10" >
      <input type="radio" name="preg9" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta10" >
      <input type="radio" name="preg9" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta10" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Me gusta ser lo más pragmático posible.</span>
                    </div>
                </div>
            </div>
        </div>

    </div >

    <!--Inicio Pregunta 10 -->
    <div class="box mt-4"  id="pregunta10" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 10
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Soy bueno logrando hacer cosas.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg10" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta11" >
      <input type="radio" name="preg10" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta11" >
      <input type="radio" name="preg10" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta11" >
      <input type="radio" name="preg10" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta11" >
      <input type="radio" name="preg10" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta11" >
      <input type="radio" name="preg10" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta11" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Soy bueno mirando las cosas bajo diversas perspectivas.</span>
                    </div>
                </div>
            </div>
        </div>

    </div >

    <!--Inicio Pregunta 11-->
    <div class="box mt-4"  id="pregunta11" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 11
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Yo me describiría como evaluativo y lógico.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg11" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta12" >
      <input type="radio" name="preg11" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta12" >
      <input type="radio" name="preg11" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta12" >
      <input type="radio" name="preg11" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta12" >
      <input type="radio" name="preg11" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta12" >
      <input type="radio" name="preg11" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta12" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Yo me describiría como receptivo y complaciente.</span>
                    </div>
                </div>
            </div>
        </div>

    </div >

    <!--Inicio Pregunta 12-->
    <div class="box mt-4"  id="pregunta12" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 12
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Me gusta mirar lo que pasa a mi alrededor.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg12" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta13" >
      <input type="radio" name="preg12" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta13" >
      <input type="radio" name="preg12" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta13" >
      <input type="radio" name="preg12" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta13" >
      <input type="radio" name="preg12" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta13" >
      <input type="radio" name="preg12" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta13" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Me gusta ver los resultados de mis acciones.</span>
                    </div>
                </div>
            </div>
        </div>

    </div >

    <!--Inicio Pregunta 13-->
    <div class="box mt-4"  id="pregunta13" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 13
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Lucho por ser versátil.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label>  <br>
      <input type="radio" name="preg13" id="preg1op1" value="1" class="ancla radio" data-ancla="pregunta14" >
      <input type="radio" name="preg13" id="preg1op2" value="2" class="ancla radio" data-ancla="pregunta14" >
      <input type="radio" name="preg13" id="pre1op3" value="3" class="ancla radio" data-ancla="pregunta14" >
      <input type="radio" name="preg13" id="preg1op4" value="4" class="ancla radio" data-ancla="pregunta14" >
      <input type="radio" name="preg13" id="preg1op5" value="5" class="ancla radio" data-ancla="pregunta14" >
      <input type="radio" name="preg13" id="preg1op6" value="6" class="ancla radio" data-ancla="pregunta14" >
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Lucho por ser breve, específico y exacto.</span>
                    </div>
                </div>
            </div>
        </div>

    </div >

    <!--Inicio Pregunta 14-->
    <div class="box mt-4 mb-4"  id="pregunta14" >
        <div class="title">
            Test Animodo
        </div>
        <div class="card-header">
            Pregunta número 14
        </div>
        <div class="optionBox">
            <div class="col-lg-12 mt-2 caja text-justify">
                <div class="row">
                    <div class="col-lg-4 descripcionUno text-center">
                        <span>Me considero reservado.</span>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mb-4 ">
       <span class="radio ">
           <label for="" class="numeros">
                    <span class="ml-sm-1" >1</span>
                    <span class=" ml-sm-3">2</span>
                    <span class="ml-sm-3">3</span>
                    <span class="ml-sm-3">4</span>
                    <span class="ml-sm-3">5</span>
                    <span class="ml-sm-3">6</span>
                </label> <br>
      <input type="radio" name="preg14" id="preg1op1" value="1" class="radio">
      <input type="radio" name="preg14" id="preg1op2" value="2" class="radio">
      <input type="radio" name="preg14" id="pre1op3" value="3" class="radio">
      <input type="radio" name="preg14" id="preg1op4" value="4" class="radio">
      <input type="radio" name="preg14" id="preg1op5" value="5" class="radio">
      <input type="radio" name="preg14" id="preg1op6" value="6" class="radio">
     </span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span>Estoy preparado para actuar.</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer mb-5">
            <div class="row">

                <div class="col">
                    <button type="submit" id="boton" class="btn  btn-sm float-right mt-2 btnSubmit"><i class=" fas fa-arrow-right"></i>  </button>
                </div>
            </div>
        </div>
    </div >

</form>


<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/toastr.min.js"></script>
<script src="../js/script.js"></script>
<script src="../lib/fontAwesome.js"></script>

</body>
</html>
