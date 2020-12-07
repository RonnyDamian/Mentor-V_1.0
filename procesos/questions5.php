<?php
session_start();
$id_Usuario= isset($_SESSION['id_Usuario'])? $_SESSION['id_Usuario']:'';
/*if(empty($id_Usuario)){
    header('location:../index.php');
}*/
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test de Vak</title>
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

<form action="capturaPreguntas5.php" id="formulario5" method="post" enctype="multipart/form-data" onsubmit="showResult(); return false;" >

<!--Especificaciones -->
    <div class="box mt-4"  id="questionScreen" >
        <div class="title">
            Test de Vak
        </div>
        <div class="header">
            <img src="../img/logo.png" alt="iDrCrop." width="400" height="200"  style="display:block !important;margin:auto; !important">
        </div>
        <div class="questionBox mt-3 bg-light text-justify" id="description">
            <strong>Enunciado</strong> <br>
            Seleccione la respuesta con la que más se sienta identificado <br>
            <strong>SUGERENCIA</strong> <br>
            Queremos conocer ¿Cuáles son las formas en las que aprende?
        </div>

    </div>

<!--Inicio Pregunta 1 -->
    <div class="box mt-4"  id="pregunta1" >
    <div class="title">
        Test de Vak
    </div>
    <div class="card-header">
        Pregunta número 1
    </div>
    <div class="optionBox caja mt-2">
    <div class="row text-justify  mb-3" >
        <div class="col">
           <label for=""><strong> Evoca alguna ocasión en la que hayas aprendido a hacer algo nuevo para ti, como por ejemplo un juego de sobremesa, ¿cómo aprendiste mejor? </strong></label>
        </div>
    </div>
        <div class="row">
        <div class="col">
            <input type="radio" name="preg1" id="" data-ancla="pregunta2" class="ancla radio" value="1">
            <span class="ml-2"> A) Por medio de indicaciones visuales o instrucciones escritas.</span>

        </div>
        </div>
        <div class="row">
        <div class="col mt-4">
            <input type="radio" name="preg1" id="" data-ancla="pregunta2" class="ancla radio" value="2">
            <span class="ml-2"> B)  Escuchando las explicaciones de alguien..</span>
        </div>
        </div>
        <div class="row">
        <div class="col mt-4">
            <input type="radio" name="preg1" id="" data-ancla="pregunta2" class="ancla radio" value="3">
            <span class="ml-2"> C) Experimentando, probándolo tú mismo.</span>
        </div>
        </div>
    </div>
    </div>

