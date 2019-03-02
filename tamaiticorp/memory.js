const cards = document.querySelectorAll('.memory-card');
 
function close() {
  document.getElementById('completed').style.display = 'none';
}
function disableCards() {
  firstCard.removeEventListener('click', flipCard);
  secondCard.removeEventListener('click', flipCard);

  resetBoard();
}
function replay(){
  
  document.getElementById('completed').style.display = 'none';
  $(cards).css('transform','rotate(0deg)');

  // J'avais pour idée de refresh un bout de la page juste le memory quoi comme ça tout recommencerai
  //le code en dessous devrai faire ce refresh mais ça marche pas

//   let container =$('img[alt="Memory Card"]');
// let content = container.innerHTML;
// container.innerHTML= content;
 

}

// Essai 

// function replay() {
//   if (document.getElementById('completed').style.direction == 'block') {
//     cards.classList.remove("flip");
//     document.getElementById('completed').style.display = 'none';
//   }

//   // melange();
//   console.log('ocucou');
// }

document.getElementById('modal-close').addEventListener('click', close);
// document.getElementById('modal-replay').addEventListener('click', replay);

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;
var tabCompleted = [false, false, false, false, false, false];
var i = 0;

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