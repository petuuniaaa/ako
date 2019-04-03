var retour = document.getElementById('retour');
var connexion = document.getElementById('connexion');
var inscription = document.getElementById('inscription');
var boutons = document.getElementById('boutons');

function openInscription() {
    inscription.style.display = '';
    boutons.style.display = 'none';
    retour.style.display = 'block';
}
function openConnexion() {
    connexion.style.display = '';
    boutons.style.display = 'none';
    retour.style.display = 'block';
}

function afficheBoutons() {
    if (inscription.style.display == '' || connexion.style.display == '') {
        inscription.style.display = 'none';
        connexion.style.display = 'none';
    }

    boutons.style.display = '';
    retour.style.display = '';
}

document.getElementById('boutonInscription').addEventListener('click', openInscription);
document.getElementById('boutonConnexion').addEventListener('click', openConnexion);
retour.addEventListener('click', afficheBoutons);