$(function(){
    $('#Transfers').click(function(){
        $('#v-pills-transfers-tab').trigger('click');
        console.log('v-pills-transfers-tab');
        $('html, body').animate({scrollTop : 0},500);
        
    });
    $('#Excursions').click(function(){
        $('#v-pills-excursions-tab').trigger('click');
        console.log('v-pills-excursions-tab');
        $('html, body').animate({scrollTop : 0},500);
        
    });
    $('#Hotels').click(function(){
        $('#v-pills-hotels-tab').trigger('click');
        console.log('v-pills-hotels-tab');
        $('html, body').animate({scrollTop : 0},500);
        
    });
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


        $("#hotelFin").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: +2
        });
        
        $("#hotelInicio").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: +2,
            onSelect: function(date) {
                var date1 = $('#hotelInicio').datepicker('getDate');
                var date = new Date(Date.parse(date1));
                date.setDate(date.getDate() + 1);
                var newDate = date.toDateString();
                newDate = new Date(Date.parse(newDate));
                $('#hotelFin').datepicker("option", "minDate", newDate);
                $('#hotelInicio').trigger("change");
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

        $.validator.addMethod("noSpace", function(value, element) { 
            return value.indexOf(" ") < 0 && value != ""; 
        }, "No space please and don't leave it empty");

        $("#reservation").validate({
            rules: {
                    "nombre":{required:true,noSpace:true},
                    "apellido":{required:true,noSpace:true},
                    "correo":{required:true,email:true},
                    "hotel":{required:true},
                    "comentarios":{required:false},
            },
            messages: {
                    "nombre":{required:"This field is required"},
                    "apellido":{required:"This field is required"},
                    "correo":{required:"This field is required"},
                    "hotel":{required:"This field is required"},
            }
        });
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

        /** Flighs */
        $('.fecha').datepicker({
            dateFormat: "yy-mm-dd",
            minDate: +1,
            onSelect:function(){
                $('.fecha').trigger("change");
            }
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
    $('.select2').select2();
});




AOS.init({
    duration: 800,
    easing: 'slide'
});

(function($) {

   "use strict";

   $(window).stellar({
   responsive: false,
   parallaxBackgrounds: true,
   parallaxElements: true,
   horizontalScrolling: false,
   hideDistantElements: false,
   scrollProperty: 'scroll'
 });


   // loader
   var loader = function() {
       setTimeout(function() { 
           if($('#ftco-loader').length > 0) {
               $('#ftco-loader').removeClass('show');
           }
       }, 1);
   };
   loader();

   var carousel = function() {
       $('.home-slider').owlCarousel({
       loop:true,
       autoplay: true,
       margin:0,
       animateOut: 'fadeOut',
       animateIn: 'fadeIn',
       nav:true,
       autoplayHoverPause: false,
       items: 1,
       dots:false,
       navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
       responsive:{
         0:{
           items:1,
           nav:false
         },
         600:{
           items:1,
           nav:false
         },
         1000:{
           items:1,
           nav:true
         }
       }
      });

       $('.carousel').owlCarousel({
           center: true,
           loop: true,
           items:1,
           margin: 30,
           stagePadding: 0,
           nav: true,
           navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
           responsive:{
               0:{
                   items: 1
               },
               600:{
                   items: 2
               },
               1000:{
                   items: 4
               }
           }
       });

       $('.carousel1').owlCarousel({
           loop: false,
           items:1,
           margin: 30,
           stagePadding: 10,
           nav: true,
           navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
           responsive:{
               0:{
                   items: 1
               },
               600:{
                   items: 2
               },
               1000:{
                   items: 4
               }
           }
       });

       $('.carousel-engine').owlCarousel({
           loop: false,
           items:1,
           margin: 30,
           stagePadding: 0,
           nav: false,
           navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
           responsive:{
               0:{
                   items: 1
               },
               600:{
                   items: 2
               },
               1000:{
                   items: 4
               }
           }
       });
   };
   carousel();

   // scroll
   var scrollWindow = function() {
       $(window).scroll(function(){
           var $w = $(this),
                   st = $w.scrollTop(),
                   navbar = $('.ftco_navbar'),
                   sd = $('.js-scroll-wrap');

           if (st > 10) {
               if ( !navbar.hasClass('scrolled') ) {
                   navbar.addClass('scrolled');	
               }
           } 
           if (st < 10) {
               if ( navbar.hasClass('scrolled') ) {
                   navbar.removeClass('scrolled sleep');
               }
           } 
           if ( st > 20 ) {
               if ( !navbar.hasClass('awake') ) {
                   navbar.addClass('awake');	
               }
               
               if(sd.length > 0) {
                   sd.addClass('sleep');
               }
           }
           if ( st < 20 ) {
               if ( navbar.hasClass('awake') ) {
                   navbar.removeClass('awake');
                   navbar.addClass('sleep');
               }
               if(sd.length > 0) {
                   sd.removeClass('sleep');
               }
           }
       });
   };
   scrollWindow();

   var isMobile = {
       Android: function() {
           return navigator.userAgent.match(/Android/i);
       },
           BlackBerry: function() {
           return navigator.userAgent.match(/BlackBerry/i);
       },
           iOS: function() {
           return navigator.userAgent.match(/iPhone|iPad|iPod/i);
       },
           Opera: function() {
           return navigator.userAgent.match(/Opera Mini/i);
       },
           Windows: function() {
           return navigator.userAgent.match(/IEMobile/i);
       },
           any: function() {
           return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
       }
   };

   var mobileMenuOutsideClick = function() {

       $(document).click(function (e) {
       var container = $("#colorlib-offcanvas, .js-colorlib-nav-toggle");
       if (!container.is(e.target) && container.has(e.target).length === 0) {

           if ( $('body').hasClass('offcanvas') ) {

               $('body').removeClass('offcanvas');
               $('.js-colorlib-nav-toggle').removeClass('active');
               
           }
       
           
       }
       });

   };
   mobileMenuOutsideClick();


   var offcanvasMenu = function() {

       $('#page').prepend('<div id="colorlib-offcanvas" />');
       $('#page').prepend('<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle colorlib-nav-white"><i></i></a>');
       var clone1 = $('.menu-1 > ul').clone();
       $('#colorlib-offcanvas').append(clone1);
       var clone2 = $('.menu-2 > ul').clone();
       $('#colorlib-offcanvas').append(clone2);

       $('#colorlib-offcanvas .has-dropdown').addClass('offcanvas-has-dropdown');
       $('#colorlib-offcanvas')
           .find('li')
           .removeClass('has-dropdown');

       // Hover dropdown menu on mobile
       $('.offcanvas-has-dropdown').mouseenter(function(){
           var $this = $(this);

           $this
               .addClass('active')
               .find('ul')
               .slideDown(500, 'easeOutExpo');				
       }).mouseleave(function(){

           var $this = $(this);
           $this
               .removeClass('active')
               .find('ul')
               .slideUp(500, 'easeOutExpo');				
       });


       $(window).resize(function(){

           if ( $('body').hasClass('offcanvas') ) {

               $('body').removeClass('offcanvas');
               $('.js-colorlib-nav-toggle').removeClass('active');
               
           }
       });
   };
   offcanvasMenu();


   var burgerMenu = function() {

       $('body').on('click', '.js-colorlib-nav-toggle', function(event){
           var $this = $(this);


           if ( $('body').hasClass('overflow offcanvas') ) {
               $('body').removeClass('overflow offcanvas');
           } else {
               $('body').addClass('overflow offcanvas');
           }
           $this.toggleClass('active');
           event.preventDefault();

       });
   };
   burgerMenu();
   
   var counter = function() {
       
       $('#section-counter').waypoint( function( direction ) {

           if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

               var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
               $('.number').each(function(){
                   var $this = $(this),
                       num = $this.data('number');
                       console.log(num);
                   $this.animateNumber(
                     {
                       number: num,
                       numberStep: comma_separator_number_step
                     }, 7000
                   );
               });
               
           }

       } , { offset: '95%' } );

   }
   counter();

   var contentWayPoint = function() {
       var i = 0;
       $('.ftco-animate').waypoint( function( direction ) {

           if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
               
               i++;

               $(this.element).addClass('item-animate');
               setTimeout(function(){

                   $('body .ftco-animate.item-animate').each(function(k){
                       var el = $(this);
                       setTimeout( function () {
                           var effect = el.data('animate-effect');
                           if ( effect === 'fadeIn') {
                               el.addClass('fadeIn ftco-animated');
                           } else if ( effect === 'fadeInLeft') {
                               el.addClass('fadeInLeft ftco-animated');
                           } else if ( effect === 'fadeInRight') {
                               el.addClass('fadeInRight ftco-animated');
                           } else {
                               el.addClass('fadeInUp ftco-animated');
                           }
                           el.removeClass('item-animate');
                       },  k * 50, 'easeInOutExpo' );
                   });
                   
               }, 100);
               
           }

       } , { offset: '95%' } );
   };
   contentWayPoint();


   // navigation
   var OnePageNav = function() {
       $(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
            e.preventDefault();

            var hash = this.hash,
                    navToggler = $('.navbar-toggler');
            $('html, body').animate({
           scrollTop: $(hash).offset().top
         }, 700, 'easeInOutExpo', function(){
           window.location.hash = hash;
         });


         if ( navToggler.is(':visible') ) {
             navToggler.click();
         }
       });
       $('body').on('activate.bs.scrollspy', function () {
         console.log('nice');
       })
   };
   OnePageNav();


   // magnific popup
   $('.image-popup').magnificPopup({
   type: 'image',
   closeOnContentClick: true,
   closeBtnInside: false,
   fixedContentPos: true,
   mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    gallery: {
     enabled: true,
     navigateByImgClick: true,
     preload: [0,1] // Will preload 0 - before current, and 1 after the current image
   },
   image: {
     verticalFit: true
   },
   zoom: {
     enabled: true,
     duration: 300 // don't foget to change the duration also in CSS
   }
 });

 $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
   disableOn: 700,
   type: 'iframe',
   mainClass: 'mfp-fade',
   removalDelay: 160,
   preloader: false,

   fixedContentPos: false
 });

  
  $('#checkin_date, #checkout_date, #start_date, #return_date').datepicker({
     'format': 'm/d/yyyy',
     'autoclose': true
   });


})(jQuery);