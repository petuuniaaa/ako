document.getElementById('submit').addEventListener('submit', horloge);

function horloge(e) {
    e.preventDefault();
    var h = time.value;
    let [hour, minutes] = h.split(':').map(Number);
    let total = hour * 3600 + minutes * 60;

    let now = Date.now();
    let expire = now + (total * 1000);

    let date = new Date(expire).toLocaleTimeString();

    localStorage.setItem('temps', expire);
    localStorage.setItem('time', date);
}

function modal() {
    var newDiv = document.createElement("div");
    newDiv.id = 'modal';

    var para = document.createElement("p");

    newDiv.appendChild(para);
    var newContent = document.createTextNode("Le temps de jeu est terminé");

    para.appendChild(newContent);

    var form = document.createElement("form")
    form.method = 'post';
    newDiv.appendChild(form);

    var label = document.createElement("label");
    label.id = 'label'
    form.appendChild(label);
    var labelText = document.createTextNode("Entrez votre mot de passe :");
    var saut = document.createElement("br");
    form.appendChild(saut);

    label.appendChild(labelText);

    var inputPwd = document.createElement("input");
    inputPwd.type = 'password';
    form.appendChild(inputPwd);

    var submit = document.createElement("input");
    submit.type = 'submit';
    submit.value = 'Continuer à jouer';
    submit.id = 'relancer';
    form.appendChild(submit);

    document.body.appendChild(newDiv);
}

function controleTemps() {
    if (localStorage.getItem('temps') <= Date.now()) {
        modal();
        clearInterval(timer);
    }
}

var timer = setInterval(() => {
    controleTemps();
}, 1000);