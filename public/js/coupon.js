$(document).ready(function(){
    getCoupons();

    $('.datepicker').datepicker({
        format:'yyyy-mm-dd'
    });

    $(document).on('blur','#cupon',function(){
        getCounponValue($(this).val());
    });

    $(document).on("click","span[id^='upc-']",function(){
        var id = $(this).attr('id').split('-').pop();
        var coupon = specificCounpon(id);

        if(coupon !== ''){
            $('#modal1').openModal();

            $("#code").val(coupon['code']);
            $("#name").val(coupon['name']);
            $("#percentage").val(coupon['percentage']);
            $("#dti").val(coupon['date_init']);
            $("#dte").val(coupon['date_end']);
            $("#status").val(coupon['status']);
            $("#validUp").val(1);
            $("#coupon_id").val(coupon['id']);
        }
    });

    $(document).on("click","span[id^='delc-']",function(){
        var id = $(this).attr('id').split('-').pop();

        swal({
            title: 'Estas seguro de eliminar este cupon?',
            text: "El cupon de borrara de la base de datos permanentemente",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminarlo'
        },(result) => {
            if (result) {

                $.ajax({
                    url: 'deletecoupons',
                    type: 'POST',
                    data:{id:id,_token:$("#token").val()},
                    success: function(data) {
                        if(data){
                            swal(
                                'Elininado!',
                                'El cupon ha sido eliminado.',
                                'success'
                            );
                        }else{
                            swal(
                                'Error!',
                                'Ha ocurrido un error, intente luego.',
                                'warning'
                            );
                        }
                        getCoupons();
                    },
                });
            }
        });
    });

    $(document).on('click','#sendCoupon',function(){

        if(parseInt($("#validUp").val()) === 1)
            updateCoupons($('#name').val(),$("#code").val(),$("#dti").val(),$("#dte").val(),$("#status").val(),$('#percentage').val());
        else
            saveCoupon($("#code").val(),$('#name').val(),$("#dti").val(),$("#dte").val(),$("#status").val(),$('#percentage').val());
    });
});

function specificCounpon(id){
    var coupon = '';
    if(id !== undefined || id !== ''){
        $.ajax({
            url: 'getspecific-coupon/'+id,
            type: 'GET',
            async:false,
            success: function(data) {
                coupon = data;
            },
        });
        return coupon;
    }else
        return '';
}

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
                        '<span class="small material-icons" id="upc-'+coupons[i]['id']+'">autorenew</span>'+
                        '<span class="small material-icons" id="delc-'+coupons[i]['id']+'">delete</span>'+
                        '<td/>'+
                        '</tr>';
                    $("#dataCoupon").append(valueCoupon);
                    $("td:empty").remove();
                }
            }
        },
    });
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

function updateCoupons(name,code,dti,dte,status,percentage) {

    swal({
        title: 'Estas seguro de actualizar este cupon?',
        text: "Se actualizara los datos del cupon",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Actualizar'
    },(result) => {
        if (result) {
            $.ajax({
                url: 'updatecoupons',
                type: 'POST',
                data:{
                    id:$("#coupon_id").val(),
                    code:code,
                    name:name,
                    percentage: percentage,
                    date_init:dti,
                    date_end:dte,
                    status:status,
                    _token:$("#token").val()
                },
                success: function(data) {
                    if(data){
                        swal(
                            'Actualizado!',
                            'El cupon ha sido actualizado.',
                            'success'
                        );
                    }else{
                        swal(
                            'Error!',
                            'Ha ocurrido un error, intente luego.',
                            'warning'
                        );
                    }
                    $("#validUp").val('');
                    getCoupons();
                },
            });
        }
    });
}

function getCounponValue(code){

    if(code === '' || code === undefined)
        return false;
    else{
        $.ajax({
            url: 'getcouponValue',
            type: 'GET',
            data:{'code':code},
            success: function(data) {
                if(data){
                    var value = parseFloat($("#price").val());
                    var per = parseFloat(data['percentage']);
                    console.log(value,per);
                    var finalPrice = value - parseInt(per * value / 100);
                    console.log(finalPrice);
                    $("#priceText").text('$ '+finalPrice+'.00');
                }else{
                    swal('Cupon expirado o no encontrado')
                }
            },
        });
    }

}