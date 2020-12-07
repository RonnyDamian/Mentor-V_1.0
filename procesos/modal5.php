<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="../img/icono2.png" type="image/x-icon" style="border-radius: 50%">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    <div class="col">
                        <img src="../img/icono2.png" alt="" width="40" height="40">
                        Detalles  de Progreso
                    </div>
                </h5>
            </div>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col" id="messagge"></div>
                </div>
                <div class="progress" >
                    <div class="progress-bar progress-bar-striped active"   role="progressbar"
                         aria-valuenow="20" aria-valuemin="20" aria-valuemax="20" style="width:80%" >
                        80%
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="continue" >Continuar</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/fontAwesome.js"></script>
<script>
    $( document ).ready(function() {
        $('#myModal').modal('toggle')
        let progressBar=$('.progress-bar');
        let progressNumber=0;
        setInterval(function(){
                while(progressNumber<=100){
                    progressBar.css('width', progressNumber + '%');
                    progressBar.attr('aria-valuenow', progressNumber);
                    progressNumber++;
                }
            $('#messagge').html("¡Felicidades! ¡Lograste terminar todo el Test! 🙌👍");
                $(".progress-bar").html('100%');
        },1000);
    });

    $('#continue').on('click', function () {
        setTimeout("location.href='result.php' ", 100);
    })
</script>
<script>
    $('#myModal').modal({
        backdrop: 'static',
        keyboard: false
    })
</script>