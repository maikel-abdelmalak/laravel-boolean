// require('./bootstrap');
var $ = require( "jquery" );

$(document).ready(function(){

    $('.domanda').click(function(){
        var risposta = $(this).next();

        if(risposta.hasClass('active')){
            $('.risposta').removeClass('active')
        }else{
            $('.risposta').removeClass('active')
            risposta.addClass('active')
        }

    })
})
// $('.risposta').click(function(){
//     $('.risposta').removeClass('active')
// });
