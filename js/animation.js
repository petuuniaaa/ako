$('#animation').css('opacity','0');
setTimeout(() => {
    $('#animation').css({
        'opacity': '1',
        'transition': '1s ease'
    })
}, 500);