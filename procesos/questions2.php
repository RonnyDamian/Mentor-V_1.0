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
    <title>Colores de la comunicación</title>
        <link rel="shortcut icon" href="../img/icono2.png" type="image/x-icon" style="border-radius: 50%">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/toastr.min.css">
    <link rel="stylesheet" href="../style/styleTres.css">
    <link rel="stylesheet" href="../style/estilosDos.css">
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/radioDisabled.js"></script>
    <script src="../js/script2.js"></script>


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

<form action="capturaPreguntas2.php" id="formulario2" method="post" enctype="multipart/form-data" onsubmit="showResult(); return false;" >

<!--Especificaciones -->
    <div class="box mt-4"  id="questionScreen" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="header">
            <img src="../img/logo.png" alt="iDrCrop." width="400" height="200"  style="display:block !important;margin:auto; !important">
        </div>

        <div class="questionBox mt-3 bg-light text-justify" id="description">

            <strong>Enunciado</strong> <br>
            A cada pregunta le corresponden 4 palabras según su forma de comunicarse. Primero escoja la palabra que más lo define al momento de comunicarse y haga click en el círculo bajo el # 3.
            Segundo, escoja la siguiente palabra que más lo defina al momento de comunicarse y haga click en el círculo bajo el # 1.
            <br>
            Tercero, escoja las dos siguientes palabras y haga click en el círculo bajo el # 0. <br>
            <strong>SUGERENCIA</strong> <br>
            Antes de responder este test, considere las siguientes observaciones: <br>
            Debe escoger la palabra que más le identifica al momento de comunicarse y marque en el número 3. <br>
            A continuación, marque con el número 1 la segunda palabra que más lo defina. <br>
            Por último, en el número 0 debe marcar las palabras que no lo definen (recuerde que debe marcar dos en esta opción).<br>
            *Piense en el significado de la palabra, no como se escribe o como suena. *
        </div>

    </div>

<!--Inicio Pregunta 1 -->
    <div class="box mt-4 question1 table-responsive-sm"  id="questionScreen" >
    <div class="title">
        Test Colores de la Comunicación
    </div>
    <div class="card-header">
        Pregunta número 1
    </div>
    <div class="optionBox caja mt-2">
        <div class="row">
            <div class="col">

            </div>
            <div class="col" id="preg1num1">
                <label for="">3</label>
            </div>
            <div class="col" id="preg1num2">
                <label for="">1</label>
            </div>
            <div class="col" id="preg1num3">
                <label for="">0</label>
            </div>
        </div>
    <div class="row ">
        <div class="col text-center">
            <label for="" >Hechos</label>
        </div>
        <div class="col question22">
            <input type="radio" name="preg1op1" id="preg1op1op1" value="3" class="radio">
        </div>
        <div class="col question22">
            <input type="radio" name="preg1op1" id="preg1op1op2" value="1" class="radio">
        </div>
        <div class="col question22">
            <input type="radio" name="preg1op1" id="preg1op1op3" value="0" class="radio">
        </div>
    </div>
        <div class="row">
            <div class="col text-center" >
                <label for="resultados">Resultados</label>
            </div>
            <div class="col question22">
                <input type="radio" name="preg1op2" id="preg1op2op1" value="3" class="radio">
            </div>
            <div class="col question22">
                <input type="radio" name="preg1op2" id="preg1op2op2" value="1" class="radio">
            </div>
            <div class="col question22">
                <input type="radio" name="preg1op2" id="preg1op2op3" value="0" class="radio">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <label for="resultados">Personas</label>
            </div>
            <div class="col question22">
                <input type="radio" name="preg1op3" id="preg1op3op1" value="3" class="radio">
            </div>
            <div class="col question22">
                <input type="radio" name="preg1op3" id="preg1op3op2" value="1" class="radio">
            </div>
            <div class="col question22">
                <input type="radio" name="preg1op3" id="preg1op3op3" value="0" class="radio">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <label for="resultados">Ideas</label>
            </div>
            <div class="col question22">
                <input type="radio" name="preg1op4" id="preg1op4op1" value="3" data-ancla="pregunta2" class="ancla radio">
            </div>
            <div class="col question22">
                <input type="radio" name="preg1op4" id="preg1op4op2" value="1" data-ancla="pregunta2" clasS="ancla radio">
            </div>
            <div class="col question22">
                <input type="radio" name="preg1op4" id="preg1op4op3" value="0" data-ancla="pregunta2" class="ancla radio">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaUno">Cambiar</label>
            </div>
        </div>
    </div>
    </div>
