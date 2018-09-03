$(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    /*------------------Transfer------------------*/

        $("#date2").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: "0"
        });
        
        $("#date1").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            onSelect: function(date) {
                var date1 = $('#date1').datepicker('getDate');
                var date = new Date(Date.parse(date1));
                date.setDate(date.getDate() + 1);
                var newDate = date.toDateString();
                newDate = new Date(Date.parse(newDate));
                $('#date2').datepicker("option", "minDate", newDate);
                $('#date1').trigger("change");
            }
        });

        $("#date2VIP").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: "0"
        });
        
        $("#date1VIP").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            onSelect: function(date) {
                var date1VIP = $('#date1VIP').datepicker('getDate');
                var date = new Date(Date.parse(date1VIP));
                date.setDate(date.getDate() + 1);
                var newDate = date.toDateString();
                newDate = new Date(Date.parse(newDate));
                $('#date2VIP').datepicker("option", "minDate", newDate);
                $('#date1VIP').trigger("change");
            }
        });
     

        $('#time1').timepicker({ 'timeFormat': 'H:i' });    
        $('#time2').timepicker({ 'timeFormat': 'H:i' });
        $('.hora').timepicker({ 'timeFormat': 'H:i' });

        /*$("#formTraslado").validate({
            rules: {
                    "de":{required:true},
                    "para":{required:true},
                    "adultos":{required:true},
                    "ninos":{required:true},
                    "hotel":{required:true},
                    "fechaLlegada":{required:true},
                    "horaLlegada":{required:true},
                    "aerolineaLlegada":{required:true},
                    "vueloLlegada":{required:true},
                    "fechaSalida":{required:true},
                    "horaSalida":{required:true},
                    "aerolineaSalida":{required:true},
                    "vueloSalida":{required:true},
                    "nombre":{required:true},
                    "apellido":{required:true},
                    "correo":{required:true,email:true},
                    "telefono":{required:true},
                    "comentarios":{required:false},
                    "terminos":{required:true}
            },
            messages: {
                    "de":{required:"This field is required"},
                    "para":{required:"This field is required"},
                    "adultos":{required:"This field is required"},
                    "ninos":{required:"This field is required"},
                    "hotel":{required:"This field is required"},
                    "fechaLlegada":{required:"This field is required"},
                    "horaLlegada":{required:"This field is required"},
                    "aerolineaLlegada":{required:"This field is required"},
                    "vueloLlegada":{required:"This field is required"},
                    "fechaSalida":{required:"This field is required"},
                    "horaSalida":{required:"This field is required"},
                    "aerolineaSalida":{required:"This field is required"},
                    "vueloSalida":{required:"This field is required"},
                    "nombre":{required:"This field is required"},
                    "apellido":{required:"This field is required"},
                    "correo":{required:"This field is required",email:"Email not valid"},
                    "telefono":{required:"This field is required"},
                    "comentarios":{},
                    "terminos":{},
            }
        });*/
        $('#terminos').change(function(event) {
            if($(this).is(":checked")){
                $('.traslado').removeClass('disabled');
                $('.traslado').prop('disabled',false);
            }
            else{
                $('.traslado').addClass('disabled');   
                $('.traslado').prop('disabled',true);
            }
        });

    /*------------------Tour------------------*/
        $('#dateTour').datepicker({
            dateFormat: "yy-mm-dd",
            minDate: +1,
            onSelect:function(){
                $('#dateTour').trigger("change");
            }
        });

        /*$("#formTour").validate({
            rules: {
                "tour":{required:true},
                "fecha":{required:true},
                "adultos":{required:true},
                "ninos":{required:false},
                "nombre":{required:true},
                "apellido":{required:true},
                "correo":{required:true,email:true},
                "telefono":{required:true},
                "comentarios":{required:false},
                "terminos2":{required:true}
            },
            messages: {
                "tour":{required:"This field is required"},
                "fecha":{required:"This field is required"},
                "adultos":{required:"This field is required"},
                "ninos":{},
                "nombre":{required:"This field is required"},
                "apellido":{required:"This field is required"},
                "correo":{required:"This field is required",email:"Email not valid"},
                "telefono":{required:"This field is required"},
                "comentarios":{},
                "terminos":{}
            }
        });*/

        $('#terminos2').change(function(event) {
            if($(this).is(":checked")){
                $('.tour').removeClass('disabled');
                $('.tour').prop('disabled',false);
            }
            else{
                $('.tour').addClass('disabled');   
                $('.tour').prop('disabled',true);
            }
        });

        $('.tour').click(function() {
            $('.tour').addClass('active');
            $('.transfer').removeClass('active');
            $('#transfer').removeClass('in');
            $('#transfer').removeClass('active');
            $('#tours').addClass('in');
            $('#tours').addClass('active');
        });

        $('.transfer').click(function() {
            $('.transfer').addClass('active');
            $('.tour').removeClass('active');
            $('#tours').removeClass('in');
            $('#tours').removeClass('active');
            $('#transfer').addClass('in');
            $('#transfer').addClass('active');
        });



    /*Carrousel*/
     
    $('#myCarousel').carousel({
            interval: 5000
    });

    $('#carousel-text').html($('#slide-content-0').html());

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){
        var id = this.id.substr(this.id.lastIndexOf("-") + 1);
        var id = parseInt(id);
        $('#myCarousel').carousel(id);
    });


    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
             var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
    });
    $('select').select2();
});