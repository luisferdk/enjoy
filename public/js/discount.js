$(document).ready(function(){
    $("#applydiscount").click(function(){
        validDiscount();
    });
});

function validDiscount(){
    if($.trim($('#percentage').val()) === '' || $.trim($('#dti').val()) === '' || $.trim($('#dte').val()) === ''
    || $('#status').val() === 0){
        swal('Existen campos vacios','','error');
    }else{
        var objDis = {
            'percentage':$('#percentage').val(),
            'init':$('#dti').val(),
            'end':$('#dte').val(),
            'status':1,
            'agency_id': $("#idAgen").val(),
            '_token':$("#tokenglobal").val()
        };
        saveDiscount(objDis)
    }

}

function saveDiscount(obj){
    $.ajax({
        url: 'apply-discount',
        type: 'POST',
        data:obj,
        success: function(data) {
            if(data){
                swal('Descuento aplicado a la agencia exitosamente','','success');
                cleanFormDiscount();
            }else{
                swal('Error al aplicar descuento','','error');
            }
            getAgencies();
        },
    });
}

function cleanFormDiscount(){
    $('#percentage').val();
    $('#dti').val();
    $('#dte').val();
    $("#idAgen").val();
}