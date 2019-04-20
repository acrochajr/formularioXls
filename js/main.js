
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input2').each(function(){
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
    //var name = $('.validate-input input[name="name"]');
    //var email = $('.validate-input input[name="email"]');
    //var message = $('.validate-input textarea[name="message"]');
    var nome_da_loja = $('.validate-input input[name="nome_da_loja"]');
    var numero_de_funcionario = $('.validate-input input[name="numero_de_funcionario"]');
    var faturamento_medio = $('.validate-input input[name="faturamento_medio"]');
    var mark_up = $('.validate-input input[name="mark_up"]');
    var marcas_principais = $('.validate-input input[name="marcas_principais"]');
    var instagram = $('.validate-input input[name="instagram"]');
    var facebook = $('.validate-input input[name="facebook"]');
    var preco_medio_varejo = $('.validate-input input[name="preco_medio_varejo"]');
    var pronta_entrega = $('.validate-input input[name="pronta_entrega"]');
    var cidade = $('.validate-input input[name="cidade"]');
    var uf = $('.validate-input input[name="uf"]');
    var metros_quadrados_loja = $('.validate-input input[name="metros_quadrados_loja"]');



    $('.validate-form').on('submit',function(){
        var check = true;

        if($(nome_da_loja).val().trim() == ''){
            showValidate(nome_da_loja);
            check=false;
        }

        if($(numero_de_funcionario).val().trim() == ''){
            showValidate(numero_de_funcionario);
            check=false;
        }
        if($(faturamento_medio).val().trim() == ''){
            showValidate(faturamento_medio);
            check=false;
        }
         if($(mark_up).val().trim() == ''){
            showValidate(mark_up);
            check=false;
        }

         if($(marcas_principais).val().trim() == ''){
            showValidate(marcas_principais);
            check=false;
        }
         if($(instagram).val().trim() == ''){
            showValidate(instagram);
            check=false;
        } if($(facebook).val().trim() == ''){
            showValidate(facebook);
            check=false;
        } 
        if($(preco_medio_varejo).val().trim() == ''){
            showValidate(preco_medio_varejo);
            check=false;
        }
          if($(pronta_entrega).val().trim() == ''){
            showValidate(pronta_entrega);
            check=false;
        }
          if($(cidade).val().trim() == ''){
            showValidate(cidade);
            check=false;
        }
          if($(uf).val().trim() == ''){
            showValidate(uf);
            check=false;
        }

          if($(metros_quadrados_loja).val().trim() == ''){
            showValidate(metros_quadrados_loja);
            check=false;
        }

        // if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
        //     showValidate(email);
        //     check=false;
        // }

        // if($(message).val().trim() == ''){
        //     showValidate(message);
        //     check=false;
        // }

                //
                //
                // var dataForm = {
                //     action: "insereDados", // Ação que irá receber os dados para inserção no banco de dados ou disparo por email da função em PHP
                //     nome_da_loja: $('#nome_da_loja').val(), // dados disparo
                //
                // };




        return check;
    });


    $('.validate-form .input2').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }




    

})(jQuery);