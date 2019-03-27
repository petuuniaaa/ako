// Faire afficher le modal une seule fois si il n'a pas été déjà lancé

if (localStorage.getItem('memory') === "OK") {
    document.getElementById("modalDebut").style.display = 'none';
} else {
    $("#modalDebut").fadeIn("slow");
    $('#modalDebut').css('display', 'block');


    function close() {
        document.getElementById('modalDebut').style.display = 'none';
        localStorage.setItem('memory', "OK");
    }

    document.getElementById('close').addEventListener('click', close);
}



