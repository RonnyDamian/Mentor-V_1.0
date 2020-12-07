function validacion(){
    $.ajax({
        url:'procesos/validacionModal.php',
        type:'POST',
        data:$('#auth').serialize(),
        success:function (response){
            if(response==1){
                $("#modalRegistro").modal('hide');
            }else if(response==0) {

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-center",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["error"]("La contraseña ingresada es incorrecta", 'Error de Acceso')
            }

        }});
    return false;
}