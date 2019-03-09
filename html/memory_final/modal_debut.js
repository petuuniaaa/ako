$("#modal_debut").fadeIn("slow");
$('#modal_debut').css('display', 'block');


function close() {
    document.getElementById('modal_debut').style.display = 'none';
}

document.getElementById('close').addEventListener('click', close);