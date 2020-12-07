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
    <title>Tipos de cerebro</title>
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
            background: #4d0686 !important;
            color:#ffffff !important;
            transition:0.2ms, ease-out !important;
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
<form action="capturaPreguntas3.php" id="formulario3" method="post" enctype="multipart/form-data" onsubmit="showResult(); return false;" >

    <!--Especificaciones -->
    <div class="box mt-4"  id="questionScreen" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="header">
            <img src="../img/logo.png" alt="iDrCrop." width="400" height="200"  style="display:block !important;margin:auto; !important">
        </div>

        <div class="questionBox mt-3 bg-light text-justify" id="description">

            <strong>Enunciado</strong> <br>
            Cada pregunta supone una introducción del tipo: <br>
            ¿Cuál es mi capacidad para...? o ¿Cuál es mi grado de desarrollo en…? <br>
            Si la respuesta a una pregunta es mucho, bastante, excelente, entonces elija con un click en el círculo bajo el # 4 o 5 <br>
            Si es poco, débil, malo, elija con un click en el circulo bajo el # 1 o 2 <br>
            Si es regular, bueno, medio, suficiente, entonces elija con un click en el círculo bajo el # 3. <br>
            <strong>SUGERENCIA</strong> <br>
            Antes de responder esta etapa debe hacerse las siguientes preguntas: <br>
            ¿Cuál es mi capacidad para…? ¿Cuál es mi grado de desarrollo en…? <br>
            Y complemente con los enunciados de cada pregunta. <br>
            Aquí le compartimos un ejemplo: <br>
            Pregunta 1: ¿Cuál es mi capacidad para hacer una revisión o evaluación? <br>
            Tome en cuenta que 1, 2 es BAJO; 3 REGULAR y 4, 5 EXCELENTE.

        </div>

    </div>

    <!--Inicio Pregunta 1 -->
    <div class="box mt-4"  id="pregunta1" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 1
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">Al final del día, de la semana o de una actividad, haces una revisión o evaluación?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg1"   data-ancla="pregunta2" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg1"  data-ancla="pregunta2" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg1"  data-ancla="pregunta2" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg1"  data-ancla="pregunta2" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg1"  data-ancla="pregunta2" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 2 -->
    <div class="box mt-4"  id="pregunta2" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 2
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">En tu casa, en tu habitación, en tu lugar de trabajo, ¿hay orden y organización?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg2" id=""  data-ancla="pregunta3" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 3 -->
    <div class="box mt-4"  id="pregunta3" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 3
        </div>
        <div class="optionBox caja mt-2 question3">

            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">¿Crees que tu cuerpo y tu energía son parte de un todo mayor, de una fuerza superior, invisible, espiritual y eterna?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg3" id=""  data-ancla="pregunta4" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 4 -->
    <div class="box mt-4"  id="pregunta4" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 4
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">¿Sabes contar chistes? ¿vives alegre, optimista y disfrutando, a pesar de todo?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 5 -->
    <div class="box mt-4"  id="pregunta5" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 5
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row">
                <div class="col">
                    <label for="" class="text-center">Dialogando o discutiendo, ¿tienes buenas explicaciones, argumentos y sabes rebatir?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 6 -->
    <div class="box mt-4"  id="pregunta6" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 6
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">¿Tienes presentimientos, premoniciones o sueños nocturnos que se realizan?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 7 -->
    <div class="box mt-4"  id="pregunta7" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 7
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">En la relación afectiva, ¿te la juegas a fondo, con romanticismo y pasión?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 8 -->
    <div class="box mt-4"  id="pregunta8" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 8
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">¿Sabes hablar frente a un grupo, dominas las palabras con fluidez y comprensión??</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 9 -->
    <div class="box mt-4"  id="pregunta9" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 9
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row">
                <div class="col">
                    <label for="" class="text-center">Cuando hablas ¿gesticulas, mueves el cuerpo, miras a todas las personas?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 10 -->
    <div class="box mt-4"  id="pregunta10" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 10
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">¿Puedes imaginarte en la situación de otra persona y entender como se siente?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 11-->
    <div class="box mt-4"  id="pregunta11" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 11
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="">¿Sabes alinear los pro y los contra de un problema, logras discernirlos y emitir juicios correctos?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 12-->
    <div class="box mt-4"  id="pregunta12" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 12
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row">
                <div class="col">
                    <label for="">Cuando narras un hecho, ¿aportas muchos detalles, te gusta dar todos los pormenores?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg12" id="" data-ancla="pregunta13" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg12" id="" data-ancla="pregunta13" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg12" id="" data-ancla="pregunta13" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg12" id="" data-ancla="pregunta13" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg12" id="" data-ancla="pregunta13" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 13-->
    <div class="box mt-4"  id="pregunta13" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 13
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">Al comprar o vender, ¿te va bien, tienes ventajas, ganas plata?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg13" id="" data-ancla="pregunta14" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg13" id="" data-ancla="pregunta14" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg13" id="" data-ancla="pregunta14" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg13" id="" data-ancla="pregunta14" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg13" id="" data-ancla="pregunta14" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 14 -->
    <div class="box mt-4"  id="pregunta14" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 14
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">Te gusta innovar, cambiar la rutina de la vida, del ambiente, tienes soluciones creativas y originales?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg14" id="" data-ancla="pregunta15" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg14" id="" data-ancla="pregunta15" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg14" id="" data-ancla="pregunta15" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg14" id="" data-ancla="pregunta15" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg14" id="" data-ancla="pregunta15" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 15-->
    <div class="box mt-4"  id="pregunta15" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 15
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">¿Controlas tu ímpetu y te detienes a tiempo para pensar en las consecuencias antes de actuar?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg15" id="" data-ancla="pregunta16" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg15" id="" data-ancla="pregunta16" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg15" id="" data-ancla="pregunta16" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg15" id="" data-ancla="pregunta16" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg15" id="" data-ancla="pregunta16" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 16 -->
    <div class="box mt-4"  id="pregunta16" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 16
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="">Antes de aceptar cualquier información como cierta, ¿te dedicas a recoger más datos y a averiguar las fuentes?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg16" id="" data-ancla="pregunta17" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg16" id="" data-ancla="pregunta17" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg16" id="" data-ancla="pregunta17" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg16" id="" data-ancla="pregunta17" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg16" id="" data-ancla="pregunta17" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 17 -->
    <div class="box mt-4"  id="pregunta17" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 17
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="">¿Tienes habilidades manuales con agujas, serrucho, martillo, jardinería o para arreglar cosas dañadas?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg17" id="" data-ancla="pregunta18" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg17" id="" data-ancla="pregunta18" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg17" id="" data-ancla="pregunta18" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg17" id="" data-ancla="pregunta18" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg17" id="" data-ancla="pregunta18" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 18 -->
    <div class="box mt-4"  id="pregunta18" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 18
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="">Frente a una tarea fácil, ¿tienes capacidad de concentración, de continuidad y aguante?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg18" id="" data-ancla="pregunta19" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg18" id="" data-ancla="pregunta19" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg18" id="" data-ancla="pregunta19" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg18" id="" data-ancla="pregunta19" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg18" id="" data-ancla="pregunta19" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 19 -->
    <div class="box mt-4"  id="pregunta19" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 19
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">En la posición de jefe, ¿sabes dividir las tareas, calcular el tiempo para cada una, dar órdenes cortas y exigir su ejecución?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg19" id="" data-ancla="pregunta20" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg19" id="" data-ancla="pregunta20" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg19" id="" data-ancla="pregunta20" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg19" id="" data-ancla="pregunta20" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg19" id="" data-ancla="pregunta20" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 20 -->
    <div class="box mt-4"  id="pregunta20" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 20
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="">¿Te detienes a ponerle atención a una puesta de sol, a un pájaro o a un paisaje?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg20" id="" data-ancla="pregunta21" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg20" id="" data-ancla="pregunta21" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg20" id="" data-ancla="pregunta21" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg20" id="" data-ancla="pregunta21" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg20" id="" data-ancla="pregunta21" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicion Pregunta 21 -->
    <div class="box mt-4"  id="pregunta21" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 21
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">¿Tienes atracción por aventuras, tareas desconocidas, iniciar algo que nadie hizo antes?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg21" id="" data-ancla="pregunta22" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg21" id="" data-ancla="pregunta22" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg21" id="" data-ancla="pregunta22" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg21" id="" data-ancla="pregunta22" class="ancla radop" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg21" id="" data-ancla="pregunta22" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 22-->
    <div class="box mt-4"  id="pregunta22" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 22
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">¿Te autorizas a dudar de las informaciones de la TV, de personas de la política, de la religión o de la ciencia?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg22" id="" data-ancla="pregunta23" class="ancla radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg22" id="" data-ancla="pregunta23" class="ancla radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg22" id="" data-ancla="pregunta23" class="ancla radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg22" id="" data-ancla="pregunta23" class="ancla radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg22" id="" data-ancla="pregunta23" class="ancla radio" value="5">
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 23 -->
    <div class="box mt-4"  id="pregunta23" >
        <div class="title">
            Test Tipos de Cerebro
        </div>
        <div class="card-header">
            Pregunta número 23
        </div>
        <div class="optionBox caja mt-2 question3">
            <div class="row" >
                <div class="col">
                    <label for="" class="text-center">¿Logras transformar tus sueños e ideas en cosas concretas, realizaciones que progresan y duran?</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">1</label>
                </div>
                <div class="col">
                    <label for="">2</label>
                </div>
                <div class="col">
                    <label for="">3</label>
                </div>
                <div class="col">
                    <label for="">4</label>
                </div>
                <div class="col">
                    <label for="">5</label>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                    <input type="radio" name="preg23" class="radio" value="1">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg23" class="radio" value="2">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg23" class="radio" value="3">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg23" class="radio" value="4">
                </div>
                <div class="col mt-1">
                    <input type="radio" name="preg23" class="radio" value="5">
                </div>
            </div>
        </div>
        <div class="footer mb-5">
            <div class="row">
                <div class="col">
                    <a href="questions2.php" id="boton2" class="btn  btn-sm float-left mt-2 btnSubmit"><i class=" fas fa-arrow-left" ></i> </a>
                </div>
                <div class="col">
                    <button type="submit" id="boton" class="btn  btn-sm float-right mt-2 btnSubmit"><i class=" fas fa-arrow-right"></i>  </button>
                </div>
            </div>
        </div>
    </div>
</form>




<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/toastr.min.js"></script>
<script src="../js/script3.js"></script>
<script src="../lib/fontAwesome.js"></script>

</body>
</html>
