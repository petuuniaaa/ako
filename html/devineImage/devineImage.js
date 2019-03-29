var th = $('th');
var bonneReponse = $('#bonneReponse');
var mauvaisereponse = $('button').not($("#bonneReponse")).not($(".flecheRetour")).not($(".close")).not($(".boutonSon"));
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
    var oui = new Audio('/sons/son-appli/oui.wav');
    oui.play();

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

    var non = new Audio('/sons/son-appli/non.wav');
    non.play();
    // setTimeout(function () {
    //     alert('Mauvaise réponse continue !');
    // }, 300);
});

function close() {
    document.getElementById('completed').style.display = 'none';
    window.location.href = '../jeuGagne.php';
}


document.getElementById('modal-close').addEventListener('click', close);

// SON
function son() {
    var son = new Audio('/sons/son-appli/excellenttuastrouve.wav');
    son.play();
}

document.getElementById('sonVictoire').addEventListener('click', son);


function chevalSon() {
    var cheval = new Audio('/sons/son-animaux/cheval.wav');
    cheval.play();
}

document.getElementById('cheval').addEventListener('click', chevalSon);

function elephantSon() {
    var son = new Audio('/sons/son-animaux/elephant.wav');
    son.play();
}

document.getElementById('elephant').addEventListener('click', elephantSon);

function singeSon() {
    var singeSon = new Audio('/sons/son-animaux/singe.wav');
    singeSon.play();
}

document.getElementById('singe').addEventListener('click', singeSon);

function sourisSon() {
    var sourisSon = new Audio('/sons/son-animaux/souris.wav');
    sourisSon.play();
}

document.getElementById('souris').addEventListener('click', sourisSon);