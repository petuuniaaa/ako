if (localStorage.getItem('puzzle') === "OK") {
  document.getElementById("modalDebut").style.display = 'none';
} else {
  $("#modalDebut").fadeIn("slow");
  $('#modalDebut').css('display', 'block');


  function close() {
    document.getElementById('modalDebut').style.display = 'none';
    localStorage.setItem('puzzle', "OK");
  }

  document.getElementById('close').addEventListener('click', close);
}

function next() {
  document.getElementById('modalContinue').style.display = 'none';
}

function gagne() {
  document.getElementById('completed').style.display = 'none';
  window.location.href = '../jeuGagne.html';
}

document.getElementById('modalContinue').addEventListener('click', next);
document.getElementById('completed').addEventListener('click', gagne);


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
  var tabCompleted = [false, false, false, false, false, false, false, false, false];
  var firstTime = true;

  ths.map(function (idx, item) {

    var th = $(item);

    var img = $('[data-case="' + th.attr('id') + '"]').attr('src');

    th.droppable({

      accept: '[data-case="' + th.attr('id') + '"]',

      drop: function () {
        th.css({
          'background-image': 'url(' + img + ')',
          'background-size': 'center',
          'background-repeat': 'no-repeat'
        });
        $('[data-case="' + th.attr('id') + '"]').css('display', 'none');

        if (firstTime == true) {
          firstTime = false;
          $("#modalContinue").fadeIn("slow");
          $('#modalContinue').css('display', 'block');
        }

        for (let i = 0; i < tabCompleted.length; i++) {
          if (tabCompleted[i] == false) {
            tabCompleted[i] = true;
            break;
          }
        }


        if (tabCompleted.every(
          function (item) {
            return item == true;
          })) {
          $('table').css('border-spacing', '0');
          setTimeout(() => {
            $("#completed").fadeIn("slow");
            $('#completed').css('display', 'block');
          }, 2500);
        }
      }

    });

  })

  imgs.map(function (idx, item) {

    var img = $(item);

    img.draggable();

  })




})