const cards = document.querySelectorAll('.memory-card');

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;
var tabCompleted = [false, false, false, false, false, false];
var i = 0;

// SONS
var success = new Audio('/sons/son-appli/bravocontinue.wav');
var reessaye = new Audio('/sons/son-appli/reessaye.wav');


function close() {
  document.getElementById('completed').style.display = 'none';
  window.location.href = '../jeuGagne.html';
}

function sonDesactivated() {

  if (success.muted == true && reessaye.muted == true) {
    success.muted = false;
    reessaye.muted = false;
    document.getElementById('son').style.backgroundImage = "url('/pictures/svg/boutonson.svg')";

  } else {
    success.muted = true;
    reessaye.muted = true;
    document.getElementById('son').style.backgroundImage = "url('/pictures/svg/boutonsonmuted.svg')";
  }

}

document.getElementById('modal-close').addEventListener('click', close);
document.getElementById('son').addEventListener('click', sonDesactivated);


function flipCard() {
  if (lockBoard) return;
  if (this === firstCard) return;

  this.classList.add('flip');

  if (!hasFlippedCard) {
    hasFlippedCard = true;
    firstCard = this;

    return;
  }

  secondCard = this;
  checkForMatch();
}

function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;

  isMatch ? disableCards() : unflipCards();
  if (isMatch === true) {
    var obj = document.querySelector('.notactived');
    obj.style['visibility'] = 'visible';
    var source = document.getElementById("condition");
    source.src = "../../pictures/svg/succes.svg";
    document.getElementById('textCondition').innerHTML = "Bravo, continues !";

    success.play();
  }

  setTimeout(() => {
    obj.style['visibility'] = 'hidden';
    source.src = "../../pictures/svg/erreur.svg";
  }, 1200);

  if (isMatch === true) {
    tabCompleted[i] = true;
    i++;
    if (tabCompleted.every(
      function (item) {
        return item == true;
      })) {
      $("#completed").fadeIn("slow");
      $('#completed').css('display', 'block');
    }
  }

}

function disableCards() {
  firstCard.removeEventListener('click', flipCard);
  secondCard.removeEventListener('click', flipCard);

  resetBoard();
}

function unflipCards() {
  lockBoard = true;

  var obj = document.querySelector('.notactived');
  obj.style['visibility'] = 'visible';
  document.getElementById('textCondition').innerHTML = "Réessayes !";

  reessaye.play();

  setTimeout(() => {
    firstCard.classList.remove('flip');
    secondCard.classList.remove('flip');

    obj.style['visibility'] = 'hidden';
    resetBoard();
  }, 1000);
}

function resetBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
}

(function shuffle() {
  cards.forEach(card => {
    let randomPos = Math.floor(Math.random() * 12);
    card.style.order = randomPos;
  });
})();

cards.forEach(card => card.addEventListener('click', flipCard));