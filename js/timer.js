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
    var newContent = document.createTextNode("Le temps est imparti :(");

    para.appendChild(newContent);

    document.body.appendChild(newDiv);
}

function controleTemps() {
    if (localStorage.getItem('temps') <= Date.now()) {
        modal();
        console.log('coucou');
        clearInterval(timer);
    }
}

var timer = setInterval(() => {
    controleTemps();
}, 1000);