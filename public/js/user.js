$(document).ready(function(){
    $(document).on("click","span[id^='delu-']",function(){
        var id = $(this).attr('id').split('-').pop();
        deleteUser(id);
    });

    $(document).on("click","span[id^='upu-']",function(){
        var id = $(this).attr('id').split('-').pop();
        $("#idUsu").val(id);
        $("#modalUsu").openModal();
    });

    $(document).on("click","#upusu",function(){
        updateUser();
    });

    $(document).on('click','#saveUsu',function(){
        var name = $("#name-ad").val();
        var email = $("#email-ad").val();
        var password = $("#password-ad").val();

        if($.trim(name) === '' || $.trim(email) === '' || $.trim(password) === '')
            swal('Error,existen campos vacios','','error');
        else
            saveUsuario(name,email,password);
    })
});

function deleteUser(id){
    if( id === undefined || id === '' )
        return false;

    else{

        swal({
            title: 'Estas seguro de eliminar este usuario?',
            text: "El usuario de borrara de la base de datos permanentemente",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminarlo'
        },(result) => {
            if (result) {

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
                        var buttons = "";
                        if(data[i]['type'] !== 1){
                           buttons = '<span class="small material-icons" id="upu-'+data[i]['id']+'">loop</span>'+
                               '<span class="small material-icons" id="delu-'+data[i]['id']+'">delete_forever</span>';
                        }
                        var html = '<tr>' +
                            '<td>'+data[i]['name']+'<td/>'+
                            '<td>'+data[i]['email']+'<td/>'+
                            '<td>'+data[i]['type']+'<td/>'+
                            '<td>'+data[i]['created_at']+'<td/>'+
                            '<td>'+
                            buttons+
                            '<td/>'+
                            '</tr>';
                        $("#dataUser").append(html);
                        $("td:empty").remove();
                    }
                }
            }
        }
    });
}

function updateUser(){
    var name = $("#name").val();
    var email = $("#email").val();
    var type  = $("#type").val();
    var id    = $("#idUsu").val();
    var token = $("#tokenglobal").val();

    if($.trim(name) === '' || $.trim(email) === '' || $.trim(type) == 0){
        swal('Error existen campos vacios','','error');
        return false;
    }
    var obj = {
        name:name,
        email:email,
        type:type,
        id:id,
        _token:token
    };

    $.ajax({
        url:'updateusu',
        type:'POST',
        data:obj,
        success:function(data){
            if(data)
                swal('Usuario modificado exitosamente','','success');
            else
                swal('Error al modificar el usuario. Intente luego','','error');

            getAllUser();
        }
    });
}

function saveUsuario(name,email,pass){
    var obj = {
        'name':name,
        'email':email,
        'password':pass,
        'type':2,
        'token':'',
        '_token':$("#token_usu").val(),
        'ajax':true
    };

    $.ajax({
        url:'create-user-admin',
        type:'POST',
        data:obj,
        success:function(data){
            if(data){
                $("#name-ad").val('');
                $("#email-ad").val('');
                $("#password-ad").val('');
                $("#modalu").closeModal();
                swal('Usuario registrado exitosamente','','success');
            }
            else
                swal('Error al registrar el usuario. Intente luego','','error');

            getAllUser();
        }
    });
}