<!--Inicio Pregunta 2 -->
    <div class="box mt-4"   id="pregunta2">
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 2
        </div>
        <div class="optionBox caja mt-2" >
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg2num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg2num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg2num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Exactitud</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op1" id="preg2op1op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op1" id="preg2op1op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op1" id="preg2op1op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Impacto</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op2" id="preg2op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op2" id="preg2op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op2" id="preg2op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Contribución</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op3" id="preg2op3op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op3" id="preg2op3op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op3" id="preg2op3op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Creatividad</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op4" id="preg2op4op1" value="3" data-ancla="pregunta3" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op4" id="preg2op4op2" value="1" data-ancla="pregunta3" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg2op4" id="preg2op4op3" value="0" data-ancla="pregunta3" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaDos">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 3 -->
    <div class="box mt-4"  id="pregunta3" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 3
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg3num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg3num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg3num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Datos</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op1" id="preg3op1op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op1" id="preg3op1op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op1" id="preg3op1op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Desafios</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op2" id="preg3op2op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op2" id="preg3op2op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op2" id="preg3op2op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Testimonios</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op3" id="preg3op3op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op3" id="preg3op3op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op3" id="preg3op3op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Innovación</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op4" id="preg3op4op1" value="3" data-ancla="pregunta4" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op4" id="preg3op4op2" value="1" data-ancla="pregunta4" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg3op4" id="preg3op4op3" value="0" data-ancla="pregunta4" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaTres">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 4 -->
    <div class="box mt-4"  id="pregunta4" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 4
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg4num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg4num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg4num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Ingeniero</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op1" id="preg4op1op1"  value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op1" id="preg4op1op2"  value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op1" id="preg4op1op3"  value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Director</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op2" id="preg4op2op1"  value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op2" id="preg4op2op2"  value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op2" id="preg4op2op3"  value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Maestro</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op3" id="preg4op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op3" id="preg4op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op3" id="preg4op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Artista</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op4" id="preg4op4op1" value="3" data-ancla="pregunta5" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op4" id="preg4op4op2" value="1" data-ancla="pregunta5" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg4op4" id="preg4op4op3" value="0" data-ancla="pregunta5" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaCuatro">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 5 -->
    <div class="box mt-4"  id="pregunta5" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 5
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg5num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg5num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg5num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Analizar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op1" id="preg5op1op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op1" id="preg5op1op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op1" id="preg5op1op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Concluir</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op2" id="preg5op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op2" id="preg5op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op2" id="preg5op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Reflexionar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op3" id="preg5op3op1"  value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op3" id="preg5op3op2"  value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op3" id="preg5op3op3"  value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Cambiar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op4" id="preg5op4op1" value="3" data-ancla="pregunta6" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op4" id="preg5op4op2" value="1" data-ancla="pregunta6" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg5op4" id="preg5op4op3" value="0" data-ancla="pregunta6" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaCinco">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 6 -->
    <div class="box mt-4"  id="pregunta6" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 6
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg6num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg6num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg6num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Precisión</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op1" id="preg6op1op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op1" id="preg6op1op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op1" id="preg6op1op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Eficiencia</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op2" id="preg6op2op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op2" id="preg6op2op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op2" id="preg6op2op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Compatibilidad</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op3" id="preg6op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op3" id="preg6op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op3" id="preg6op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Diferenciación</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op4" id="preg6op4op1" value="3" data-ancla="pregunta7" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op4" id="preg6op4op2" value="1" data-ancla="pregunta7" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg6op4" id="preg6op4op3" value="0" data-ancla="pregunta7" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaSeis">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 7 -->
    <div class="box mt-4"  id="pregunta7" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 7
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg7num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg7num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg7num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Pensar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op1" id="preg7op1op1" value="3" class="radio radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op1" id="preg7op1op2" value="1" class="radio radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op1" id="preg7op1op3" value="0" class="radio radop">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Actuar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op2" id="preg7op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op2" id="preg7op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op2" id="preg7op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Sentir</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op3" id="preg7op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op3" id="preg7op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op3" id="preg7op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Crear</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op4" id="preg7op4op1" value="3" data-ancla="pregunta8" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op4" id="preg7op4op2" value="1" data-ancla="pregunta8" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg7op4" id="preg7op4op3" value="0" data-ancla="pregunta8" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaSiete">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 8 -->
    <div class="box mt-4"  id="pregunta8">
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 8
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg8num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg8num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg8num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Procesar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op1" id="preg8op1op1" value="3"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op1" id="preg8op1op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op1" id="preg8op1op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Controlar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op2" id="preg8op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op2" id="preg8op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op2" id="preg8op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Colaborar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op3" id="preg8op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op3" id="preg8op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op3" id="preg8op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Motivar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op4" id="preg8op4op1" value="3" data-ancla="pregunta9" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op4" id="preg8op4op2" value="1" data-ancla="pregunta9" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg8op4" id="preg8op4op3" value="0" data-ancla="pregunta9" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaOcho">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 9 -->
    <div class="box mt-4"  id="pregunta9" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 9
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg9num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg9num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg9num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="" >Respetado</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op1" id="preg9op1op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op1" id="preg9op1op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op1" id="preg9op1op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Con_poder</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op2" id="preg9op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op2" id="preg9op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op2" id="preg9op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Aceptado</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op3" id="preg9op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op3" id="preg9op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op3" id="preg9op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Conocido</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op4" id="preg9op4op1" value="3" data-ancla="pregunta10" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op4" id="preg9op4op2" value="1" data-ancla="pregunta10" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg9op4" id="preg9op4op3" value="0" data-ancla="pregunta10" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaNueve">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 10 -->
    <div class="box mt-4"  id="pregunta10" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 10
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg10num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg10num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg10num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Lógico</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op1" id="preg10op1op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op1" id="preg10op1op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op1" id="preg10op1op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Concreto</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op2" id="preg10op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op2" id="preg10op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op2" id="preg10op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Amigable</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op3" id="preg10op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op3" id="preg10op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op3" id="preg10op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Imaginativo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op4" id="preg10op4op1" value="3" data-ancla="pregunta11" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op4" id="preg10op4op2" value="1" data-ancla="pregunta11" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg10op4" id="preg10op4op3" value="0" data-ancla="pregunta11" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaDiez">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 11-->
    <div class="box mt-4"  id="pregunta11" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 11
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg11num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg11num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg11num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Discernir</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op1" id="preg11op1op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op1" id="preg11op1op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op1" id="preg11op1op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Lograr</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op2" id="preg11op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op2" id="preg11op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op2" id="preg11op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Apoyar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op3" id="preg11op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op3" id="preg11op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op3" id="preg11op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Inventar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op4" id="preg11op4op1" value="3" data-ancla="pregunta12" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op4" id="preg11op4op2" value="1" data-ancla="pregunta12" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg11op4" id="preg11op4op3" value="0" data-ancla="pregunta12" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaOnce">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 12-->
    <div class="box mt-4"  id="pregunta12" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 12
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg12num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg12num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg12num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">El_detalle</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op1" id="preg12op1op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op1" id="preg12op1op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op1" id="preg12op1op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">El_atajo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op2" id="preg12op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op2" id="preg12op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op2" id="preg12op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">El_equipo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op3" id="preg12op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op3" id="preg12op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op3" id="preg12op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Lo_nuevo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op4" id="preg12op4op1" value="3" data-ancla="pregunta13" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op4" id="preg12op4op2" value="1" data-ancla="pregunta13" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg12op4" id="preg12op4op3" value="0" data-ancla="pregunta13" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaDoce">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 13-->
    <div class="box mt-4"  id="pregunta13" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 13
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg13num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg13num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg13num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Deliberado</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op1" id="preg13op1op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op1" id="preg13op1op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op1" id="preg13op1op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Decisivo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op2" id="preg13op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op2" id="preg13op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op2" id="preg13op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Dador</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op3" id="preg13op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op3" id="preg13op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op3" id="preg13op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Espontaneo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op4" id="preg13op4op1" value="3" data-ancla="pregunta14" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op4" id="preg13op4op2" value="1" data-ancla="pregunta14" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg13op4" id="preg13op4op3" value="0" data-ancla="pregunta14" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaTrece">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 14 -->
    <div class="box mt-4"  id="pregunta14">
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 14
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg14num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg14num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg14num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Preguntar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op1" id="preg14op1op1"  value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op1" id="preg14op1op2"  value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op1" id="preg14op1op3"  value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Afirmar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op2" id="preg14op2op1"  value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op2" id="preg14op2op2"  value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op2" id="preg14op2op3"  value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Escuchar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op3" id="preg14op3op1"  value="3"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op3" id="preg14op3op2"  value="1"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op3" id="preg14op3op3"  value="0"   class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Conversar</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op4" id="preg14op4op1"  value="3" data-ancla="pregunta15" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op4" id="preg14op4op2"  value="1" data-ancla="pregunta15" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg14op4" id="preg14op4op3"  value="0" data-ancla="pregunta15" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaCatorce">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 15-->
    <div class="box mt-4"  id="pregunta15">
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 15
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg15num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg15num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg15num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Sistemático</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op1" id="preg15op1op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op1" id="preg15op1op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op1" id="preg15op1op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Dominante</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op2" id="preg15op2op1" value="3"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op2" id="preg15op2op2" value="1"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op2" id="preg15op2op3" value="0"   class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Leal</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op3" id="preg15op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op3" id="preg15op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op3" id="preg15op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Competitivo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op4" id="preg15op4op1" value="3" data-ancla="pregunta16" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op4" id="preg15op4op2" value="1" data-ancla="pregunta16" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg15op4" id="preg15op4op3" value="0" data-ancla="pregunta16" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="cajaQuince">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 16 -->
    <div class="box mt-4"  id="pregunta16" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 16
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg16num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg16num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg16num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="" >Paso_a_Paso</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op1" id="preg16op1op1" value="3"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op1" id="preg16op1op2" value="1"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op1" id="preg16op1op3" value="0"   class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Directo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op2" id="preg16op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op2" id="preg16op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op2" id="preg16op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Diplomático</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op3" id="preg16op3op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op3" id="preg16op3op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op3" id="preg16op3op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Impulsivo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op4" id="preg16op4op1" value="3" data-ancla="pregunta17" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op4" id="preg16op4op2" value="1" data-ancla="pregunta17" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg16op4" id="preg16op4op3" value="0" data-ancla="pregunta17" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="caja16">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 17 -->
    <div class="box mt-4"  id="pregunta17" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 17
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg17num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg17num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg17num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Serio</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op1" id="preg17op1op1" value="3"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op1" id="preg17op1op2" value="1"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op1" id="preg17op1op3" value="0"   class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Franco</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op2" id="preg17op2op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op2" id="preg17op2op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op2" id="preg17op2op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Afable</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op3" id="preg17op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op3" id="preg17op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op3" id="preg17op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Extrovertido</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op4" id="preg17op4op1" value="3" data-ancla="pregunta18" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op4" id="preg17op4op2" value="1" data-ancla="pregunta18" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg17op4" id="preg17op4op3" value="0" data-ancla="pregunta18" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="caja17">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 18 -->
    <div class="box mt-4"  id="pregunta18" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 18
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg18num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg18num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg18num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Dedicado</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op1" id="preg18op1op1" value="3"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op1" id="preg18op1op2" value="1"   class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op1" id="preg18op1op3" value="0"   class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Determinado</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op2" id="preg18op2op1" value="3"    class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op2" id="preg18op2op2" value="1"    class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op2" id="preg18op2op3" value="0"    class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Reflexivo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op3" id="preg18op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op3" id="preg18op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op3" id="preg18op3op3" value="0"   class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Expresivo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op4" id="preg18op4op1" value="3" data-ancla="pregunta19" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op4" id="preg18op4op2" value="1" data-ancla="pregunta19" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg18op4" id="preg18op4op3" value="0" data-ancla="pregunta19" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="caja18">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 19 -->
    <div class="box mt-4"  id="pregunta19">
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 19
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg19num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg19num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg19num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Certeza</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op1" id="preg19op1op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op1" id="preg19op1op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op1" id="preg19op1op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Logro</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op2" id="preg19op2op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op2" id="preg19op2op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op2" id="preg19op2op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Acuerdo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op3" id="preg19op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op3" id="preg19op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op3" id="preg19op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Visión</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op4" id="preg19op4op1" value="3" data-ancla="pregunta20" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op4" id="preg19op4op2" value="1" data-ancla="pregunta20" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg19op4" id="preg19op4op3" value="0" data-ancla="pregunta20" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="caja19">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 20 -->
    <div class="box mt-4"  id="pregunta20" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 20
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                    <div class="col"></div>
                <div class="col" id="preg20num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg20num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg20num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Jurado</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op1" id="preg20op1op1"  value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op1" id="preg20op1op2"  value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op1" id="preg20op1op3"  value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Juez</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op2" id="preg20op2op1"  value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op2" id="preg20op2op2"  value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op2" id="preg20op2op3"  value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Conciliador</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op3" id="preg20op3op1"  value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op3" id="preg20op3op2"  value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op3" id="preg20op3op3"  value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Actor</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op4" id="preg20op4op1"  value="3" data-ancla="pregunta21" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op4" id="preg20op4op2"  value="1" data-ancla="pregunta21" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg20op4" id="preg20op4op3"  value="0" data-ancla="pregunta21" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="caja20">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicion Pregunta 21 -->
    <div class="box mt-4"  id="pregunta21" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 21
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="preg21num1">
                    <label for="">3</label>
                </div>
                <div class="col" id="preg21num2">
                    <label for="">1</label>
                </div>
                <div class="col" id="preg21num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="">Tradicionalista</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op1" id="preg21op1op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op1" id="preg21op1op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op1" id="preg21op1op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Autónomo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op2" id="preg21op2op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op2" id="preg21op2op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op2" id="preg21op2op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Humanista</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op3" id="preg21op3op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op3" id="preg21op3op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op3" id="preg21op3op3" value="0" class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <label for="resultados">Visionario</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op4" id="preg21op4op1" value="3" data-ancla="pregunta22" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op4" id="preg21op4op2" value="1" data-ancla="pregunta22" class="ancla radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg21op4" id="preg21op4op3" value="0" data-ancla="pregunta22" class="ancla radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="caja21">Cambiar</label>
                </div>
            </div>
        </div>
    </div>
