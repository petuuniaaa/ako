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
