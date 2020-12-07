<?php

require_once  '../vendor/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '2634091983524009',
    'app_secret' => 'd36cb8f462f787f338611dd1cdfb4d73',
    'default_graph_version' => 'v3.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$redirectURL = "https://".$_SERVER['SERVER_NAME']."/fb-callback.php";
$loginUrl = $helper->getLoginUrl($redirectURL, $permissions);

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión</title>
    <!--    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">-->
</head>
<body>
<div class="modal fade" id="modalSubscriptionForm"  role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center " style="background:#1877F2;">
                <h4 class="modal-title w-100 font-weight-bold " style="color:#ffffff;">Iniciar Sesión</h4>

            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-4">
                    <i class="fas fa-user prefix grey-text"></i>
                    <label for="">Usuario</label>
                    <input type="text" id="form3" class="form-control validate" placeholder="usuario">
                </div>
                <div class="md-form mb-4">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label for="">Email</label>
                    <input type="email" id="form2" class="form-control validate" placeholder="ejemplo@gmail.com">

                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <?php
                echo '<a href="fb-callback.php" class="btn " style="background:#1877F2;color:#ffffff">
                     
                     <strong>Continuar con facebook</strong>
                      
                    </a>';

                ?>
            </div>
        </div>
    </div>
</div>




<!--<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>-->
<script src="https://kit.fontawesome.com/409c7ac5fd.js" crossorigin="anonymous"></script>
</body>
</html>