<!--Inicio Pregunta 22-->
    <div class="box mt-4"  id="pregunta22" >
        <div class="title">
            Test Colores de la Comunicación
        </div>
        <div class="card-header">
            Pregunta número 22
        </div>
        <div class="optionBox caja mt-2">
            <div class="row">
                <div class="col">

                </div>
                <div class="col  preg22num1" id="preg22num1" >
                    <label for="">3</label>
                </div>
                <div class="col preg22num2" id="preg22num2">
                    <label for="">1</label>
                </div>
                <div class="col preg22num3"  id="preg22num3">
                    <label for="">0</label>
                </div>
            </div>
            <div class="row">
                <div class="col-5" id="phrase22op1">
                    <label for="">Menor_riesgo</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op1" id="preg22op1op1" value="3" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op1" id="preg22op1op2" value="1" class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op1" id="preg22op1op3" value="0" class="radio">
                </div>
            </div>
            <div class="row"  >
                <div class="col-5" id="phrase22op2">
                    <label for="resultados">Mayor_producción</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op2" id="preg22op2op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op2" id="preg22op2op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op2" id="preg22op2op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col-5" id="phrase22op3">
                    <label for="resultados">Menor_conflicto</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op3" id="preg22op3op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op3" id="preg22op3op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op3" id="preg22op3op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col-5" id="phrase22op4">
                    <label for="resultados">Mayor_reconocimiento</label>
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op4" id="preg22op4op1" value="3"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op4" id="preg22op4op2" value="1"  class="radio">
                </div>
                <div class="col question22">
                    <input type="radio" name="preg22op4" id="preg22op4op3" value="0"  class="radio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cancel" class="badge badge-danger float-right mb-0 mt-0" style="cursor: pointer;" id="caja22">Cambiar</label>
                </div>
            </div>
        </div>
        <div class="footer mb-5">
            <div class="row">
            <div class="col">
                <a href="questions.php" id="boton2" class="btn  btn-sm float-left mt-2 btnSubmit" onclick="validaInfo(<?php echo $id_Usuario;?>)"><i class=" fas fa-arrow-left" ></i> </a>
            </div>
            <div class="col">
                <button type="submit" id="boton" class="btn  btn-sm float-right mt-2 btnSubmit"><i class=" fas fa-arrow-right"></i>  </button>
            </div>
            </div>
        </div>
    </div>
</form>
<?php require_once ("modalLogin.php")?>


<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/toastr.min.js"></script>


</body>
</html>
