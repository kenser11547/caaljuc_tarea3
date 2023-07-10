const cajaTexto = document.querySelector('#cajatexto');
const output = document.querySelector('#output');
cajaTexto.addEventListener(
    "keydown",
    (caal) => (output.textContent = `Pressionaste "${caal.key}".`)
);