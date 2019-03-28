function openInscription() {
    document.getElementById('inscription').style.display = '';
    document.getElementById('boutons').style.display = 'none';
    document.get
}
function openConnexion() {
    document.getElementById('connexion').style.display = '';
    document.getElementById('boutons').style.display = 'none';
}

document.getElementById('boutonInscription').addEventListener('click', openInscription);
document.getElementById('boutonConnexion').addEventListener('click', openConnexion);