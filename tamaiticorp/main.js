$('#accueil').css('opacity', '0');


setTimeout(() => {
    $('#accueil').css({
        'opacity': '1',
        'transition': '1s ease'
    })
}, 500);

if (window.matchMedia("(min-width: 992px)").matches) {
    $("#manav").removeClass("fixed-top");

    $('header').css('opacity', '0');
    setTimeout(() => {
        $('header').css({
            'opacity': '1',
            'transform': 'translateY(25px)',
            'transition': '1s ease'
        })
        $('header').addClass('fixed-top');

    }, 800);

} else {

}


var equipeimg = $('#equipe img');
var equipetxt = $('#equipe p');
var video = $('.presentation');
var projet = $('#projet');
var jouer = $('#projet');
var coloriages = $('#coloriages');
$(equipeimg).css('opacity', '0');
$(equipetxt).css('opacity', '0');
$(video).css('opacity', '0');
$(projet).css('opacity', '0');
$(jouer).css('opacity', '0');
$(coloriages).css('opacity', '0');


$(document).scroll(function () {
    var maxheight = $(document).height();
    var current = $(document).scrollTop() - $(window).height();
    var percent = (100 * (current + $(window).height())) / (maxheight - $(window).height());


    if (percent >= 10 && percent < 15) {
        $(jouer).css({
            'opacity': '1',
            'transition': '1.5s ease'
        })
    }
    if (percent >= 30 && percent < 35) {
        $(coloriages).css({
            'opacity': '1',
            'transition': '1.5s ease'
        })
    }
    if (percent >= 50 && percent < 55) {
        $(equipeimg).css({
            'opacity': '1',
            'transition': '1.5s ease'
        })
        $(equipetxt).css({
            'opacity': '1',
            'transition': '2.5s ease'
        })
    }
    if (percent >= 65 && percent < 75) {
        $(video).css({
            'opacity': '1',
            'transition': '1.5s ease'
        })
    }
    if (percent >= 90 && percent < 100) {
        $(projet).css({
            'opacity': '1',
            'transition': '1.5s ease'
        })
    }
    if (percent >= 90 && percent < 100) {
        $(projet).css({
            'opacity': '1',
            'transition': '1.5s ease'
        })
    }
})

$('.telecharger').click(function () {
    var dataHref = $('.carousel-item.active[data-href]').data('href');
    $('#coloriages .telecharger').attr('href', dataHref);
});