<!--Inicio Pregunta 2 -->
    <div class="box mt-4"  id="pregunta2" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 2
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col">
                <label for=""><strong>Tienes dificultades para encontrar el hotel en que te alojas en una ciudad donde sólo llevas unos pocos días, ¿qué haces?</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla radio" value="3">
                    <span class="ml-2"> A)  Sigo conduciendo en busca de alguna referencia conocida.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla radio" value="2">
                    <span class="ml-2"> B)  Pregunto.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla radio" value="1">
                    <span class="ml-2"> C) Miro el mapa.</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 3 -->
    <div class="box mt-4"  id="pregunta3" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 3
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col">
                <label for=""><strong>Tienes que aprender un nuevo programa informático, ¿qué haces?</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla radio" value="3">
                    <span class="ml-2"> A) Le pido a un amigo que me ayude</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla radio" value="1">
                    <span class="ml-2"> B)  Consulto el manual que viene con el programa</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla radio" value="2">
                    <span class="ml-2"> C) Llamo a un conocido y le pregunto</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 4 -->
    <div class="box mt-4"  id="pregunta4" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 4
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col">
                <label for=""><strong>No estás muy seguro de si se escribe “haber” o “a ver”, ¿qué haces?</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla radio" value="1">
                    <span class="ml-2"> A) Me imagino ambas versiones mentalmente y elijo la que me parece correcta.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla radio" value="2">
                    <span class="ml-2"> B)  Las escucho mentalmente.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla radio" value="3">
                    <span class="ml-2"> C) Las escribo y elijo la que me parece mejor.</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 5 -->
     <div class="box mt-4"  id="pregunta5" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 5
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col">
                <label for=""><strong>Prefieres a los maestros o conferenciantes que utilizan: </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg5" id=""  data-ancla="pregunta6" class="ancla radio" value="1">
                    <span class="ml-2"> A) Diagramas de flujo, apuntes, transparencias.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla radio" value="3">
                    <span class="ml-2"> B)  Salidas al campo, laboratorios, sesiones prácticas.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla radio" value="2">
                    <span class="ml-2"> C) Discusiones, conferenciantes invitados.</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 6 -->
    <div class="box mt-4"  id="pregunta6" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 6
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col">
                <label for=""><strong>Has comprado un artículo que tienes que montar tú mismo, ¿qué te ayudará más?</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla radio" value="2">
                    <span class="ml-2"> A) Escuchar una cinta que describa los pasos a seguir.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla radio" value="3">
                    <span class="ml-2"> B)  Comenzar a montarlo y aprender sobre la marcha.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla radio" value="1">
                    <span class="ml-2"> C) Ver un vídeo o consultar las instrucciones impresas.</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 7 -->
    <div class="box mt-4"  id="pregunta7" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 7
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify mb-3" >
                <div class="col">
                <label for=""><strong>Te estás ocupando de la casa de un amigo durante su ausencia. Tienes que aprender rápidamente a cuidar de su jardín y de sus animales de compañía. Lo mejor será: </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla radio" value="1">
                    <span class="ml-2"> A) Ver cómo lo hace otra persona</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla radio" value="2">
                    <span class="ml-2"> B)  Recibir instrucciones y aclararlas a fondo</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla radio" value="3">
                    <span class="ml-2"> C) Que alguien te acompañe mientras lo haces</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 8 -->
    <div class="box mt-4"  id="pregunta8" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 8
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify mb-3" >
                <div class="col">
                <label for=""><strong>Alguien te confía un número importante que debes recordar, como por ejemplo el de un teléfono, algún código o un número de serie. Para estar seguro de no olvidarlo, lo mejor será:</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla radio" value="2">
                    <span class="ml-2"> A) Repetírtelo a ti mismo o a otra persona.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla radio" value="1">
                    <span class="ml-2"> B)  Hacerte una imagen mental de ese número.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla radio" value="3">
                    <span class="ml-2"> C) Escribirlo o teclearlo varias veces.</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 9 -->
    <div class="box mt-4"  id="pregunta9" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 9
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify mb-3" >
                <div class="col">
                <label for=""><strong>Tienes que realizar una presentación ante un grupo reducido de personas. Para sentirte cómodo prefieres:</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla radio" value="2">
                    <span class="ml-2"> A) Tener claro el tono de voz y las palabras que vas a comunicar.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla radio" value="1">
                    <span class="ml-2"> B)  Tener a mano diagramas y notas que puedas consultar durante la presentación.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla radio" value="3">
                    <span class="ml-2"> C) Haber ensayado la presentación varias veces.</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 10 -->
    <div class="box mt-4"  id="pregunta10" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 10
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3">
                <div class="col">
                <label for=""><strong>¿Con cuál de las siguientes aficiones disfrutas más? </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla radio" value="3">
                    <span class="ml-2"> A) Pasear / cuidar del jardín / bailar.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla radio" value="1">
                    <span class="ml-2"> B)  Dibujar / pintar / ver paisajes / sacar fotografías.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla radio" value="2">
                    <span class="ml-2"> C) Música / cantar / contar historias.</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 11-->
    <div class="box mt-4"  id="pregunta11" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 11
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3">
                <div class="col">
                <label for=""><strong>Para adquirir una nueva habilidad prefieres</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla radio" value="2">
                    <span class="ml-2"> A) Escuchar una descripción y hacer preguntas.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla radio" value="1">
                    <span class="ml-2"> B)  Ver diagramas y presentaciones.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla radio" value="3">
                    <span class="ml-2"> C) Hacer ejercicios.</span>
                </div>
            </div>
        </div>
    </div>

<!--Inicio Pregunta 12-->
    <div class="box mt-4"  id="pregunta12" >
        <div class="title">
            Test de Vak
        </div>
        <div class="card-header">
            Pregunta número 12
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3">
                <div class="col">
                <label for=""><strong>Cuando realmente quieres enseñar algo a alguien:</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg12" class="radio"  value="1">
                    <span class="ml-2"> A) Creas una imagen para esa persona.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg12" class="radio"  value="2">
                    <span class="ml-2"> B)  Se lo explicas lógicamente.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg12" class="radio"  value="3">
                    <span class="ml-2"> C) Le acompañas físicamente mientras lo hace.</span>
                </div>
            </div>
        </div>
        <div class="footer mb-5">
            <div class="row">
                <div class="col">
                    <a href="questions4.php" id="boton2" class="btn  btn-sm float-left mt-2 btnSubmit"><i class=" fas fa-arrow-left" ></i> </a>
                </div>
                <div class="col">
                    <button type="submit" id="boton" class="btn  btn-sm float-right mt-2 btnSubmit"><i class=" fas fa-arrow-right"></i>  </button>
                </div>
            </div>
        </div>
    </div>


</form>

<?php require_once ("modalLogin.php")?>

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/toastr.min.js"></script>
<script src="../js/script5.js"></script>


</body>
</html>
