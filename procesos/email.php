<?php
session_start();
require_once ("autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../email/Exception.php';
require '../email/PHPMailer.php';
require '../email/SMTP.php';


/*INICIO INSTANCIA DE LA CLASE ANIMODO*/


/*FIN DE LA CLASE ANIMODO*/

/*INICIO INSTANCIA DE LA CLASE USUARIO*/
$id_Usuario = $_SESSION['id_Usuario'];

$objAnimodo= new Encuesta();
$rAnimodo = $objAnimodo->buscAnimodo($id_Usuario);

$obj = new Usuario();
 $result=$obj->buscaUsuario($id_Usuario);
 /*FIN INSTANCIA DE LA CLASE USUARIO*/

/*INICIO INSTANCIA DE LA CLASE TEST DE VAK*/
$objVak = new Encuesta5();
$resultVak=$objVak->buscaTestVak($id_Usuario);
/*FIN INSTANCIA DE LA CLASE TEST DE VAK*/

/*INICIO INSTANCIA DE LA CLASE ENVALNEGOCIADORA*/
$objNegociador = new Encuesta4();
$resultNegociador = $objNegociador->buscaNegociador($id_Usuario);
/*FIN INSTANCIA DE LA CLASE EVALNEGOCIADORA*/


/*INICIO INSTANCIA DE LA CLASE PERSISTENCIA*/
$objPersistente = new Persistencia();
$resultPersistente = $objPersistente->buscaPersistencia($id_Usuario);
/*FIN INSTANCIA DE LA CLASE PERSISTENCIA*/

/*INICIO INSTANCIA  MODELO TIPOS DE CEREBRO*/
$objTiposCerebro = new Encuesta3();
$resultCerebro = $objTiposCerebro->buscaCerebro($id_Usuario);

$izquierdo = $resultCerebro['cerebroIzq'];
$centro = $resultCerebro['cerebroCen'];
$derecho = $resultCerebro['cerebroDer'];

if($izquierdo> $centro && $izquierdo>$derecho){
    $mayorCerebro="Izquierdo";
}else if($centro>$izquierdo && $centro >$derecho){
    $mayorCerebro="Centro";
}else if($derecho>$centro && $derecho>$izquierdo){
    $mayorCerebro="Derecho";
}else if($centro == $izquierdo || $centro== $derecho){
    $mayorCerebro="Centro";
}else if($izquierdo ==$derecho){
    $mayorCerebro="Izquierdo";
}
/*FIN INSTANCIA TIPOS DE CEREBRO*/


/*INICIO INSTANCIA COLOR DE LA COMUNICACIÓN*/
$objColor = new Encuesta2();
$resultColor = $objColor->buscaColor($id_Usuario);

$amarillo = $resultColor['colorAmarillo'];
$rojo = $resultColor['colorRojo'];
$azul = $resultColor['colorAzul'];
$verde = $resultColor['colorVerde'];

if($amarillo>$rojo && $amarillo>$azul && $amarillo>$verde){
    $mayorColor = "Amarillo";
}else if($rojo>$amarillo && $rojo>$azul && $rojo>$verde){
    $mayorColor = "Rojo";
}else if($azul>$amarillo && $azul>$rojo && $azul>$verde){
    $mayorColor = "Azul";
}else if($verde>$amarillo && $verde>$rojo && $verde>$azul){
    $mayorColor = "Verde";
}else if($rojo== $amarillo || $rojo==$azul || $rojo==$verde){
    $mayorColor = "Rojo";
}else if ($verde==$azul || $verde==$amarillo){
    $mayorColor = "Verde";
}else if($amarillo==$azul){
    $mayorColor = "Amarillo";
}

/*echo "El valor cerebro Izquierdo es: " .$izquierdo.
    "<br>El valor cerebro Centro es: " .$centro.
    "<br>El valor cerebro Derecho es: " .$derecho.
    "<br>El valor del color amarillo es: " .$amarillo.
    "<br>El valor del color rojo es: " .$rojo.
    "<br>El valor del color azul es: " .$azul.
    "<br>El valor del color verde es: " .$verde;
die();*/
/*FIN INSTANCIA COLOR DE LA COMUNICACIÓN*/


/*INICIO DECLARACIÓN DE RUTA IMAGEN*/

if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Centro" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Abeja09.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Izquierdo" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Abeja07.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Derecho" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Abeja08.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Centro" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Abeja12.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Abeja10.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Derecho" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Abeja11.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Centro" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Abeja03.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Abeja01.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Derecho" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Abeja02.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Abeja06.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Izquierdo" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Abeja04.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Derecho" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Abeja05.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Centro" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Búho09.png";
    $descripcion="Buhos, Proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Izquierdo" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Búho07.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Derecho" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Búho08.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Centro" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Búho12.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Búho10.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Derecho" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Búho11.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Centro" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Búho03.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Búho01.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Derecho" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Búho02.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Búho06.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Izquierdo" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Búho04.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Derecho" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Búho05.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
    /*INICIO CONDICIONES CAMALEÓN*/
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Centro" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Camaleón09.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Izquierdo" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Camaleón07.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Derecho" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Camaleón08.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Centro" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Camaleón12.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Camaleón10.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Derecho" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Camaleón11.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Centro" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Camaleón03.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Camaleón01.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Derecho" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Camaleón02.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Camaleón06.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Izquierdo" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Camaleón04.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Derecho" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Camaleón05.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";

    /* **INICIO CONDICIONAL CASTOR** */


}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Centro" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Castor09.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Izquierdo" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Castor07.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Derecho" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Castor08.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Centro" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Castor12.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan. 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Castor10.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan. 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Derecho" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Castor11.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Centro" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Castor03.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan paso a paso y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Castor01.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan paso a paso y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Derecho" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Castor02.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Castor06.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Izquierdo" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Castor04.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Derecho" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Castor05.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";

    /*INICIO CONDICIONAL DELFIN*/

}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Centro" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Delfín09.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea. 
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Izquierdo" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Delfín07.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.
 
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Derecho" && $mayorColor=="Rojo"){
    $animodo = "http://mentorecuador.com/img/Delfín08.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea. 
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Centro" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Delfín12.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el finalLos delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea. 
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Delfín10.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea. 
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Derecho" && $mayorColor=="Verde"){
    $animodo = "http://mentorecuador.com/img/Delfín11.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Centro" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Delfín03.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Delfín01.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Derecho" && $mayorColor=="Amarillo"){
    $animodo = "http://mentorecuador.com/img/Delfín02.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Delfín06.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Izquierdo" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Delfín04.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Derecho" && $mayorColor=="Azul"){
    $animodo = "http://mentorecuador.com/img/Delfín05.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
    Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.
