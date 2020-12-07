<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <link rel="shortcut icon" href="../img/icono2.png" type="image/x-icon">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/select2.min.css">
    <link rel="stylesheet" href="../style/estilosDos.css">
    <title>Formulario Usuario</title>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body>
<header style="height: 70px">
</header>
<div style="height: 30px;"></div>
<div class="container col-lg-6">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white " >
                <div class="card-header">Registro de usuarios</div>
                <div class="card-body ">
                    <form id="form1" action="fb-callback.php" method="post" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre">Nombre</label>
                                <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required minlength="3" maxlength="70">
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="apellido">Apellido</label>
                                <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" value="" required minlength="3" maxlength="70">
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="sexo">Sexo</label>
                                <br>
                                <select name="sexo" id="sexo" required="required" class="form-control">
                                    <option value="" selected="selected" disabled="disabled">-- Seleccione una opción --</option>
                                    <option value="HOMBRE">HOMBRE</option>
                                    <option value="MUJER">MUJER</option>
                                    <option value="PREFIERO NO DECIRLO">PREFIERO NO DECIRLO</option>
                                </select>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="direccion">Edad</label>
                                <br>
                                <select name="edad" id="edad" required="required" class="form-control select2-dropdown">
                                    <option value="" selected="selected" disabled="disabled"  >-- Seleccione una edad --</option>
                                    <?php
                                    require_once("../procesos/Usuario.php");
                                    $obj = new Usuario();
                                    $result=$obj->mostrarEdad();
                                    foreach($result as $value):
                                        ?>
                                        <option value="<?php echo $value['edad'];?>"><?php echo $value['edad'];?></option>
                                    <?php endforeach;?>
                                </select>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="celular">Telefono celular</label>
                                <input name="celular" type="number" class="form-control" id="celular" placeholder="" value="" required="required" maxlength="10" minlength="10" onkeypress="return event.charCode >=47 && event.charCode<=57">
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="" value="" required="required" maxlength="70">
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="cargo">Profesión</label>
                                <input name="profesion" type="text" class="form-control" id="profesion" placeholder="" value="" minlength="3" maxlength="120" >
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="direccion">Empresa</label>
                                <br>
                                <select name="empresa" id="empresa"  class="form-control select2-dropdown">
                                    <option value="" selected="selected" disabled="disabled" >-- Seleccione una opción --</option>
                                    <?php
                                    require_once("../procesos/Empresa1.php");
                                    $obj2 = new Empresa1();
                                    $result2=$obj2->mostrarEmpresa();
                                    foreach($result2 as $value2):
                                        ?>
                                        <option value="<?php echo $value2['id_Empresa'];?>"><?php echo $value2['empresa'];?></option>
                                    <?php endforeach;?>
                                </select>
                                <label class="valid-feedback">¡Ok válido</label>
                                    <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="cargo">Cargo</label>
                                <input name="cargo" type="text" class="form-control" id="cargo" placeholder="" value="" minlength="3" maxlength="70">
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>
                        <button class="btn btnSubmit float-right" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../bootstrap/js/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/select2.min.js"></script>
<script src="../js/validaciones.js"></script>
<script>
    $("#edad").select2();
    $('#empresa').select2();
</script>
<script src="../js/codigo.js"></script>
<script>
    var input=  document.getElementById('celular');
     input.addEventListener('input',function(){
  if (this.value.length > 10) 
     this.value = this.value.slice(0,10); 
})
    
</script>
</body>
</html>