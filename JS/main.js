function mostrarElementoIndex() {
    let encabezadoIndex = document.getElementById("encabezadoIndex");
    let elementoH1 = document.createElement("h1");
    let textoEncabezado = "Bienvenido a mi sitio Web";

    elementoH1.innerText = textoEncabezado;
    encabezadoIndex.appendChild(elementoH1);
}

function mostrarElementoMarcas() {
    let encabezadoMarcas = document.getElementById("encabezadoMarcas");
    let elementoH1 = document.createElement("h1");
    let textoEncabezado = "Lenguaje de Marcado de Hipertexto";

    elementoH1.innerText = textoEncabezado;
    encabezadoMarcas.appendChild(elementoH1);
}

function mostrarElementoEstilos() {
    let encabezadoEstilos = document.getElementById("encabezadoEstilos");
    let elementoH1 = document.createElement("h1");
    let textoEncabezado = "Hoja de Estilos en Cascada";

    elementoH1.innerText = textoEncabezado;
    encabezadoEstilos.appendChild(elementoH1);
}

function mostrarElementoJs() {
    let encabezadoJS = document.getElementById("encabezadoJS");
    let elementoH1 = document.createElement("h1");
    let textoEncabezado = "JavaScript";

    elementoH1.innerText = textoEncabezado;
    encabezadoJS.appendChild(elementoH1);
}

function mandarAlerta(params) {
    alert("Hola, bienvenido a mi sitio web");
}

function mostrarElementoPHP() {
    let encabezadoPHP = document.getElementById("encabezadoPHP");
    let elementoH1 = document.createElement("h1");
    let textoEncabezado = "Cálculo de figuras con PHP";

    elementoH1.innerText = textoEncabezado;
    encabezadoPHP.appendChild(elementoH1);
}