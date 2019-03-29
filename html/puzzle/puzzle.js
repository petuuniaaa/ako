// Faire afficher le modal une seule fois si il n'a pas été déjà lancé

if (localStorage.getItem('puzzle') === "OK") {
  document.getElementById("modalDebut").style.display = 'none';
} else {
  $("#modalDebut").fadeIn("slow");
  $('#modalDebut').css('display', 'block');


  function close() {
    document.getElementById('modalDebut').style.display = 'none';
    localStorage.setItem('puzzle', "OK");
  }

  document.getElementById('jouer').addEventListener('click', close);
}

// Afficher le modal suivant
function next() {
  document.getElementById('modalContinue').style.display = 'none';
}

// Modal gagner 
function gagne() {
  document.getElementById('completed').style.display = 'none';
  window.location.href = '../jeuGagne.php';
}

document.getElementById('fermer').addEventListener('click', next);
document.getElementById('close').addEventListener('click', gagne);

// Placer les pièces aléatoirement dans un espace donné
// function RandomPlace() {
//   var mintop = 0;
//   var maxtop = -5;
//   var minleft = 0;
//   var maxleft = 50;
//   tabdiv = document.getElementsByClassName('imgRandom');
//   var i = 0;
//   while (tabdiv[i++]) {
//     tabdiv[i - 1].style.top = mintop + Math.floor(Math.random() * (maxtop - mintop)) + 'px';
//     tabdiv[i - 1].style.left = minleft + Math.floor(Math.random() * (maxleft - minleft)) + 'px';
//     tabdiv[i - 1].style.zIndex = i;
//   }
// }


// Puzzle
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
          }, 2000);
        }
      }

    });

  })

  imgs.map(function (idx, item) {

    var img = $(item);

    img.draggable();

  })
})

function son() {
  var sonContinue = new Audio('/sons/son-appli/bravocontinucommeca.wav');
  sonContinue.play();
}

document.getElementById('sonContinue').addEventListener('click', son);

function sonVictoire() {
  var sonVictoire = new Audio('/sons/son-appli/cestgagnefelicitation.wav');
  sonVictoire.play();
}

document.getElementById('sonVictoire').addEventListener('click', sonVictoire);