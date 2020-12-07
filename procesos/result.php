<?php
session_start();
require_once("autoload.php");
$id_Usuario =$_SESSION['id_Usuario'];

/*INICIO INSTANCIA MODELO ANIMODO*/
$objAnimodo= new Encuesta();
$rAnimodo = $objAnimodo->buscAnimodo($id_Usuario);
/*FIN INSTANCIA MODELO ANIMODO*/

/*INICIO INSTANCIA  MODELO USUARIO*/
$objUsuario = new Usuario();
$rUsuario = $objUsuario->buscaUsuario($id_Usuario);
$usuario = $rUsuario['nombre'] . " ". $rUsuario['apellido'];
$usuario = strtoupper($usuario);
/*FIN  INSTANCIA MODELO USUARIO*/

/*INICIO INSTANCIA DEL MODELO TEST DE VAK*/
$objVak = new Encuesta5();
$resultVak=$objVak->buscaTestVak($id_Usuario);
/*FIN INSTANCIA DEL MODELO TEST DE VAK*/


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
    $animodo = "../img/Abeja09.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Izquierdo" && $mayorColor=="Rojo"){
    $animodo = "../img/Abeja07.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Derecho" && $mayorColor=="Rojo"){
    $animodo = "../img/Abeja08.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Centro" && $mayorColor=="Verde"){
    $animodo = "../img/Abeja12.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "../img/Abeja10.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Derecho" && $mayorColor=="Verde"){
    $animodo = "../img/Abeja11.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Centro" && $mayorColor=="Amarillo"){
    $animodo = "../img/Abeja03.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "../img/Abeja01.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Derecho" && $mayorColor=="Amarillo"){
    $animodo = "../img/Abeja02.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "../img/Abeja06.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Izquierdo" && $mayorColor=="Azul"){
    $animodo = "../img/Abeja04.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Abeja' && $mayorCerebro=="Derecho" && $mayorColor=="Azul"){
    $animodo = "../img/Abeja05.png";
    $descripcion="Abejas, son aquellas personas que les gusta terminar su trabajo a tiempo. Siempre se enfocan en cumplir sus objetivos, son líderes que buscan ayudar a más personas administrando su accionar. Toman riesgos a cada momento.
                    Son muy agradables aunque cuando sus objetivos planeados no se cumplen pueden cambiar su carácter y ser agresivos.
                    Se involucran abiertamente a nuevas experiencias y estas se convierten en un reto que desean alcanzar.";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Centro" && $mayorColor=="Rojo"){
    $animodo = "../img/Búho09.png";
    $descripcion="Buhos, Proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Izquierdo" && $mayorColor=="Rojo"){
    $animodo = "../img/Búho07.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Derecho" && $mayorColor=="Rojo"){
    $animodo = "../img/Búho08.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Centro" && $mayorColor=="Verde"){
    $animodo = "../img/Búho12.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "../img/Búho10.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Derecho" && $mayorColor=="Verde"){
    $animodo = "../img/Búho11.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Centro" && $mayorColor=="Amarillo"){
    $animodo = "../img/Búho03.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "../img/Búho01.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Derecho" && $mayorColor=="Amarillo"){
    $animodo = "../img/Búho02.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "../img/Búho06.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Izquierdo" && $mayorColor=="Azul"){
    $animodo = "../img/Búho04.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
}else if($rAnimodo['animodo']=='Buho' && $mayorCerebro=="Derecho" && $mayorColor=="Azul"){
    $animodo = "../img/Búho05.png";
    $descripcion="Buhos, proyectan sabiduría, son excelentes observadores. Además, son capaces de volar lo suficientemente alto para ver el panorama completo. 
Toman acción luego de examinar cuidadosamente una situación. Están cuando las personas que quieren los necesitan. Suelen ser autodidactas, detestan la competencia y evitan a personas agresivas o dominantes. 
Aprenden de los errores, les gusta planificar. Son capaces de crear estrategias que les ayude a resolver problemas.
Son capaces de interpretar los fenómenos en forma creativa y bajo diferentes perspectivas. Reflexionan en base a información o hechos concretos.
";
    /*INICIO CONDICIONES CAMALEÓN*/
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Centro" && $mayorColor=="Rojo"){
    $animodo = "../img/Camaleón09.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Izquierdo" && $mayorColor=="Rojo"){
    $animodo = "../img/Camaleón07.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Derecho" && $mayorColor=="Rojo"){
    $animodo = "../img/Camaleón08.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Centro" && $mayorColor=="Verde"){
    $animodo = "../img/Camaleón12.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "../img/Camaleón10.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Derecho" && $mayorColor=="Verde"){
    $animodo = "../img/Camaleón11.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Centro" && $mayorColor=="Amarillo"){
    $animodo = "../img/Camaleón03.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "../img/Camaleón01.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Derecho" && $mayorColor=="Amarillo"){
    $animodo = "../img/Camaleón02.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "../img/Camaleón06.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Izquierdo" && $mayorColor=="Azul"){
    $animodo = "../img/Camaleón04.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";
}else if($rAnimodo['animodo']=='Camaleon' && $mayorCerebro=="Derecho" && $mayorColor=="Azul"){
    $animodo = "../img/Camaleón05.png";
    $descripcion="El camaleón tiene la habilidad única; el mimetismo.
Pueden adoptar el mismo color, forma o comportamiento de otro organismo u objeto del ambiente para ocultarse de sus enemigos y sobrevivir. 
En forma similar, las personas con este modo adaptativo son capaces de adecuarse al ambiente desempeñando cualquier rol exigido por una situación específica, por exigente que ésta sea. 
";

    /* **INICIO CONDICIONAL CASTOR** */


}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Centro" && $mayorColor=="Rojo"){
    $animodo = "../img/Castor09.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Izquierdo" && $mayorColor=="Rojo"){
    $animodo = "../img/Castor07.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Derecho" && $mayorColor=="Rojo"){
    $animodo = "../img/Castor08.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Centro" && $mayorColor=="Verde"){
    $animodo = "../img/Castor12.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan. 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "../img/Castor10.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan. 
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Derecho" && $mayorColor=="Verde"){
    $animodo = "../img/Castor11.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Centro" && $mayorColor=="Amarillo"){
    $animodo = "../img/Castor03.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan paso a paso y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "../img/Castor01.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan paso a paso y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Derecho" && $mayorColor=="Amarillo"){
    $animodo = "../img/Castor02.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "../img/Castor06.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Izquierdo" && $mayorColor=="Azul"){
    $animodo = "../img/Castor04.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";
}else if($rAnimodo['animodo']=='Castor' && $mayorCerebro=="Derecho" && $mayorColor=="Azul"){
    $animodo = "../img/Castor05.png";
    $descripcion="Castores, les encanta experimentar, solucionar problemas es parte de su día a día, toman decisiones con razonamiento deductivo. 
Cuando no logra resolver un problema se paralizan, pero lo intentan una y otra vez hasta solucionarlo.
Están enfocados en terminar lo que se proponen aunque deban trabajar más horas, tienen fijo su objetivo.
Le ponen mucho empeño a sus proyectos, los realizan \"paso a paso\" y en forma lógica. Planifican su trabajo en función a metas por lograr y plazos que cumplir antes de llevarlo a cabo. 
Los castores se inclinan por trabajar con objetos. Les gusta tener control sobre sus tareas y con frecuencia consideran que si otros intervienen los pueden retrasar.
Al estar expuesto a una teoría o modelo conceptual, siempre se cuestionan, no se quedan solamente con lo leído; investigan.
";

    /*INICIO CONDICIONAL DELFIN*/

}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Centro" && $mayorColor=="Rojo"){
    $animodo = "../img/Delfín09.png";
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
    $animodo = "../img/Delfín07.png";
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
    $animodo = "../img/Delfín08.png";
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
    $animodo = "../img/Delfín12.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el finalLos delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea. 
