$(document).ready(function(){
    getAgencies();

    $('.datepicker').datepicker({
        format:'yyyy-mm-dd'
    });

    $("#sendAgency").click(function(){
        var object = validFormAgency();
        console.log(object);
        if(object !== 0)
            saveAgency(object);
    });

    $(document).on("click","span[id^='upa-']",function(){
        var id = $(this).attr('id').split('-').pop();
        $.ajax({
            url: 'change-status',
            type: 'GET',
            data:{'id':id},
            success: function(data) {
                if(data){
                    swal('Agencia confirmada exitosamente','','success');
                }else{
                    swal('Error al confirmar la agencia,intente luego','','error');
                }
                getAgencies();
            },
        });
    });

    $(document).on("click","span[id^='dela-']",function(){
        var id = $(this).attr('id').split('-').pop();
        deleteAgency(id);
    });

    $(document).on("click","span[id^='desa-']",function(){
        var id = $(this).attr('id').split('-').pop();
        $("#idAgen").val(id);
        $('#modalAgen').openModal();
    });
});

 function saveAgency(object){
     $.ajax({
         url: 'saveagency',
         type: 'POST',
         data:object,
         success: function(data) {
             if(data['status'] == 1){
                 swal('Agencia registrada exitosamente','','success');
                 cleanFormAgency();
             }else if(data['status'] == 0){
                 swal('El email introducido esta en uso','','success');
                 cleanFormAgency();
             }
             else{
                 swal('Error al registrar la agencia,intente luego','','error');
             }
             getAgencies();
         },
     });
 }

 function validFormAgency(){
    if($.trim($('#email').val()) === '' || $.trim($('#number').val()) === '' ||
        $.trim($('#industry_market').val()) === '' || $.trim($('#host_agency_name').val()) === '' ||
        $.trim($('#postal_code').val()) === '' || $.trim($('#address').val()) === '' || $.trim($('#lata').val()) === '' ){
        swal("Error! Existen campos vacios!");
        return 0;
    }else{
        return {
            'industry_market':$('#industry_market').val(),
            'host_agency_name':$('#host_agency_name').val(),
            'postal_code':$('#postal_code').val(),
            'address':$('#address').val(),
            'lata_number':$('#lata').val(),
            'email':$('#email').val(),
            'phone_number':$('#number').val(),
            'state':$('#state').val(),
            '_token':$('#token').val(),
            'comment':$("#comment").val(),
            'status':0
        };
    }
 }

 function cleanFormAgency(){
     $('#industry_market').val('');
     $('#host_agency_name').val('');
     $('#postal_code').val('');
     $('#address').val('');
     $('#lata').val('');
     $('#country').val('');
     $('#email').val('');
     $('#number').val('');

 }

 function getAgencies(){
     $.ajax({
         url: 'getagencies',
         type: 'GET',
         success: function(data) {
             if(data.length > 0){
                 $("#dataAgency").html('');
                 var agencies = data;

                 for(var i = 0; i < agencies.length; i++){
                     var status = '';

                     if( parseInt(agencies[i]['status']) === 1 )
                         status = 'Confirmada';
                     else
                         status = 'No Confirmada';

                     var valueAgencies =
                         '<tr>' +
                         '<td>'+agencies[i]['industry_market']+'<td/>'+
                         '<td>'+agencies[i]['host_agency_name']+'<td/>'+
                         '<td>'+agencies[i]['postal_code']+'<td/>'+
                         '<td>'+agencies[i]['lata_number']+'<td/>'+
                         '<td>'+agencies[i]['email']+'<td/>'+
                         '<td>'+agencies[i]['address']+'<td/>'+
                         '<td>'+agencies[i]['phone_number']+'<td/>'+
                         '<td>'+status+'<td/>'+
                         '<td>'+
                         '<span class="small material-icons" id="upa-'+agencies[i]['id']+'">check_box</span>'+
                         '<span class="small material-icons" id="dela-'+agencies[i]['id']+'">delete_forever</span>'+
                         '<span class="small material-icons" id="desa-'+agencies[i]['id']+'">account_balance</span>'+
                         '<td/>'+
                         '</tr>';
                     $("#dataAgency").append(valueAgencies);
                     $("td:empty").remove();
                 }
             }
         },
     });
 }

 function deleteAgency(id){
     if(id === '' || id === undefined){
         return false
     }else{
         $.ajax({
             url: 'delete-agency/'+id,
             type: 'GET',
             success: function(data) {
                 if(data){
                     swal('Agencia eliminada exitosamente','','success');
                     getAgencies();
                 }else{
                     swal('Error al eliminar la agencia,intente luego','','error');
                 }
                 getAgencies();
             },
         });
     }
 }