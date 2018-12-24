$(document).ready(function(){
    getAgencies();

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
                    //cleanFormAgency();
                }else{
                    swal('Error al confirmar la agencia,intente luego','','error');
                }
                getAgencies();
            },
        });
    });
});

 function saveAgency(object){
     $.ajax({
         url: 'change-status',
         type: 'POST',
         data:object,
         success: function(data) {
             if(data){
                 swal('Agencia registrada exitosamente','','success');
                 cleanFormAgency();
             }else{
                 swal('Error al registrar la agencia,intente luego','','error');
             }
             getAgencies();
         },
     });
 }

 function validFormAgency(){
    if($.trim($('#title').val()) === '' || $.trim($('#name').val()) === '' || $.trim($('#last').val()) === '' ||
        $.trim($('#email').val()) === '' || $.trim($('#number').val()) === '' ||
        $.trim($('#company_name').val()) === '' || $.trim($('#company_type').val()) === '' ||
        $.trim($('#web').val()) === '' || $.trim($('#address').val()) === '' || $.trim($('#city').val()) === '' ||
        $.trim($('#zip').val()) === '' || $.trim($('#state').val()) === '' || $.trim($('#country').val()) === ''){
        swal("Error! Existen campos vacios!");
        return 0;
    }else{
        return {
            'company_name':$('#company_name').val(),
            'company_type':$('#company_type').val(),
            'website':$('#web').val(),
            'street_address':$('#address').val(),
            'city':$('#city').val(),
            'zip':$('#zip').val(),
            'country':$('#country').val(),
            'title':$('#title').val(),
            'first_name':$('#name').val(),
            'last_name':$('#last').val(),
            'email':$('#email').val(),
            'phone_number':$('#number').val(),
            'state':$('#state').val(),
            '_token':$('#token').val(),
            'status':0
        };
    }
 }

 function cleanFormAgency(){
     $('#company_name').val('');
     $('#company_type').val('');
     $('#web').val('');
     $('#address').val('');
     $('#city').val('');
     $('#zip').val('');
     $('#country').val('');
     $('#title').val('');
     $('#name').val('');
     $('#last').val('');
     $('#email').val('');
     $('#number').val('');
     $('#state').val('');
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
                         '<td>'+agencies[i]['company_name']+'<td/>'+
                         '<td>'+agencies[i]['company_type']+'<td/>'+
                         '<td>'+agencies[i]['city']+'<td/>'+
                         '<td>'+agencies[i]['country']+'<td/>'+
                         '<td>'+agencies[i]['email']+'<td/>'+
                         '<td>'+status+'<td/>'+
                         '<td>'+
                         '<span class="small material-icons" id="upa-'+agencies[i]['id']+'">autorenew</span>'+
                         '<td/>'+
                         '</tr>';
                     $("#dataAgency").append(valueAgencies);
                     $("td:empty").remove();
                 }
             }
         },
     });
 }