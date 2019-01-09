function login(){
    var email = $("#email").val();
    var pass  = $("#password").val();

    if($.trim(email) === '' || $.trim(pass) === ''){
        swal('Error, existen campos vacios','','error');
        return false;
    }

    $.ajax({
        url: 'login',
        type: 'POST',
        data:{'email':email,'password':pass,'_token':$("#token").val()},
        success:function(data){
            if(data['status'])
                location.href = data['redirect'];
            else
                swal('Error, credenciales irroneos','El email o la clave estan erronea','error');
        },
    });
}

function logout(){
    $.ajax({
        url: 'logout',
        type: 'GET',
        success:function(data){
            if(data){
                swal("Hasta luego..!");
                location.href = '/';
            }
        },
    });
}