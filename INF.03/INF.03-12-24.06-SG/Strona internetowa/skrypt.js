let przyciskFiltr = document.querySelector(".przycisk-filtr");
let przyciskKolorowy = document.querySelector(".przycisk-kolorowy");
let przyciskOwoce = document.querySelector(".przycisk-owoce");
let przyciskZolw = document.querySelector(".przycisk-zolw");
let przyciskCzarnobialy = document.querySelector(".przycisk-czarno-bialy");

let blurFilter = document.querySelector("#blur");
let sepiaFilter = document.querySelector("#sepia");
let negatywFilter = document.querySelector("#negatyw");

let suwakOwoce = document.querySelector(".suwak-owoce");
let suwakZolw = document.querySelector(".suwak-zolw");

const obraz1 = document.querySelector(".obraz1");
const obraz2 = document.querySelector(".obraz2");
const obraz3 = document.querySelector(".obraz3");
const obraz4 = document.querySelector(".obraz4");

przyciskFiltr.addEventListener("click", () => {
    if(blurFilter.checked){
        obraz1.style.filter = "blur(6px)";
    } else if (sepiaFilter.checked){
        obraz1.style.filter = "sepia(100%)";
    } else if (negatywFilter.checked){
        obraz1.style.filter = "invert(100%)";
    }
});

przyciskKolorowy.addEventListener("click", () => {
    obraz2.style.filter = "grayscale(0%)";
});

przyciskKolorowy.addEventListener("click", () => {
    obraz2.style.filter = "grayscale(0%)";
});

przyciskCzarnobialy.addEventListener("click", () => {
    obraz2.style.filter = "grayscale(100%)";
});

przyciskOwoce.addEventListener("click", () => {
    let procenty = suwakOwoce.value + "%";
    obraz3.style.filter = "opacity(" + procenty + ")";
});

przyciskZolw.addEventListener("click", () => {
    let procenty = suwakZolw.value + "%";
    obraz4.style.filter = "contrast(" + procenty + ")";
});