";
}






//$abeja= "http://mentoria.juntadeaguapilalo.com/img/Abeja08.png";

$mail = new PHPMailer(true);
try {
    //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.hosting24.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mentoria@contrataecuador.com';                     // SMTP username
    $mail->Password   = 'JointEc1077';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $html='<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Resultado Mentoria Test</title>
    <link rel="shortcut icon" href="icono2.png" type="image/x-icon" style="border-radius: 50%">
</head>
<body style="background-color: #ecf0f1">


<table style="margin:70px auto"  width="30">
    <tr><td rowspan="4"  style="background: #111111;padding: 0 20px;border: 2px solid #75b8f9">
            <img src="http://mentorecuador.com/img/icono2.png" alt="íDr.Mínd" width="150" style="margin-left: 9%;">
            <h2 style="color: #ffffff;margin-left: 15%;"><strong>íDr. Mínd.</strong></h2>
            <br><br><br><br><br><br><br>
            <h2 style="color:#ffffff;margin-left: 5%;">Patricio Mena <br>   
                <small style=" margin-left:15%;">Formador</small>
                <br>
                <small>Cel:0979002223</small>
                <small><br><a href="#" style="margin-left: -7% !important;" >idoctorcrop@gmail.com</a></small>
            </h2><br>
        </td>
    </tr>
    <tr style="background: linear-gradient(to right, #4e73df,#75b8f9, #75b8f9);">
        <td >
            <h1 style=" text-align: center;"><strong>'.$rAnimodo['animodo'].'</strong></h1>
            <div style="  margin-left: 20%; margin-top: -5%;">

                <img src='.$animodo.' alt="" width="150" height="250" style="margin-left:-25%;">
                <p style="font-size: 18px !important;display: inline-block !important;text-align:justify !important;width: 75%;">
                    <strong>'.$descripcion.'</strong>
                </p><br>
                <label for="usuario" style="font-size:1.5rem;color: #000000;margin-left: -22%;"><strong>'.$result['nombre'].' '.$result['apellido'].'</strong></label>
                <img src="http://mentorecuador.com/img/Castor01.png" alt="" width="100" style="float: right">
                <img src="http://mentorecuador.com/img/Delfín02.png" alt="" width="60" style="float: right">
            </div>
            <div>
                <table  border="1" style="margin: 0 auto;text-align: center;background: #ffffff;border:2px solid #4e73df;" width="600" height="120" >
                    <thead style="font-size: 20px;background: yellow;">
                    <tr>
                        <td><strong>Visual</strong></td>
                        <td><strong>Auditivo</strong></td>
                        <td><strong>Kinestésico</strong></td>
                        <td><strong>Negociador</strong></td>
                        <td><strong>Persistente</strong></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="font-size:1.2rem">'.$resultVak['visual'].'</td>
                        <td style="font-size:1.2rem">'.$resultVak['auditivo'].'</td>
                        <td style="font-size:1.2rem">'.$resultVak['kinestesico'].'</td>
                        <td style="font-size:1.2rem">'.$resultNegociador['valoracion'].'</td>
                        <td style="font-size:1.2rem">'.$resultPersistente['persistente'].'</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </td>
    </tr>
    <tr></tr>
    <tr></tr>
</table>
</body>
</html>';
    //Recipients
    $mail->setFrom('mentoria@contrataecuador.com', 'Mentoria Joint Ecuador');
    $mail->addAddress($result['email']);     // Add a recipient

    // Attachments
    /*<img src="http://mentor.jointecuador.com/img/icono2.png" alt="mentoria" width="100" height="100"> <br>
                          Saludos Coordiales <br>
                          Tu nombre  es '.$name.' <br>
                          Tu apellido es '.$lastName.'<br>
                          Tu Telefono es '.$number.' <br>
                          Tu email es '.$email.' <br>
                          Gracias por participar en las pruebas
                          de emision de mensaje <br>
                          ATT: DEPARTAMENTO DE DESARROLLO*/
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $subject = "Resultado Test - Mentoriaa";   // << No reconoce la Ñ 
    $mail->Subject = $subject; 
    $mail->Body    = $html;
    //$mail->addAttachment('informe.html','Resultado Mentoria');
    $mail->send();
    $_SESSION['id_Usuario']=$id_Usuario;
    header('location:result.php');
} catch (Exception $e) {
    echo "Error al enviar mensaje: {$mail->ErrorInfo}";
}
?>
