$(document).ready(function(){
    $(document).on("click","span[id^='delu-']",function(){
        var id = $(this).attr('id').split('-').pop();
        deleteUser(id);
    });

    $(document).on("click","span[id^='upu-']",function(){
        var id = $(this).attr('id').split('-').pop();
        $("#modalUsu").openModal();
    });
});

function deleteUser(id){
    if( id === undefined || id === '' )
        return false;

    else{
        $.ajax({
            url:'delUser/'+id,
            type:'get',
            success:function(data){
                if(data)
                    swal('Usuario eliminado exitosamente!');
                else
                    swal('Error, no se pudo eliminar el usuario');

                getAllUser();
            }
        });
    }
}

function getAllUser(){
    $.ajax({
        url:'alluser',
        type:'get',
        success:function(data){
            if(data){
                if( data.length > 0 ){
                    $("#dataUser").html("");
                    for(var i = 0; i < data.length; i++){
                        var html = '<tr>' +
                            '<td>'+data[i]['name']+'<td/>'+
                            '<td>'+data[i]['email']+'<td/>'+
                            '<td>'+data[i]['type']+'<td/>'+
                            '<td>'+data[i]['created_at']+'<td/>'+
                            '<td>'+
                            '<span class="small material-icons" id="upu-'+data[i]['id']+'">check_box</span>'+
                            '<span class="small material-icons" id="delu-'+data[i]['id']+'">delete_forever</span>'+
                            '<td/>'+
                            '</tr>';
                        $("#dataUser").append(html);
                    }
                }
            }
        }
    });
}