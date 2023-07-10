const cajaTexto = document.querySelector('#cajatexto');
const output = document.querySelector('#output');
console.log(cajaTexto)
console.log(output)
cajaTexto.addEventListener(
    "keydown",
    (caal) => (output.textContent = `Haz presionado la tecla "${caal.key}".`)
);