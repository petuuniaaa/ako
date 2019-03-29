// Faire afficher le modal une seule fois si il n'a pas été déjà lancé
function son() {
    var son = new Audio('/sons/son-appli/aide-puzzle.wav');
    son.play();
}

document.getElementById('sonDebut').addEventListener('click', son);

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
