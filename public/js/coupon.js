$(document).ready(function(){
    getCoupons();

    $('.datepicker').datepicker({
        format:'yyyy-mm-dd'
    });

    $(document).on('click','#sendCoupon',function(){
        if($.trim($("#code").val()) === '' || $.trim($('#name').val()) === '' || $.trim($('#percentage').val()) === '' ||
            $.trim($("#dti").val()) === '' || $.trim($("#dte").val()) === '')
            saveCoupon($("#code").val(),$('#name').val(),$("#dti").val(),$("#dte").val(),$("#status").val(),$('#percentage').val());
        else{
            swal('Error, existen campos vacios','','success');
        }
    });
});

function getCoupons(){
    $.ajax({
        url: 'getcoupons',
        type: 'GET',
        error: function() {
            $('#info').html('<p>An error has occurred</p>');
        },
        success: function(data) {
            if(data.length > 0){
                $("#dataCoupon").html('');
                var coupons = data;

                for(var i = 0; i < coupons.length; i++){
                    var date = coupons[i]['created_at'].split(' ');
                    var status = '';

                    if( parseInt(coupons[i]['status']) === 1 )
                        status = 'Activo';
                    else
                        status = 'Inactivo';

                    var valueCoupon =
                        '<tr>' +
                            '<td>'+coupons[i]['code']+'<td/>'+
                            '<td>'+coupons[i]['name']+'<td/>'+
                            '<td>'+coupons[i]['percentage']+'<td/>'+
                            '<td>'+coupons[i]['date_init']+'<td/>'+
                            '<td>'+coupons[i]['date_end']+'<td/>'+
                            '<td>'+date[0]+'<td/>'+
                            '<td>'+status+'<td/>'+
                            '<td>'+
                                '<i class="small material-icons">insert_chart</i>'+
                                '<i class="small material-icons">insert_chart</i>'+
                            '<td/>'+
                        '</tr>';
                    $("#dataCoupon").append(valueCoupon);
                    $("td:empty").remove();
                }
            }
        },
    });
}

function validSendCoupon(){
    if($.trim($("#code").val()) === '' || $.trim($('#name').val()) === '' || $.trim($('#percentage').val()) === '' ||
        $.trim($("#dti").val()) === '' || $.trim($("#dte").val()) === '')
        swal('Error, existen campos vacios','','error');
    else{
        saveCoupon($('#name').val(),$("#code").val(),$("#dti").val(),$("#dte").val(),$("#status").val(),$('#percentage').val());
    }
}

function cleanFormCoupon() {
    $("#code").val('');
    $('#name').val('');
    $("#dti").val('');
    $("#dte").val('');
    $("#status").val('');
    $('#percentage').val('');
}

function saveCoupon(name,code,dti,dte,status,percentage){
    $.ajax({
        url: 'savecoupons',
        type: 'POST',
        data:{
            name:name,
            code:code,
            date_init:dti,
            date_end:dte,
            status:status,
            percentage:percentage,
            _token:$("#token").val()
        },
        success: function(data) {
            if(data){
                swal('Cupon registrado exitosamente','','success');
                cleanFormCoupon();
            }else{
                swal('Error al crear nuevo cupon, intente luego','','error');
            }
            getCoupons();
        },
    });
}