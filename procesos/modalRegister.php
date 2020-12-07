<?php
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<div class="modal  fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post"  onsubmit="return validacion();" id="auth">
            <div class="modal-header text-center  text-white" style="background-color: #4d0686;">
                <h4 class="modal-title w-100 font-weight-bold">Habilitar Mentoria</h4>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fas fa-users"></i>
                    <label data-error="wrong" data-success="right" for="form3">Por favor, seleccione una empresa</label>
                    <select name="empresa" id="empresa"  class="form-control select2-dropdown" required="required">
                        <option value="" selected="selected" disabled="disabled"  >-- Seleccione una opción --</option>
                        <?php
                        require_once("Empresa.php");
                        $obj2 = new Empresa();
                        $result2=$obj2->mostrarEmpresa();
                        foreach($result2 as $value2):
                            ?>
                            <option value="<?php echo $value2['id_Empresa'];?>"><?php echo $value2['empresa'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="md-form mb-4">
                    <i class="fas fa-unlock-alt"></i>
                    <label data-error="wrong" data-success="right" for="form2">Por favor, ingrese una contraseña</label>
                    <input type="password" id="clave" class="form-control validate" maxlength="20" minlength="2" name="clave" required="required">

                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn text-white" style="background-color: #4d0686;">Iniciar Test <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js"></script>
</body>

</html>


