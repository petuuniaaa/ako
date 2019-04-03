var connexion = document.getElementById('connexion');
var boutons = document.getElementById('boutons');

function openConnexion() {
    connexion.style.display = '';
    boutons.style.display = 'none';
    retour.style.display = 'block';
}

document.getElementById('boutonConnexion').addEventListener('click', openConnexion);
