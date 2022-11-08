


//Máscaras para inputs
$(document).ready(function(){
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('#cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.numero').mask('Z#', {
        translation: {
          'Z': {
            pattern: /[1-9]/
          }
        }
      });
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', {reverse: true});
    $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.fallback').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});





//Pegar o ultimo numero para Excluir ou Alterar
function getLastNumber(url) {
    var matches = url.match(/\d+/g);
    return matches[matches.length - 1];
}
var url = window.location.href;
    const id=getLastNumber(url);
console.log(id);


//Funções Ajax como Jquery utilzando o ziggy

$(function(){
    $('form[name="FormCadastro"]').submit(function(event){
event.preventDefault();
   $.ajax({
    type:'POST',
url:route('registrar_produto'),
    data: $(this).serialize(),
    dataType:'json',
    success:function(response){

        if(response.success===true){
            window.location.href=route('registrar_produto');

        }else{

            $('.messageBox').removeClass('d-none').html(response.message).delay().fadeIn().delay(1000).fadeOut(300);





        }
        console.log(response);

    }




});
   });




   $('form[name="FormBuscar"]').on('submit', function(event){
   event.preventDefault();
  const id =document.querySelector("#id");
  const value =id.value;
   $.ajax({
    type: 'POST',
    url:  route('buscar'),
    data: $(this).serialize(),
    dataType:'json',
    success(response){
        if(response.success===false){

            $('#caixinha').removeClass('d-none').html(response.message).delay().fadeIn().delay(1000).fadeOut(300);
            console.log(value);
        }
        else{

            window.location.href="/produtos/editar/"+value;

        }
        console.log(response);
    }
   });

});


//routes edit

$('form[name="FormEdit"]').submit(function(event){
    event.preventDefault();


       $.ajax({


        type:'POST',


    url: route('alterar_produto',id),

        data: $(this).serialize(),
        dataType:'json',
        success:function(response){

            if(response.success===true){
                window.location.href=route('alterar_produto',id);



            }else{

                $('.messageBox').removeClass('d-none').html(response.message).delay().fadeIn().delay(1000).fadeOut(300);



            }
            console.log(response);

        }




    });
       });




       $('form[name="FormDelete"]').submit(function(event){
        event.preventDefault();


           $.ajax({


            type:'POST',


        url:window.location.href,

            data: $(this).serialize(),
            dataType:'json',
            success:function(response){

                if(response.success===true){
                    window.location.href=route('excluir_produto',id);



                }else{

                    $('.messageBox').removeClass('d-none').html(response.message).delay().fadeIn().delay(1000).fadeOut(300);



                }
                console.log(response);

            }




        });
           });





    });





