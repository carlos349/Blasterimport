
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }
        
    });

    $('#ingresoProduct').on('click', function(){
        $('#tablaVentas').hide('fast');
        $('#FormularioProduct').show('slow');
    });
    $('.addCart').on('click', function(e){
        e.preventDefault();
        var data = $(this).children().val();

        $.ajax({
            url: 'addCart.php',
            type: 'get',
            dataType: 'json',
            data:data,
            
        })
        .done(function(){
            console.log('success');
        })
        .fail(function(){
            console.log('error');
        })
        .always(function(){
            console.log('complete');
        })
    });
   
    $('.categorias').on('click', function() {
         if($(this).hasClass('activo')){
           $('.categorias').css("background-color","rgba(47, 72, 88,0.6)");
           $(this).css("background-color","#0B2642");

           $(this).removeClass('activo');
         }
         $(this).addClass('activo');
         var image = $(this).text();

         $('body').css('background-image' , 'url("views/images/'+image+'.jpg")');

    });

    $('.carousel').carousel();
      

      $(".carousel").on("mouseleave", function(){
        $('.active').click();
      
      })

      $(".carousel").on("mousemove", function(){
        $('.active').click();
      
      })

    

})(jQuery);





