const cards = document.querySelectorAll('.memory-card');

// $('#completed').css('display', 'block');

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;
var tabCompleted = [false, false, false, false, false, false];
var i = 0;

function close() {
  document.getElementById('completed').style.display = 'none';
  window.location.href = 'memoryanimaux_gagne.html';
}

document.getElementById('modal-close').addEventListener('click', close);

function flipCard() {
  if (lockBoard) return;
  if (this === firstCard) return;

  this.classList.add('flip');

  if (!hasFlippedCard) {
    hasFlippedCard = true;
    firstCard = this;

    return;
  }
  $('#son').css('visibility', 'visible');
  document.getElementById('son').style.backgroundImage = "url('/pictures/svg/boutonson.svg')";
  
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
    document.getElementById('text_condition').innerHTML = "Bravo, continues !";
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
  document.getElementById('text_condition').innerHTML = "Réessayes !";
  var audio = new Audio('/sons/reessaye.wav');
  audio.play();

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