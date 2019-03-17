function RandomPlace() {
  var mintop = 0;
  var maxtop = 50;
  var minleft = 0;
  var maxleft = 80;
  tabdiv = document.getElementsByClassName('imgRandom');
  var i = 0;
  while (tabdiv[i++]) {
    tabdiv[i - 1].style.top = mintop + Math.floor(Math.random() * (maxtop - mintop)) + 'px';
    tabdiv[i - 1].style.left = minleft + Math.floor(Math.random() * (maxleft - minleft)) + 'px';
    tabdiv[i - 1].style.zIndex = i;
  }
}

$(function () {

  var ths = $('th');
  var imgs = $('.imgRandom');
  var completed = false;

  ths.map(function (idx, item) {

    var th = $(item);

    th.droppable({

      accept: '[data-case="' + th.attr('id') + '"]',

      drop: function () {
        var img = $('[data-case="' + th.attr('id') + '"]').attr('src');
        th.css({
          'background-image': 'url(' + img + ')',
          'background-size': 'center',
          'background-repeat': 'no-repeat'
        });
        $('[data-case="' + th.attr('id') + '"]').css('display', 'none');

        img.draggable('disable');

      }

    });

  })

  imgs.map(function (idx, item) {

    var img = $(item);

    img.draggable();
  })

  // if()

  // if (completed === true) {
  //   $('table').css('border-spacing', '0');
  // }

})