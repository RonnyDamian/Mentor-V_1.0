    /*Valida que se haya seleccionado un radiobutton*/
    
    $(document).ready(function()
    {
    
        /*INICIO PREGUNTA 1*/
       $('#preg1op1op1').click(function () {
    
           $("#formulario2 input[ id='preg1op1op2']:radio").prop('disabled', true);
           $("#formulario2 input[id='preg1op1op3']:radio").prop('disabled', true);
           $("#formulario2 input[id='preg1op2op1']:radio").prop('disabled', true);
           $("#formulario2 input[id='preg1op3op1']:radio").prop('disabled', true);
           $("#formulario2 input[id='preg1op4op1']:radio").prop('disabled', true);
    
           $("#formulario2 input[id='preg1op2op2']:radio").prop('disabled', false);
           $("#formulario2 input[id='preg1op3op2']:radio").prop('disabled', false);
           $("#formulario2 input[id='preg1op4op2']:radio").prop('disabled', false);
    
    
       })
    
        $('#preg1op2op1').click(function () {
            $("#formulario2 input[id='preg1op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[ id='preg1op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg1op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg1op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg1op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg1op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg1op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg1op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg1op3op1').click(function () {
            $("#formulario2 input[id='preg1op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg1op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg1op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg1op4op2']:radio").prop('disabled', false);
        })
        $('#preg1op4op1').click(function () {
            $("#formulario2 input[id='preg1op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg1op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg1op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg1op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg1op1op2').click(function () {
            $("#formulario2 input[ id='preg1op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op4op2']:radio").attr('disabled', true);5
        })
    
    
        $('#preg1op2op2').click(function () {
            $("#formulario2 input[ id='preg1op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op4op2']:radio").attr('disabled', true);5
    
    
        })
    
        $('#preg1op3op2').click(function () {
            $("#formulario2 input[ id='preg1op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg1op4op2').click(function () {
            $("#formulario2 input[ id='preg1op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg1op3op2']:radio").attr('disabled', true);
        })
         /* FIN PREGUNTA 1 */
    
        /*INICIO PREGUNTA 2*/
    
        $('#preg2op1op1').click(function () {
    
            $("#formulario2 input[ id='preg2op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg2op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg2op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg2op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg2op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg2op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg2op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg2op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg2op2op1').click(function () {
            $("#formulario2 input[id='preg2op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[ id='preg2op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg2op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg2op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg2op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg2op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg2op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg2op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg2op3op1').click(function () {
            $("#formulario2 input[id='preg2op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg2op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg2op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg2op4op2']:radio").prop('disabled', false);
        })
        $('#preg2op4op1').click(function () {
            $("#formulario2 input[id='preg2op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg2op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg2op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg2op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg2op1op2').click(function () {
            $("#formulario2 input[ id='preg2op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op4op2']:radio").attr('disabled', true);5
        })
    
    
        $('#preg2op2op2').click(function () {
            $("#formulario2 input[ id='preg2op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op4op2']:radio").attr('disabled', true);5
    
    
        })
    
        $('#preg2op3op2').click(function () {
            $("#formulario2 input[ id='preg2op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg2op4op2').click(function () {
            $("#formulario2 input[ id='preg2op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg2op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 2*/
    
        /*INICIO PREGUNTA 3*/
    
        $('#preg3op1op1').click(function () {
    
            $("#formulario2 input[ id='preg3op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg3op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg3op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg3op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg3op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg3op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg3op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg3op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg3op2op1').click(function () {
            $("#formulario2 input[id='preg3op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[ id='preg3op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg3op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg3op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg3op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg3op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg3op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg3op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg3op3op1').click(function () {
            $("#formulario2 input[id='preg3op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg3op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg3op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg3op4op2']:radio").prop('disabled', false);
        })
        $('#preg3op4op1').click(function () {
            $("#formulario2 input[id='preg3op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg3op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg3op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg3op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg3op1op2').click(function () {
            $("#formulario2 input[ id='preg3op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op4op2']:radio").attr('disabled', true);5
        })
    
    
        $('#preg3op2op2').click(function () {
            $("#formulario2 input[ id='preg3op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op4op2']:radio").attr('disabled', true);5
    
    
        })
    
        $('#preg3op3op2').click(function () {
            $("#formulario2 input[ id='preg3op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg3op4op2').click(function () {
            $("#formulario2 input[ id='preg3op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg3op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 3*/
    
        /*INICIO PREGUNTA 4*/
    
        $('#preg4op1op1').click(function () {
    
            $("#formulario2 input[ id='preg4op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg4op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg4op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg4op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg4op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg4op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg4op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg4op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg4op2op1').click(function () {
            $("#formulario2 input[id='preg4op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[ id='preg4op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg4op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg4op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg4op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg4op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg4op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg4op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg4op3op1').click(function () {
            $("#formulario2 input[id='preg4op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg4op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg4op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg4op4op2']:radio").prop('disabled', false);
        })
        $('#preg4op4op1').click(function () {
            $("#formulario2 input[id='preg4op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg4op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg4op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg4op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg4op1op2').click(function () {
            $("#formulario2 input[ id='preg4op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op4op2']:radio").attr('disabled', true);5
        })
    
    
        $('#preg4op2op2').click(function () {
            $("#formulario2 input[ id='preg4op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op4op2']:radio").attr('disabled', true);5
    
    
        })
    
        $('#preg4op3op2').click(function () {
            $("#formulario2 input[ id='preg4op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg4op4op2').click(function () {
            $("#formulario2 input[ id='preg4op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg4op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 4*/
    
        /*INICIO PREGUNTA 5*/
    
        $('#preg5op1op1').click(function () {
    
            $("#formulario2 input[id='preg5op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg5op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg5op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg5op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg5op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg5op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg5op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg5op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg5op2op1').click(function () {
            $("#formulario2 input[id='preg5op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[ id='preg5op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg5op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg5op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg5op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg5op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg5op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg5op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg5op3op1').click(function () {
            $("#formulario2 input[id='preg5op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg5op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg5op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg5op4op2']:radio").prop('disabled', false);
        })
        $('#preg5op4op1').click(function () {
            $("#formulario2 input[id='preg5op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg5op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg5op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg5op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg5op1op2').click(function () {
            $("#formulario2 input[ id='preg5op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op4op2']:radio").attr('disabled', true);5
        })
    
    
        $('#preg5op2op2').click(function () {
            $("#formulario2 input[ id='preg5op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op4op2']:radio").attr('disabled', true);5
    
    
        })
    
        $('#preg5op3op2').click(function () {
            $("#formulario2 input[ id='preg5op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg5op4op2').click(function () {
            $("#formulario2 input[ id='preg5op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg5op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 5*/
    
    
        /*INICIO PREGUNTA 6*/
    
        $('#preg6op1op1').click(function () {
    
            $("#formulario2 input[id='preg6op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg6op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg6op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg6op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg6op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg6op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg6op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg6op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg6op2op1').click(function () {
            $("#formulario2 input[id='preg6op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[ id='preg6op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg6op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg6op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg6op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg6op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg6op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg6op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg6op3op1').click(function () {
            $("#formulario2 input[id='preg6op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg6op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg6op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg6op4op2']:radio").prop('disabled', false);
        })
        $('#preg6op4op1').click(function () {
            $("#formulario2 input[id='preg6op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg6op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg6op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg6op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg6op1op2').click(function () {
            $("#formulario2 input[ id='preg6op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg6op2op2').click(function () {
            $("#formulario2 input[ id='preg6op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg6op3op2').click(function () {
            $("#formulario2 input[ id='preg6op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg6op4op2').click(function () {
            $("#formulario2 input[ id='preg6op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg6op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 6*/
    
        /*INICIO PREGUNTA 7*/
    
        $('#preg7op1op1').click(function () {
    
            $("#formulario2 input[id='preg7op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg7op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg7op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg7op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg7op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg7op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg7op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg7op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg7op2op1').click(function () {
            $("#formulario2 input[id='preg7op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[ id='preg7op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg7op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg7op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg7op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg7op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg7op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg7op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg7op3op1').click(function () {
            $("#formulario2 input[id='preg7op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg7op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg7op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg7op4op2']:radio").prop('disabled', false);
        })
        $('#preg7op4op1').click(function () {
            $("#formulario2 input[id='preg7op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg7op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg7op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg7op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg7op1op2').click(function () {
            $("#formulario2 input[ id='preg7op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg7op2op2').click(function () {
            $("#formulario2 input[ id='preg7op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg7op3op2').click(function () {
            $("#formulario2 input[ id='preg7op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg7op4op2').click(function () {
            $("#formulario2 input[ id='preg7op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg7op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 7*/
    
        /*INICIO PREGUNTA 8*/
    
        $('#preg8op1op1').click(function () {
    
            $("#formulario2 input[id='preg8op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg8op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg8op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg8op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg8op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg8op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg8op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg8op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg8op2op1').click(function () {
            $("#formulario2 input[id='preg8op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[ id='preg8op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg8op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg8op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg8op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg8op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg8op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg8op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg8op3op1').click(function () {
            $("#formulario2 input[id='preg8op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg8op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg8op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg8op4op2']:radio").prop('disabled', false);
        })
        $('#preg8op4op1').click(function () {
            $("#formulario2 input[id='preg8op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg8op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg8op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg8op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg8op1op2').click(function () {
            $("#formulario2 input[ id='preg8op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg8op2op2').click(function () {
            $("#formulario2 input[ id='preg8op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg8op3op2').click(function () {
            $("#formulario2 input[ id='preg8op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg8op4op2').click(function () {
            $("#formulario2 input[ id='preg8op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg8op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 8*/
    
        /*INICIO PREGUNTA 9*/
    
        $('#preg9op1op1').click(function () {
    
            $("#formulario2 input[id='preg9op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg9op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg9op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg9op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg9op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg9op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg9op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg9op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg9op2op1').click(function () {
            $("#formulario2 input[id='preg9op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg9op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg9op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg9op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg9op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg9op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg9op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg9op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg9op3op1').click(function () {
            $("#formulario2 input[id='preg9op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg9op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg9op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg9op4op2']:radio").prop('disabled', false);
        })
        $('#preg9op4op1').click(function () {
            $("#formulario2 input[id='preg9op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg9op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg9op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg9op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg9op1op2').click(function () {
            $("#formulario2 input[id='preg9op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg9op2op2').click(function () {
            $("#formulario2 input[id='preg9op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg9op3op2').click(function () {
            $("#formulario2 input[id='preg9op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg9op4op2').click(function () {
            $("#formulario2 input[id='preg9op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg9op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 9*/
    
        /*INICIO PREGUNTA 10*/
    
        $('#preg10op1op1').click(function () {
    
            $("#formulario2 input[id='preg10op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg10op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg10op4op1']:radio").prop('disabled', true);

            $("#formulario2 input[id='preg10op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg10op3op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg10op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg10op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg10op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg10op2op1').click(function () {
            $("#formulario2 input[id='preg10op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg10op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg10op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg10op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg10op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg10op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg10op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg10op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg10op3op1').click(function () {
            $("#formulario2 input[id='preg10op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg10op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg10op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg10op4op2']:radio").prop('disabled', false);
        })
        $('#preg10op4op1').click(function () {
            $("#formulario2 input[id='preg10op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg10op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg10op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg10op1op2']:radio").prop('disabled', false);
    
        })
    
        $('#preg10op1op2').click(function () {
            $("#formulario2 input[id='preg10op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg10op2op2').click(function () {
            $("#formulario2 input[id='preg10op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg10op3op2').click(function () {
            $("#formulario2 input[id='preg10op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg10op4op2').click(function () {
            $("#formulario2 input[id='preg10op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg10op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 10*/
    
    
        /*INICIO PREGUNTA 11*/
    
        $('#preg11op1op1').click(function () {
    
            $("#formulario2 input[id='preg11op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg11op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg11op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg11op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg11op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg11op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg11op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg11op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg11op2op1').click(function () {
            $("#formulario2 input[id='preg11op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg11op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg11op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg11op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg11op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg11op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg11op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg11op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg11op3op1').click(function () {
            $("#formulario2 input[id='preg11op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg11op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg11op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg11op4op2']:radio").prop('disabled', false);
        })
        $('#preg11op4op1').click(function () {
            $("#formulario2 input[id='preg11op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg11op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg11op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg11op1op2']:radio").prop('disabled', false);
        })
    
        $('#preg11op1op2').click(function () {
            $("#formulario2 input[id='preg11op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg11op2op2').click(function () {
            $("#formulario2 input[id='preg11op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg11op3op2').click(function () {
            $("#formulario2 input[id='preg11op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg11op4op2').click(function () {
            $("#formulario2 input[id='preg11op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg11op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 11*/
    
        /*INICIO PREGUNTA 12*/
    
        $('#preg12op1op1').click(function () {
    
            $("#formulario2 input[id='preg12op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg12op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg12op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg12op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg12op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg12op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg12op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg12op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg12op2op1').click(function () {
            $("#formulario2 input[id='preg12op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg12op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg12op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg12op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg12op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg12op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg12op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg12op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg12op3op1').click(function () {
            $("#formulario2 input[id='preg12op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg12op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg12op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg12op4op2']:radio").prop('disabled', false);
        })
        $('#preg12op4op1').click(function () {
            $("#formulario2 input[id='preg12op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg12op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg12op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg12op1op2']:radio").prop('disabled', false);
        })
    
        $('#preg12op1op2').click(function () {
            $("#formulario2 input[id='preg12op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg12op2op2').click(function () {
            $("#formulario2 input[id='preg12op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg12op3op2').click(function () {
            $("#formulario2 input[id='preg12op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg12op4op2').click(function () {
            $("#formulario2 input[id='preg12op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg12op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 12*/
    
    
        /*INICIO PREGUNTA 13*/
    
        $('#preg13op1op1').click(function () {
    
            $("#formulario2 input[id='preg13op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg13op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg13op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg13op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg13op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg13op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg13op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg13op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg13op2op1').click(function () {
            $("#formulario2 input[id='preg13op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg13op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg13op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg13op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg13op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg13op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg13op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg13op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg13op3op1').click(function () {
            $("#formulario2 input[id='preg13op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg13op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg13op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg13op4op2']:radio").prop('disabled', false);
        })
        $('#preg13op4op1').click(function () {
            $("#formulario2 input[id='preg13op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg13op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg13op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg13op1op2']:radio").prop('disabled', false);
        })
    
        $('#preg13op1op2').click(function () {
            $("#formulario2 input[id='preg13op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg13op2op2').click(function () {
            $("#formulario2 input[id='preg13op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg13op3op2').click(function () {
            $("#formulario2 input[id='preg13op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg13op4op2').click(function () {
            $("#formulario2 input[id='preg13op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg13op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 13*/
    
    
        /*INICIO PREGUNTA 14*/
    
        $('#preg14op1op1').click(function () {
    
            $("#formulario2 input[id='preg14op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg14op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg14op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg14op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg14op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg14op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg14op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg14op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg14op2op1').click(function () {
            $("#formulario2 input[id='preg14op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg14op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg14op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg14op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg14op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg14op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg14op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg14op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg14op3op1').click(function () {
            $("#formulario2 input[id='preg14op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg14op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg14op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg14op4op2']:radio").prop('disabled', false);
        })
        $('#preg14op4op1').click(function () {
            $("#formulario2 input[id='preg14op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg14op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg14op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg14op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg14op1op2').click(function () {
            $("#formulario2 input[id='preg14op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg14op2op2').click(function () {
            $("#formulario2 input[id='preg14op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg14op3op2').click(function () {
            $("#formulario2 input[id='preg14op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg14op4op2').click(function () {
            $("#formulario2 input[id='preg14op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg14op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 14*/
    
        /*INICIO PREGUNTA 15*/
    
        $('#preg15op1op1').click(function () {
    
            $("#formulario2 input[id='preg15op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg15op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg15op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg15op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg15op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg15op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg15op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg15op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg15op2op1').click(function () {
            $("#formulario2 input[id='preg15op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg15op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg15op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg15op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg15op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg15op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg15op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg15op1op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg15op3op1').click(function () {
            $("#formulario2 input[id='preg15op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg15op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg15op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg15op1op2']:radio").prop('disabled', false);
        })
        $('#preg15op4op1').click(function () {
            $("#formulario2 input[id='preg15op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg15op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg15op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg15op1op2']:radio").prop('disabled', false);
        })
    
        $('#preg15op1op2').click(function () {
            $("#formulario2 input[id='preg15op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg15op2op2').click(function () {
            $("#formulario2 input[id='preg15op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg15op3op2').click(function () {
            $("#formulario2 input[id='preg15op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg15op4op2').click(function () {
            $("#formulario2 input[id='preg15op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg15op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 15*/
    
    
        /*INICIO PREGUNTA 16*/
    
        $('#preg16op1op1').click(function () {
    
            $("#formulario2 input[id='preg16op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg16op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg16op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg16op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg16op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg16op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg16op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg16op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg16op2op1').click(function () {
            $("#formulario2 input[id='preg16op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg16op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg16op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg16op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg16op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg16op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg16op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg16op1op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg16op3op1').click(function () {
            $("#formulario2 input[id='preg16op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg16op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg16op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg16op1op2']:radio").prop('disabled', false);
        })
        $('#preg16op4op1').click(function () {
            $("#formulario2 input[id='preg16op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg16op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg16op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg16op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg16op1op2').click(function () {
            $("#formulario2 input[id='preg16op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg16op2op2').click(function () {
            $("#formulario2 input[id='preg16op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg16op3op2').click(function () {
            $("#formulario2 input[id='preg16op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg16op4op2').click(function () {
            $("#formulario2 input[id='preg16op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg16op3op2']:radio").attr('disabled', true);
        })
    
        /*FIN PREGUNTA 16*/
    
    
        /*INICIO PREGUNTA 17*/
    
        $('#preg17op1op1').click(function () {
    
            $("#formulario2 input[id='preg17op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg17op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg17op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg17op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg17op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg17op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg17op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg17op4op2']:radio").prop('disabled', false);
        })
    
        $('#preg17op2op1').click(function () {
            $("#formulario2 input[id='preg17op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg17op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg17op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg17op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg17op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg17op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg17op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg17op4op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg17op3op1').click(function () {
            $("#formulario2 input[id='preg17op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg17op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg17op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg17op4op2']:radio").prop('disabled', false);
        })
        $('#preg17op4op1').click(function () {
            $("#formulario2 input[id='preg17op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg17op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg17op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg17op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg17op1op2').click(function () {
            $("#formulario2 input[id='preg17op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg17op2op2').click(function () {
            $("#formulario2 input[id='preg17op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg17op3op2').click(function () {
            $("#formulario2 input[id='preg17op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg17op4op2').click(function () {
            $("#formulario2 input[id='preg17op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg17op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 17*/
    
    
        /*INICIO PREGUNTA 18*/
    
        $('#preg18op1op1').click(function () {
    
            $("#formulario2 input[id='preg18op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg18op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg18op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg18op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg18op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg18op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg18op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg18op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg18op2op1').click(function () {
            $("#formulario2 input[id='preg18op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg18op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg18op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg18op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg18op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg18op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg18op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg18op3op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg18op3op1').click(function () {
            $("#formulario2 input[id='preg18op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg18op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg18op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg18op2op2']:radio").prop('disabled', false);
        })
        $('#preg18op4op1').click(function () {
            $("#formulario2 input[id='preg18op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg18op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg18op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg18op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg18op1op2').click(function () {
            $("#formulario2 input[id='preg18op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg18op2op2').click(function () {
            $("#formulario2 input[id='preg18op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg18op3op2').click(function () {
            $("#formulario2 input[id='preg18op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg18op4op2').click(function () {
            $("#formulario2 input[id='preg18op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg18op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 18*/
    
        /*INICIO PREGUNTA 19*/
    
        $('#preg19op1op1').click(function () {
    
            $("#formulario2 input[id='preg19op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg19op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg19op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg19op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg19op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg19op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg19op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg19op3op2']:radio").prop('disabled', false);
        })
    
        $('#preg19op2op1').click(function () {
            $("#formulario2 input[id='preg19op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg19op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg19op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg19op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg19op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg19op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg19op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg19op3op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg19op3op1').click(function () {
            $("#formulario2 input[id='preg19op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg19op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg19op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg19op2op2']:radio").prop('disabled', false);
        })
        $('#preg19op4op1').click(function () {
            $("#formulario2 input[id='preg19op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg19op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg19op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg19op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg19op1op2').click(function () {
            $("#formulario2 input[id='preg19op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg19op2op2').click(function () {
            $("#formulario2 input[id='preg19op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg19op3op2').click(function () {
            $("#formulario2 input[id='preg19op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg19op4op2').click(function () {
            $("#formulario2 input[id='preg19op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg19op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 19*/
    
    
        /*INICIO PREGUNTA 20*/
    
        $('#preg20op1op1').click(function () {
    
            $("#formulario2 input[id='preg20op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg20op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg20op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg20op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg20op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg20op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg20op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg20op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg20op2op1').click(function () {
            $("#formulario2 input[id='preg20op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg20op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg20op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg20op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg20op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg20op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg20op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg20op1op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg20op3op1').click(function () {
            $("#formulario2 input[id='preg20op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg20op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg20op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg20op1op2']:radio").prop('disabled', false);
        })
        $('#preg20op4op1').click(function () {
            $("#formulario2 input[id='preg20op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg20op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg20op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg20op1op2']:radio").prop('disabled', false);
        })
    
        $('#preg20op1op2').click(function () {
            $("#formulario2 input[id='preg20op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg20op2op2').click(function () {
            $("#formulario2 input[id='preg20op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg20op3op2').click(function () {
            $("#formulario2 input[id='preg20op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg20op4op2').click(function () {
            $("#formulario2 input[id='preg20op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg20op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 20*/
    
        /*INICIO PREGUNTA 21*/
    
        $('#preg21op1op1').click(function () {
    
            $("#formulario2 input[id='preg21op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg21op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg21op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg21op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg21op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg21op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg21op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg21op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg21op2op1').click(function () {
            $("#formulario2 input[id='preg21op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg21op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg21op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg21op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg21op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg21op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg21op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg21op1op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg21op3op1').click(function () {
            $("#formulario2 input[id='preg21op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg21op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg21op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg21op2op2']:radio").prop('disabled', false);
        })
        $('#preg21op4op1').click(function () {
            $("#formulario2 input[id='preg21op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg21op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg21op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg21op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg21op1op2').click(function () {
            $("#formulario2 input[id='preg21op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg21op2op2').click(function () {
            $("#formulario2 input[id='preg21op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg21op3op2').click(function () {
            $("#formulario2 input[id='preg21op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg21op4op2').click(function () {
            $("#formulario2 input[id='preg21op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg21op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 21*/
    
    
        /*INICIO PREGUNTA 22*/
    
        $('#preg22op1op1').click(function () {
    
            $("#formulario2 input[id='preg22op1op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg22op1op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg22op2op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg22op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg22op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg22op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg22op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg22op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg22op2op1').click(function () {
            $("#formulario2 input[id='preg22op1op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg22op2op2']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg22op2op3']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg22op3op1']:radio").prop('disabled', true);
            $("#formulario2 input[id='preg22op4op1']:radio").prop('disabled', true);
    
            $("#formulario2 input[id='preg22op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg22op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg22op1op2']:radio").prop('disabled', false);
        })
    
    
        $('#preg22op3op1').click(function () {
            $("#formulario2 input[id='preg22op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op4op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg22op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg22op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg22op2op2']:radio").prop('disabled', false);
        })
        $('#preg22op4op1').click(function () {
            $("#formulario2 input[id='preg22op1op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op2op1']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op4op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op3op1']:radio").attr('disabled', true);
    
            $("#formulario2 input[id='preg22op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg22op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[id='preg22op2op2']:radio").prop('disabled', false);
        })
    
        $('#preg22op1op2').click(function () {
            $("#formulario2 input[id='preg22op1op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op4op2']:radio").attr('disabled', true);
        })
    
    
        $('#preg22op2op2').click(function () {
            $("#formulario2 input[id='preg22op2op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op3op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op4op2']:radio").attr('disabled', true);
    
    
        })
    
        $('#preg22op3op2').click(function () {
            $("#formulario2 input[id='preg22op3op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op4op2']:radio").attr('disabled', true);
        })
    
        $('#preg22op4op2').click(function () {
            $("#formulario2 input[id='preg22op4op3']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op1op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op2op2']:radio").attr('disabled', true);
            $("#formulario2 input[id='preg22op3op2']:radio").attr('disabled', true);
        })
        /*FIN PREGUNTA 22*/
    
    
        /*Inicio caja de cambios*/
    
       if($('#cajaUno').click(function () {
    
           $("#formulario2 input[ id='preg1op1op1']:radio").prop('disabled', false );
           $("#formulario2 input[ id='preg1op1op1']:radio").prop('checked', false );
           $("#formulario2 input[ id='preg1op2op1']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op2op1']:radio").prop('checked', false );
           $("#formulario2 input[ id='preg1op3op1']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op3op1']:radio").prop('checked', false );
           $("#formulario2 input[ id='preg1op4op1']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op4op1']:radio").prop('checked', false );
    
           $("#formulario2 input[ id='preg1op1op2']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op1op2']:radio").prop('checked', false);
           $("#formulario2 input[ id='preg1op2op2']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op2op2']:radio").prop('checked', false);
           $("#formulario2 input[ id='preg1op3op2']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op3op2']:radio").prop('checked', false);
           $("#formulario2 input[ id='preg1op4op2']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op4op2']:radio").prop('checked', false);
    
           $("#formulario2 input[ id='preg1op1op3']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op1op3']:radio").prop('checked', false);
           $("#formulario2 input[ id='preg1op2op3']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op2op3']:radio").prop('checked', false);
           $("#formulario2 input[ id='preg1op3op3']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op3op3']:radio").prop('checked', false);
           $("#formulario2 input[ id='preg1op4op3']:radio").prop('disabled', false);
           $("#formulario2 input[ id='preg1op4op3']:radio").prop('checked', false);
    
    
       })){
    
       }
    
       /*Fin caja de cambios */
    
    
        /*Inicio caja de cambios 2*/
    
        if($('#cajaDos').click(function () {
    
            $("#formulario2 input[ id='preg2op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg2op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg2op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg2op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg2op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg2op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg2op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg2op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg2op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg2op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg2op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg2op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg2op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg2op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 2 */
    
        /*Inicio caja de cambios 3*/
    
        if($('#cajaTres').click(function () {
    
            $("#formulario2 input[ id='preg3op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg3op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg3op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg3op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg3op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg3op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg3op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg3op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg3op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg3op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg3op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg3op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg3op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg3op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 3*/
    
        /*Inicio caja de cambios 4*/
    
        if($('#cajaCuatro').click(function () {
    
            $("#formulario2 input[ id='preg4op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg4op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg4op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg4op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg4op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg4op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg4op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg4op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg4op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg4op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg4op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg4op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg4op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg4op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 4*/
    
        /*Inicio caja de cambios 5*/
    
        if($('#cajaCinco').click(function () {
    
            $("#formulario2 input[ id='preg5op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg5op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg5op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg5op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg5op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg5op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg5op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg5op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg5op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg5op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg5op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg5op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg5op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg5op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 5*/
    
        /*Inicio caja de cambios 6*/
    
        if($('#cajaSeis').click(function () {
    
            $("#formulario2 input[ id='preg6op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg6op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg6op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg6op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg6op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg6op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg6op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg6op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg6op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg6op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg6op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg6op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg6op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg6op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 6*/
    
        /*Inicio caja de cambios 7*/
    
        if($('#cajaSiete').click(function () {
    
            $("#formulario2 input[ id='preg7op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg7op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg7op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg7op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg7op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg7op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg7op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg7op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg7op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg7op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg7op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg7op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg7op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg7op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 7*/
    
    
        /*Inicio caja de cambios 8*/
    
        if($('#cajaOcho').click(function () {
    
            $("#formulario2 input[ id='preg8op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg8op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg8op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg8op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg8op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg8op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg8op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg8op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg8op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg8op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg8op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg8op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg8op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg8op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 8*/
    
        /*Inicio caja de cambios 9*/
    
        if($('#cajaNueve').click(function () {
    
            $("#formulario2 input[ id='preg9op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg9op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg9op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg9op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg9op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg9op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg9op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg9op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg9op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg9op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg9op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg9op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg9op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg9op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 9*/
    
        /*Inicio caja de cambios 11*/
    
        if($('#cajaDiez').click(function () {
    
            $("#formulario2 input[ id='preg10op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg10op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg10op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg10op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg10op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg10op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg10op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg10op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg10op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg10op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg10op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg10op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg10op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg10op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 10*/
    
    
        /*Inicio caja de cambios 11*/
    
        if($('#cajaOnce').click(function () {
    
            $("#formulario2 input[ id='preg11op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg11op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg11op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg11op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg11op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg11op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg11op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg11op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg11op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg11op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg11op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg11op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg11op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg11op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 11*/
    
        /*Inicio caja de cambios 12*/
    
        if($('#cajaDoce').click(function () {
    
            $("#formulario2 input[ id='preg12op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg12op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg12op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg12op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg12op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg12op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg12op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg12op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg12op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg12op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg12op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg12op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg12op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg12op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 12*/
    
    
        /*Inicio caja de cambios 13*/
    
        if($('#cajaTrece').click(function () {
    
            $("#formulario2 input[ id='preg13op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg13op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg13op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg13op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg13op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg13op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg13op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg13op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg13op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg13op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg13op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg13op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg13op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg13op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 13*/
    
    
        /*Inicio caja de cambios 14*/
    
        if($('#cajaCatorce').click(function () {
    
            $("#formulario2 input[ id='preg14op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg14op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg14op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg14op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg14op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg14op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg14op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg14op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg14op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg14op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg14op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg14op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg14op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg14op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 14*/
    
    
        /*Inicio caja de cambios 15*/
    
        if($('#cajaQuince').click(function () {
    
            $("#formulario2 input[ id='preg15op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg15op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg15op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg15op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg15op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg15op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg15op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg15op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg15op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg15op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg15op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg15op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg15op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg15op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 15*/
    
        /*Inicio caja de cambios 16*/
    
        if($('#caja16').click(function () {
    
            $("#formulario2 input[ id='preg16op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg16op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg16op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg16op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg16op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg16op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg16op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg16op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg16op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg16op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg16op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg16op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg16op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg16op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 16*/
    
        /*Inicio caja de cambios 17*/
    
        if($('#caja17').click(function () {
    
            $("#formulario2 input[ id='preg17op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg17op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg17op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg17op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg17op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg17op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg17op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg17op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg17op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg17op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg17op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg17op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg17op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg17op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 17*/
    
    
        /*Inicio caja de cambios 18*/
    
        if($('#caja18').click(function () {
    
            $("#formulario2 input[ id='preg18op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg18op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg18op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg18op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg18op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg18op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg18op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg18op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg18op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg18op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg18op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg18op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg18op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg18op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 18*/
    
        /*Inicio caja de cambios 19*/
    
        if($('#caja19').click(function () {
    
            $("#formulario2 input[ id='preg19op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg19op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg19op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg19op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg19op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg19op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg19op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg19op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg19op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg19op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg19op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg19op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg19op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg19op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 19*/
    
        /*Inicio caja de cambios 20*/
    
        if($('#caja20').click(function () {
    
            $("#formulario2 input[ id='preg20op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg20op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg20op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg20op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg20op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg20op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg20op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg20op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg20op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg20op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg20op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg20op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg20op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg20op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 20*/
    
        /*Inicio caja de cambios 21*/
    
        if($('#caja21').click(function () {
    
            $("#formulario2 input[ id='preg21op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg21op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg21op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg21op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg21op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg21op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg21op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg21op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg21op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg21op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg21op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg21op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg21op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg21op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 21*/
    
        /*Inicio caja de cambios 21*/
    
        if($('#caja22').click(function () {
    
            $("#formulario2 input[ id='preg22op1op1']:radio").prop('disabled', false );
            $("#formulario2 input[ id='preg22op1op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg22op2op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op2op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg22op3op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op3op1']:radio").prop('checked', false );
            $("#formulario2 input[ id='preg22op4op1']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op4op1']:radio").prop('checked', false );
    
            $("#formulario2 input[ id='preg22op1op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op1op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg22op2op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op2op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg22op3op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op3op2']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg22op4op2']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op4op2']:radio").prop('checked', false);
    
            $("#formulario2 input[ id='preg22op1op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op1op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg22op2op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op2op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg22op3op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op3op3']:radio").prop('checked', false);
            $("#formulario2 input[ id='preg22op4op3']:radio").prop('disabled', false);
            $("#formulario2 input[ id='preg22op4op3']:radio").prop('checked', false);
    
    
        })){
    
        }
    
        /*Fin caja de cambios 21*/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