";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Izquierdo" && $mayorColor=="Verde"){
    $animodo = "../img/Delfín10.png";
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
    $animodo = "../img/Delfín11.png";
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
    $animodo = "../img/Delfín03.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Izquierdo" && $mayorColor=="Amarillo"){
    $animodo = "../img/Delfín01.png";
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
    $animodo = "../img/Delfín02.png";
    $descripcion="Delfines, Son personas a las que les gusta generar nuevas ideas, poseen habilidades imaginativas. Además son hábiles para reconocer los problemas y les gusta comprender a la gente.
Estas personas son de mucho apoyo cuando crean una lluvia de ideas. No son buenos tomando decisiones cuando se les presentan demasiadas alternativas. 
Los delfines se caracterizan por ser artísticos, sociables y sensibles.
Se preocupan por los demás, son buenos escuchando y se hacen querer por otras personas. 
Evitan las confrontaciones por temor a herir a otros 
Cuando toman decisiones lo hacen más en base a la intuición 
Odian los horarios y los plazos por esta razón se cree que son desorganizados o indisciplinados y que tienden a dejar las cosas para el final.
Los delfines piensan que la vida se presenta como una oportunidad magnífica para reflexionar, para conocerse mejor a sí mismo, a otras personas y comprender la realidad que los rodea.";
}else if($rAnimodo['animodo']=='Delfin' && $mayorCerebro=="Centro" && $mayorColor=="Azul"){
    $animodo = "../img/Delfín06.png";
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
    $animodo = "../img/Delfín04.png";
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
    $animodo = "../img/Delfín05.png";
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




/*FIN DECLARACIÓN DE RUTA IMAGEN*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Identifica que esta sucediendo en tu empresa y como mejorlarlo. Sabras todo esto de tu Personal El Test tiene un 99,9% de efectividad. Analizaremos con datos a cada persona y conoceremos todas sus bondades y debilidades. Revisaremos contigo si necesitas acender o despedir al personal indicado. Capacidad de Captar Información Nivel de Persistencia Formas de Comunicación Personal Peligroso">
    <meta name="keywords" content="Test de Personalidad, Animodos, Encuesta, Análisis, Forma de Pensar, Tipos de Cerebro, Color de la Comunicación, Forma Negociadora, Nivel de Persistencia,Test de Vak, iDRCrop, JointBS S.A.A, Joint">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iDrop Corp.</title>
    <link rel="shortcut icon" href="../img/icono2.png" type="image/x-icon" style="border-radius: 50%">
    <link rel="stylesheet" href="../style/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/preloader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>
<div id="preloader"><div id="status"></div></div>
<header>
    <section class="textos-header">
        <h1>Gracias por participar de la encuesta</h1>
        <h2 class="diseñoBoton" style="border: none !important">Resultado del Test</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                                                                    style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                  style="stroke: none; fill: #fff;"></path>
        </svg></div>
</header>
<main id="contenedor" style="margin-top: -2% !important;">
    <section class="contenedor sobre-nosotros">
        <h1 class="titulo" style="font-size: 35px"><?php echo $usuario?></h1>
        <div class="contenedor-sobre-nosotros ml-0">
            <img src="<?php echo $animodo;?>" alt="Animodo, Identificativo de la personalidad del usuario" class="imagen-about-us mr-lg-5" >
            <div class="contenido-textos">
                <h3><span>1</span> Descripción del animodo</h3>
                <p><?php echo $descripcion;?></p>
                <h3><span>2</span>Formas de aprender</h3>

                <table class="table  table-bordered text-center mt-4">
                    <thead>
                    <tr style="background-color:#4d0686;color:#FFFFFF">
                        <td>Visual</td>
                        <td>Auditivo</td>
                        <td>Kinestésico</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $resultVak['visual']?></td>
                        <td><?php echo $resultVak['auditivo']?></td>
                        <td><?php echo $resultVak['kinestesico']?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
<div class="row">
    <div class="col-7 ">
        <h2 class="float-right">
            <a href="#" class="diseñoBoton mt-1  zoom text-white" style="background-color:#4d0686;text-decoration:none;" id="report">
                <i class="far fa-file-pdf"></i>
                Generar PDF
            </a>
        </h2>
    </div>
    <div class="col-5"></div>
</div>


<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Celular</h4>
            <p>0987654321</p>
        </div>
        <div class="content-foo">
            <h4>Email</h4>
            <p>idrmind@gmail.com</p>
        </div>
        <div class="content-foo">
            <h4>Localidad</h4>
            <p>Latacunga - Cotopaxi</p>
        </div>
    </div>
    <h2 class="titulo-final">&copy; iDrCrop. | 2020</h2>
</footer>
<?php
session_unset();
session_destroy();
?>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/jquery.snow.min.1.0.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/popper.min.js"></script>
<script src="../js/preloader.js"></script>
<script src="../js/html2pdf.bundle.min.js"></script>
<script src="../js/pdf2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js" integrity="sha512-kI12xOdWTh/nL2vIx5Yf3z/kJSmY+nvdTXP2ARhepM/YGcmo/lmRGRttI3Da8FXLDw0Y9hRAyZ5JFO3NrCvvXA==" crossorigin="anonymous"></script>
<script>
    $(document).ready( function(){
        $.fn.snow({newOn: 100});
    });
</script>
</body>

</html>
