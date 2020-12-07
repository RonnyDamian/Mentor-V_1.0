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
    <title>Forma Negociadora</title>
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

<form action="capturaPreguntas4.php" id="formulario4" method="post" enctype="multipart/form-data" onsubmit="showResult(); return false;" >

    <!--Especificaciones -->
    <div class="box mt-4"  id="questionScreen" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="header">
            <img src="../img/logo.png" alt="iDrCrop." width="400" height="200"  style="display:block !important;margin:auto; !important">
        </div>

        <div class="questionBox mt-3 bg-light text-justify" id="description">


            <strong>Enunciado</strong> <br>
            PREGUNTAS Y RESPUESTAS DE SELECCIÓN <br>
            En esta sección queremos conocer qué tan buen negociador es usted. <br>
            A continuación, debe seleccionar con un click dentro del círculo al frente de la respuesta que considere representa su personalidad


        </div>

    </div>

    <!--Inicio Pregunta 1 -->
    <div class="box mt-4"  id="pregunta1" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 1
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify mb-3">
                <div class="col">
                    <label for=""><strong > Cuando se te presenta una dificultad, problema u obstáculo,tomando en cuenta tu temperamento:</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg1" id="" data-ancla="pregunta2" class="ancla" value="3" >
                    <span class="ml-2"> A) Eludes al obstáculo, aún a riesgo de soportar un pequeño sacrificio.</div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg1" id="" data-ancla="pregunta2" class="ancla" value="1" >
                    <span class="ml-2"> B)  Impones tu voluntad, porque estas convencido de ello</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg1" id="" data-ancla="pregunta2" class="ancla" value="2" >
                    <span class="ml-2"> C) Difieres la solución hasta esperar mejores condiciones y otras oportunidades.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 2 -->
    <div class="box mt-4 "  id="pregunta2" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 2
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3">
                <div class="col">
                    <label for=""><strong>Deseas comprar un automóvil de un color y un equipamiento determinados. Te informan que ese modelo lo tendrían hasta dentro de varias semanas. </strong></label>
                </div>
            </div>
            <div class="row ">
                <div class="col text-justify">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla" value="2">
                    <span class="ml-2"> A)  Te molestas un poco, porque es la distribuidora más cercana a tu casa. Sin embargo dejas tus datos por si hubiera un cambio favorable.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla" value="3">
                    <span class="ml-2"> B)   Permites que te muestren el mismo modelo pero en otro color y contemplas la oportunidad de obtener un mejor precio.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg2" id="" data-ancla="pregunta3" class="ancla" value="1">
                    <span class="ml-2"> C) Te marchas diciendo abiertamente que vas a ir a la otra distribuidora de la misma Marca, donde estas seguro que tendrán el modelo y el color que tu quieres. Además, ahí conoces al Gerente, quien puede ofrecerte un mejor precio.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 3 -->
    <div class="box mt-4"  id="pregunta3" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 3
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong> ¿Qué significa Negociar para ti? </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla" value="1">
                    <span class="ml-2"> A) La discusión y concertación de un contrato comercial.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla" value="2">
                    <span class="ml-2"> B)  La elaboración conjunta de acuerdos, que pondría fin a cualquier conflicto eventual.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg3" id="" data-ancla="pregunta4" class="ancla" value="3">
                    <span class="ml-2"> C) Cierta manera de enfocar los problemas que lleva consigo la comprensión del punto de vista contrario.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 4 -->
    <div class="box mt-4"  id="pregunta4" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 4
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Crees que un buen vendedor negociador, debería ante todo: </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla" value="1">
                    <span class="ml-2"> A) Comprender las preocupaciones, deseos y expectativas de los demás.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla" value="2">
                    <span class="ml-2"> B) Conocer a fondo las características de su producto, para mostrar seguridad.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg4" id="" data-ancla="pregunta5" class="ancla" value="3">
                    <span class="ml-2"> C) Poseer rasgos o cualidades personales que favorezcan el contacto.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 5 -->
    <div class="box mt-4"  id="pregunta5" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 5
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong> Al final de una discusión acalorada y difícil….. piensas: </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla" value="1">
                    <span class="ml-2"> A) Que en toda discusión, debe haber,… quien gane y quien pierde.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla" value="2">
                    <span class="ml-2"> B)   Que en ocasiones el “perdedor” se lleva la sensación de haber ganado.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg5" id="" data-ancla="pregunta6" class="ancla" value="3">
                    <span class="ml-2"> C) Que al final, ambos pueden sentirse satisfechos y ganadores.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 6 -->
    <div class="box mt-4"  id="pregunta6" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 6
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>En una reunión de negocios, antes de toma una decisión… ¿Qué es lo que deseas por encima de todo? </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla" value="2">
                    <span class="ml-2"> A) Esforzarte por conocer mejor a tus oponentes, tratando de comprender sus expectativas y deseos.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text.justify">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla" value="3">
                    <span class="ml-2"> B)  Concentrarte en la información que pueda ser útil y oportuna, para tomar decisiones efectivas.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg6" id="" data-ancla="pregunta7" class="ancla" value="1">
                    <span class="ml-2"> C) Recordar tus experiencias pasadas y convertirlas en elementos de juicio para tomar mejores decisiones.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 7 -->
    <div class="box mt-4"  id="pregunta7" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 7
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong> ¿Cómo crees que pudieras convencer más fácilmente a una persona?</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla" value="2">
                    <span class="ml-2"> A)  Exponiendo claramente las razones y motivos, por los cuales, se le necesita.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla" value="1">
                    <span class="ml-2"> B)  Enumerándole las ventajas que le proporcionara tener una actitud de cooperación.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg7" id="" data-ancla="pregunta8" class="ancla" value="3">
                    <span class="ml-2"> C) Definitivamente evitar tener un fracaso, que deteriore tu imagen en esa empresa.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 8 -->
    <div class="box mt-4"  id="pregunta8" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 8
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Tienes una cita de negocios donde te dispones a defender tu marca a pesar de que sabes que la competencia esta fuerte, por lo tanto te concentras principalmente en:</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla" value="2">
                    <span class="ml-2"> A) Preparar la información correcta y completa, para estar bien preparado.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla" value="3">
                    <span class="ml-2"> B) Analizas detenidamente la situación en que te encuentras, para encontrar posibles soluciones</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg8" id="" data-ancla="pregunta9" class="ancla" value="1">
                    <span class="ml-2"> C) Definitivamente evitar un fracaso, que deteriore tu imagen en esa empresa.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 9 -->
    <div class="box mt-4"  id="pregunta9" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 9
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong> Una documentación que acabas de preparar contiene una serie de datos. ¿A cual de los siguientes aspectos, le darías mayor importancia? </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla" value="2">
                    <span class="ml-2"> A) A la abundancia y exactitud de los detalles y pormenores.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla" value="3">
                    <span class="ml-2"> B)  A lo valioso de la información con respecto a la competencia.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg9" id="" data-ancla="pregunta10" class="ancla" value="1">
                    <span class="ml-2"> C) A la cantidad de información sobre tu producto.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 10 -->
    <div class="box mt-4"  id="pregunta10" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 10
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>En una negociación de ventas, crees que la personalidad del gerente, juega un papel </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla" value="1">
                    <span class="ml-2"> A) Mas bien reducido, ante unas buenas condiciones comerciales (Descuento, mata “rango”).</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla" value="3">
                    <span class="ml-2"> B)  Importante, ya que puede “impactar” al comprador, con su “encanto personal”.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg10" id="" data-ancla="pregunta11" class="ancla" value="2">
                    <span class="ml-2"> C) Muy importante, su “influencia” puede ser determinante para proporcionar un cierre favorable.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 11-->
    <div class="box mt-4"  id="pregunta11">
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 11
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Aun ignorando si te podías estacionar, te estacionas y cuando regresar encuentras al agente levantándote una infracción… ¿Cuál seria tu reacción?.</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla" value="2">
                    <span class="ml-2"> A) Molesto te metes al auto y sin decir palabra te marchas.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla" value="3">
                    <span class="ml-2"> B)  Sin dramatizar, intentas explicarle porque decidiste estacionarte, tratando de hacer un llamado a su comprensión y tolerancia.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg11" id="" data-ancla="pregunta12" class="ancla" value="1">
                    <span class="ml-2"> C) Ya que no hay una señalización correcta, inicias una discusión en tono algo agresivo, porque crees que no es justo además de que sabes que mucha gente se estaciona ahí y más los “influyentes”.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 12-->
    <div class="box mt-4"  id="pregunta12" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 12
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Después de haber demostrado voluntad, espíritu de servicio, amor a la camiseta y profesionalismo te da la impresión de que no eres reconocido y recompensado adecuadamente por tu jefe inmediato. ¿ Que sentimientos experimentarías en una situación como esta? </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg12" id=""  value="1" data-ancla="pregunta13" class="ancla">
                    <span class="ml-2"> A) Un grado de frustración y cierta amargura, pues esperabas fortalecer tu imagen ante tu superior.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg12" id=""  value="2" data-ancla="pregunta13" class="ancla">
                    <span class="ml-2"> B) Te sientes estimulado, esto es, “te creces al castigo” y trabajas con mayor ahínco pensando que finalmente, reconocerán tu esfuerzo.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg12" id=""  value="3" data-ancla="pregunta13" class="ancla">
                    <span class="ml-2"> C) La verdad… ningún sentimiento “notable”, porque entiendes que tu jefe tendrá sus razones para actuar como lo juzgue apropiado.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Segunda Parte
    Inicio Pregunta 13 -->
    <div class="box mt-4"  id="pregunta13" >
        <div class="title ">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 13
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3 " >
                <div class="col text-justify">
                    <label for=""><strong > Serie No. 1 </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg13" id="" value="1" data-ancla="pregunta14" class="ancla">
                    <span class="ml-2"> A) Comunicador. Persuasivo. Consistente</div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg13" id="" value="2" data-ancla="pregunta14" class="ancla">
                    <span class="ml-2"> B) Comprensivo. Prudente. Tolerant</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg13" id="" value="3" data-ancla="pregunta14" class="ancla">
                    <span class="ml-2"> C) Estratégico. Adaptable. Flexible</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 14 -->
    <div class="box mt-4 "  id="pregunta14" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 14
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Serie No.2</strong></label>
                </div>
            </div>
            <div class="row ">
                <div class="col text-justify">
                    <input type="radio" name="preg14" id="" value="2" data-ancla="pregunta15" class="ancla">
                    <span class="ml-2"> A)  Expresivo. Afable. Empático</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg14" id="" value="3" data-ancla="pregunta15" class="ancla">
                    <span class="ml-2"> B)  Audaz. Seguro de si mismo. Combativo</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg14" id="" value="1" data-ancla="pregunta15" class="ancla">
                    <span class="ml-2"> C) Discreto. Categórico. Influyente</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 15-->
    <div class="box mt-4"  id="pregunta15" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 15
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Serie No.3</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg15" id="" value="1" data-ancla="pregunta16" class="ancla">
                    <span class="ml-2"> A) Sensato. Táctico. Ingenioso</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg15" id="" value="2" data-ancla="pregunta16" class="ancla">
                    <span class="ml-2"> B) Analítico. Buena memoria. Organizado</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg15" id="" value="3" data-ancla="pregunta16" class="ancla">
                    <span class="ml-2"> C) Practico. Conversador. Accesible</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 16-->
    <div class="box mt-4"  id="pregunta16" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 16
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Serie No. 4</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg16" id=""  value="2" data-ancla="pregunta17" class="ancla">
                    <span class="ml-2"> A) Elegante. Actual. Con prestancia</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg16" id="" value="1" data-ancla="pregunta17" class="ancla">
                    <span class="ml-2"> B) Moderno. Casual. Actualizado</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg16" id=""  value="3" data-ancla="pregunta17" class="ancla">
                    <span class="ml-2"> C) Situacional. Propio. Franco</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 17 -->
    <div class="box mt-4"  id="pregunta17" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 17
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Serie No. 5</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg17" id="" value="1" data-ancla="pregunta18" class="ancla">
                    <span class="ml-2"> A) Decidido. Dedicado. Incisivo</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg17" id="" value="2" data-ancla="pregunta18" class="ancla">
                    <span class="ml-2"> B)  Relacionista. Amistoso. Confiable</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg17" id="" value="3" data-ancla="pregunta18" class="ancla">
                    <span class="ml-2"> C) Integrador. Congruente. Paciente</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 18-->
    <div class="box mt-4"  id="pregunta18" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 18
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>No es la primera vez que un compañero de trabajo acude a ti para que le hagas un favor ¿Qué harías en esa situación? </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg18" id="" value="2" data-ancla="pregunta19" class="ancla">
                    <span class="ml-2"> A)  Te aprovechas de la situación, para pedirle que te sirva a su vez en algo, aun cuando no te urge.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg18" id="" value="3" data-ancla="pregunta19" class="ancla">
                    <span class="ml-2"> B) Por el momento… le haces el favor, sin esperar nada a cambio.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg18" id="" value="1" data-ancla="pregunta19" class="ancla">
                    <span class="ml-2"> C) Le dices con toda franqueza, que en esta ocasión no podrás atender a su solicitud y le pones un pretexto congruente y creíble.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 19-->
    <div class="box mt-4"  id="pregunta19" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 19
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>En dos días, tendrás una negociación difícil </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg19" id="" value="1" data-ancla="pregunta20" class="ancla">
                    <span class="ml-2"> A) Procuras estrechar relaciones con el otro negociador, por ejemplo, haciéndole o aceptando una invitación.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg19" id="" value="2" data-ancla="pregunta20" class="ancla">
                    <span class="ml-2"> B) Te esforzarías por mantener unas relaciones estrictamente profesionales, quedando las cosas claras, aun cuando podrías arrepentirte de no haber hecho … “algo mas”.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg19" id="" value="3" data-ancla="pregunta20" class="ancla">
                    <span class="ml-2"> C)  Tratarías que las relaciones fueran “favorables”, sin pretender “sacar ventaja”, aun cuando podrías hacerlo sin consecuencias en los resultados.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 20 -->
    <div class="box mt-4"  id="pregunta20" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 20
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Cuando tienes que tomar una importante decisión por teléfono:</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg20" id="" value="3" data-ancla="pregunta21" class="ancla">
                    <span class="ml-2"> A) Consideras que, - con solo tu palabra- te puedes comprometer y lo mismo ocurre con la otra persona.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg20" id="" value="2" data-ancla="pregunta21" class="ancla">
                    <span class="ml-2"> B)  Exiges después de cualquier acuerdo, por cordial que haya sido, se te envié una confirmación por escrito.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg20" id="" value="1" data-ancla="pregunta21" class="ancla">
                    <span class="ml-2"> C) Agradeces su confianza, su interés y su franqueza.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 21 -->
    <div class="box mt-4"  id="pregunta21" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 21
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Durante una discusión, particularmente acalorada, tu interlocutor cita un dato que es falso y tu tienes pruebas de su error… ¿Qué harías?. </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg21" id="" value="1" data-ancla="pregunta22" class="ancla">
                    <span class="ml-2"> A)Dejas que siga comprometiéndose en sus afirmaciones, para después decirle sobre su error.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg21" id="" value="3" data-ancla="pregunta22" class="ancla">
                    <span class="ml-2"> B) Prefieres decirle que, “se fije en lo que dice” antes de ser tan categórico y a continuación cambias el tema de conversación, sin darle mayor importancia al evento.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg21" id="" value="2" data-ancla="pregunta22" class="ancla">
                    <span class="ml-2"> C) Intervienes inmediatamente y le llevas la contraria, sacando partido de esta posición aparentemente ventajosa.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 22 -->
    <div class="box mt-4"  id="pregunta22" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 22
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>En una reunión muy importante, uno de los asistentes se dirige a ti y discretamente te dice: “siempre hay una forma de llegar a un acuerdo” ¿Qué actitud asumirías?.</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg22" id="" value="2" data-ancla="pregunta23" class="ancla">
                    <span class="ml-2"> A)Sin falsos principios, aceptas ponerte “al lado de esta persona” suponiendo que esto te acarreará alguna ventaja personal.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg22" id="" value="3" data-ancla="pregunta23" class="ancla">
                    <span class="ml-2"> B) Le dices tranquila y categóricamente, que no aceptas su proposición, aun a riesgos de “echar abajo” el negocio.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg22" id="" value="1" data-ancla="pregunta23" class="ancla">
                    <span class="ml-2"> C) Sin hipocresías, aceptas la “proposición” y simplemente informas a los “involucrados del arreglo convenido” y que el negocio se cerro favorablemente</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 23-->
    <div class="box mt-4"  id="pregunta23" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 23
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong> En el trato con otras personas, sinceramente sueles ser: </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text.justify">
                    <input type="radio" name="preg23" id="" value="2" data-ancla="pregunta24" class="ancla">
                    <span class="ml-2"> A) Sensible a su personalidad, carisma y a su poder de persuasión.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg23" id="" value="3" data-ancla="pregunta24" class="ancla">
                    <span class="ml-2"> B) Mas bien sensible a su cultura, competitividad y astucia.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg23" id="" value="1" data-ancla="pregunta24" class="ancla">
                    <span class="ml-2"> C)Sensible a la buena voluntad para llegar a un acuerdo, aun cuando sea ignorante en muchas cosas</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 24-->
    <div class="box mt-4"  id="pregunta24" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 24
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col">
                    <label for=""><strong>En una negociación relacionada con – ventas- de las cuales no estas bien informado, generalmente:</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg24" id="" value="3" data-ancla="pregunta25" class="ancla">
                    <span class="ml-2"> A)Sueles permanecer callado para no incurrir en errores que puedan demostrar tu ignorancia.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg24" id="" value="2" data-ancla="pregunta25" class="ancla">
                    <span class="ml-2"> B)  Te vales de tu “sentido común” y experiencia, para intervenir en la negociación.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg24" id="" value="1" data-ancla="pregunta25" class="ancla">
                    <span class="ml-2"> C)  Apruebas de momento lo que dice tu interlocutor, aun cuando en el fondo estas “discorde”, con lo que dice, pero como no esta seguro, permaneces callado para inclusive “caerle bien”.</span>
                </div>
            </div>

        </div>
    </div>

    <!--Inicio Pregunta 25 -->
    <div class="box mt-4"  id="pregunta25" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 25
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>¿Crees que un hombre, mientras más viejo y experimentado, es mejor negociador?. </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="preg25" id="" value="2" data-ancla="pregunta26" class="ancla">
                    <span class="ml-2"> A) Si, porque cuenta con la vivencia necesaria para tratar con cualquiera.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg25" id="" value="1" data-ancla="pregunta26" class="ancla">
                    <span class="ml-2"> B) Si, porque crees que los jóvenes aun inteligentes y combativos, son inexpertos.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <input type="radio" name="preg25" id="" value="3" data-ancla="pregunta26" class="ancla">
                    <span class="ml-2"> C) No, porque confías más en las habilidades que en la experiencia, aun cuando el virtual negociador sea un joven inexperto, pero audaz</span>
                </div>
            </div>

        </div>
    </div>

    <!--Inicio Pregunta 26 -->
    <div class="box mt-4"  id="pregunta26" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 26
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Cuando en una negociación, tu “oponente” se hace el “desentendido” o el “indeciso”</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg26" id="" value="3" data-ancla="pregunta27" class="ancla">
                    <span class="ml-2"> A) Concretas las cosas para ganar tiempo y “sacarlo” de esa posición no conveniente.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg26" id="" value="2" data-ancla="pregunta27" class="ancla">
                    <span class="ml-2"> B)  Cambias el tema a fin de no presionarlo a que se decida, porque es riesgoso.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg26" id="" value="1" data-ancla="pregunta27" class="ancla">
                    <span class="ml-2"> C) Te aprovechas de la situación para propiciar el cierre.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 27 -->
    <div class="box mt-4"  id="pregunta27" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 27
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>En una negociación con varias personas, sueles tender a: </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg27" id=""  value="1" data-ancla="pregunta28" class="ancla">
                    <span class="ml-2"> A) Concentrar tus esfuerzos en el “líder de opinión” pues en mejor… “platicar con cristo que con sus discípulos”.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg27" id=""  value="2" data-ancla="pregunta28" class="ancla">
                    <span class="ml-2"> B) Tratas de convencer a los más accesibles, para que estos metan presión sobre el que decide.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg27" id=""  value="3" data-ancla="pregunta28" class="ancla">
                    <span class="ml-2"> C) Tratas de modo “indiferente” a unos y a otros, intentando convencer a todo el grupo.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 28 -->
    <div class="box mt-4"  id="pregunta28" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 28
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>En una negociación experimentas -antipatía- por tu interlocutor: </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg28" id="" value="1" data-ancla="pregunta29" class="ancla">
                    <span class="ml-2"> A) Por lo que delegas la gestión, en otra persona.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg28" id="" value="2" data-ancla="pregunta29" class="ancla">
                    <span class="ml-2"> B)  Esperas a que cambie de actitud, por una más favorable.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg28" id="" value="3" data-ancla="pregunta29" class="ancla">
                    <span class="ml-2"> C)  Superas ese “sentimiento” y te dispones a “entrarle al toro” aun molesto.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 29 -->
    <div class="box mt-4"  id="pregunta29" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 29
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-jsutify">
                    <label for=""><strong>Dentro de las relaciones conyugales, piensas que es mejor: </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg29" id="" value="3" data-ancla="pregunta30" class="ancla">
                    <span class="ml-2"> A) Que las decisiones provengan de los dos, aun cuando pudieran ser malas.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg29" id="" value="2" data-ancla="pregunta30" class="ancla">
                    <span class="ml-2"> B)  Que las decisiones las tome el mejor informado o más maduro.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg29" id="" value="1" data-ancla="pregunta30" class="ancla">
                    <span class="ml-2"> C) Que las decisiones las tome el hombre, porque es el responsable de la casa.</span>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Pregunta 30 -->

    <div class="box mt-4"  id="pregunta30" >
        <div class="title">
            Test Forma Negociadora
        </div>
        <div class="card-header">
            Pregunta número 30
        </div>
        <div class="optionBox caja mt-2">
            <div class="row text-justify  mb-3" >
                <div class="col text-justify">
                    <label for=""><strong>Un compañero de trabajo, se empeña en que estas en un error… y el tiene razón: </strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    <input type="radio" name="preg30" id="" value="3"  >
                    <span class="ml-2"> A) Reconoces tu error y “humildemente” soportas sus ironías.</span>

                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg30" id="" value="1"  >
                    <span class="ml-2"> B) Repruebas su actitud y fortaleces un sentimiento de: “ya me las pagaras”.</span>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 text-justify">
                    <input type="radio" name="preg30" id="" value="2"  >
                    <span class="ml-2"> C) Inicias una discusión, aduciendo que cualquiera se equivoca.</span>
                </div>
            </div>
        </div>
        <div class="footer mb-5">
            <div class="row">
                <div class="col">
                    <a href="questions3.php" id="boton2" class="btn  btn-sm float-left mt-2 btnSubmit"><i class=" fas fa-arrow-left" ></i> </a>
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
<script src="../js/script4.js"></script>


</body>
</html>
