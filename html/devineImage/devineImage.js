var th = $('th');
var bonneReponse = $('#bonneReponse');
var mauvaisereponse = $('button').not($("#bonneReponse")).not($(".flecheRetour")).not($(".close"));
var proposition = $('.boxRep');
var imgId = $('th#' + $('th').attr('id'));
$('body').css('opacity', '0');
setTimeout(function () {
    $('body').css({ 'opacity': '1', 'transition': '2.5s ease' })
})

proposition.css({
    'opacity': '0'
});

th.click(function () {
    $(this).css('background', 'none');

    th.not(this).css({
        'pointer-events': 'none'
    });

    proposition.css({
        'opacity': '1',
        'transition': '1s ease'
    });

    // setTimeout(function () {
    //     alert('Choisis une proposition !');
    // }, 300);
});


bonneReponse.click(function () {
    $(this).css(
        'background-color', 'yellowgreen'
    );
    $('th').css({
        'background': 'none', 'pointer-events': 'none'
    });
    $('.plateau').css({ 'background-color': 'yellowgreen', 'transition': '1s ease' });

    setTimeout(function () {
        $("#completed").fadeIn("slow");
        $('#completed').css('display', 'block');
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
    // setTimeout(function () {
    //     alert('Mauvaise réponse continue !');
    // }, 300);
});

function close() {
    document.getElementById('completed').style.display = 'none';
    window.location.href = '../jeuGagne.html';
}


document.getElementById('modal-close').addEventListener('click', close);
