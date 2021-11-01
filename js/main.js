/* FORM FUNC */

function Esconde(div) {
    var display = document.getElementById(div).style.display;
    if (display != "none") {
        document.getElementById(div).style.display = 'none';
    }
    document.getElementById("custo").removeAttribute("required");
}

function Habilita(div) {
    var display = document.getElementById(div).style.display;
    if (display != "block") {
        document.getElementById(div).style.display = 'block';
    }
    document.getElementById("custo").setAttribute("required");
}

/* //FORM FUNC */