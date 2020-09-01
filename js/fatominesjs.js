window.onload = function () {
    var images = [
        "./imgs/dragaomodal.jpeg",
        "./imgs/porcosmodal.jpeg",
        "./imgs/capuchinhomodal.jpeg",
    ];
    var img = document.getElementById("tela");
    var previousBtn = document.getElementById("btn1");
    var nextBtn = document.getElementById("btn2");
    var i = 0;
    setInterval(function () {
        i++;
        if (i == images.length) {
            i = 0;
        }
        img.src = images[i];
    }, 4000);
    previousBtn.onclick = function () {
        i++;
        if (i >= images.length) {
            i = 0;
        }
        img.src = images[i];
    };
    nextBtn.onclick = function () {
        i--;
        if (i < 0) {
            i = images.length - 1;
        }
        img.src = images[i];
    };
    var Form = document.getElementById("Form");
    Form.onsubmit = function (e) {
        if (Form.name.value == "" ||
            Form.email.value == "" ||
            Form.text.value == "") {
            alert("Por favor preencha todos os campos");
            event.preventDefault();
        }
    };
};
