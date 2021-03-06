const cards = document.querySelectorAll('.memory-card');

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;
var tabCompleted = [false, false, false, false, false, false];
var i = 0;

function close() {
  document.getElementById('completed').style.display = 'none';
}

function replay() {
  document.getElementById('completed').style.display = 'none';

  $('.memory-card').each(function () {
    $(this).removeClass('flip');
  })
  refreshBoard();
  melange();
}

document.getElementById('modal-close').addEventListener('click', close);
document.getElementById('modal-replay').addEventListener('click', replay);

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

  setTimeout(() => {
    firstCard.classList.remove('flip');
    secondCard.classList.remove('flip');

    resetBoard();
  }, 1000);
}

function resetBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
}

function refreshBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
  tabCompleted = [false, false, false, false, false, false];
  i = 0;

  cards.forEach(card => card.addEventListener('click', flipCard));
}

(function shuffle() {
  cards.forEach(card => {
    let randomPos = Math.floor(Math.random() * 12);
    card.style.order = randomPos;
  });
})();

function melange() {
  cards.forEach(card => {
    let randomPos = Math.floor(Math.random() * 12);
    card.style.order = randomPos;
  });
}

cards.forEach(card => card.addEventListener('click', flipCard));