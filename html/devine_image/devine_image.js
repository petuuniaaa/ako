var th = $('th');
var bonnereponse = $('#bonnereponse');
var mauvaisereponse = $('button').not($("#bonnereponse"));
var proposition = $('button');
var imgId = $('th#' + $('th').attr('id'));
$('body').css('opacity','0');
setTimeout(function(){
    $('body').css({'opacity':'1','transition':'2.5s ease'})
})





proposition.css({
    'opacity': '0'
});

th.click(function () {
    $(this).css('background','none');
   
    // imgId.css('background','none');
    th.not(this).css({
        
        'pointer-events': 'none'
    });
    
  

    proposition.css({
        'opacity': '1',
        'transition': '1s ease'
    });
    
    setTimeout(function () {
        alert('Choisis une proposition !');
    }, 300);

   
});



bonnereponse.click(function () {
        $(this).css(
            'background-color', 'yellowgreen'
        );
        $('th').css({
            'background': 'none','pointer-events':'none'
        });
        $('.plateau').css({'background-color':'yellowgreen','transition':'1s ease'});
        
       
        

        setTimeout(function () {
           
            $('body').append('<div class="feu">Bravo ! tu as gagné une image ! rendez vous dans la <a href="">collection</a></div>');
            


        }, 300);


    }


);

mauvaisereponse.click(function () {

    $(this).css(
        'background-color', 'red'
    );
    $('th').css({
        'pointer-events': ''
    });


    setTimeout(function () {
        alert('Mauvaise réponse continue !');


    }, 300);

});


// $('#mauvaisereponse2').click(function () { 

//     $(this).css(
//         'background-color','red'
//     );
//     $('th').css({'pointer-events':''});
//     setTimeout(function(){ alert('Mauvaise réponse continue !'); 


// }, 300);


// });
// $('#mauvaisereponse3').click(function () { 

//     $(this).css(
//         'background-color','red'
//     );
//     $('th').css({'pointer-events':''});
//     setTimeout(function(){ alert('Mauvaise réponse continue !'); 


// }, 300);
// });

// $('#1').click(function () {
//     $(this).css({
//         'background': 'none'
//     });
//     $('th').not($('#1')).css({'background-color':'grey','pointer-events':'none'});

//     setTimeout(function(){ reponse = prompt(" : "); 
//         if(reponse != "cheval"){
//             alert('continue de jouer');
//         }
//         else{
//             alert('vous avez gagné');
//         }

// }, 1000);


// });

// $('#2').click(function () {
//     $(this).css(
//         'background','none'
//     );
//     $('th').not($('#2')).css({'background-color':'grey','pointer-events':'none'});
// });
// $('#3').click(function () {
//     $(this).css(
//         'background','none'
//     );
// });
// $('#4').click(function () {
//     $(this).css(
//         'background','none'
//     );
// });
// $('#5').click(function () {
//     $(this).css(
//         'background','none'
//     );
// });
// $('#6').click(function () {
//     $(this).css(
//         'background','none'
//     );
// });
// $('#7').click(function () {
//     $(this).css(
//         'background','none'
//     );
// });
// $('#8').click(function () {
//     $(this).css(
//         'background','none'
//     );
// });
// $('#9').click(function () {
//     $(this).css(
//         'background','none'
//     );
// });