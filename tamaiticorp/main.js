$('#accueil').css('opacity','0');
$('header').css('opacity','0')

setTimeout(() => {
    $('#accueil').css({'opacity':'1','transition':'1s ease'})
}, 500);
setTimeout(() => {
    $('header').css({'opacity':'1','transition':'1s ease'})
}, 800);

var equipe = $('#equipe');

$(equipe).css('opacity','0');



$(window).scroll(function(){

    $(equipe).css({'opacity':'1','transition':'2.5s ease'})
    
})