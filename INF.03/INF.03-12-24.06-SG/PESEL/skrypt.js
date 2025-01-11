const przycisk1 = document.querySelector(".transformacja1");
const przycisk2Kolorowy = document.querySelector(".transformacja2-kolorowy");
const przycisk2Czarnobialy = document.querySelector(".transformacja2-czarnobialy");
const przycisk3 = document.querySelector(".transformacja3");
const przycisk4 = document.querySelector(".transformacja4");

przycisk1.addEventListener("click", () => {
    const pszczola = document.querySelector(".pszczola");
    let blur = document.querySelector("#blur").checked;
    let sepia = document.querySelector("#sepia").checked;
    let negatyw = document.querySelector("#negatyw").checked;

    if(blur){
        pszczola.style.filter = 'blur(5px)';
    }
    if(sepia){
        pszczola.style.filter = 'sepia(100%)';
    }
    if(negatyw){
        pszczola.style.filter = 'invert(100%)';
    }
});

przycisk2Kolorowy.addEventListener("click", () => {
    const pomarancza = document.querySelector(".pomarancza");
    pomarancza.style.filter = 'grayscale(0%)';
});

przycisk2Czarnobialy.addEventListener("click", () => {
    const pomarancza = document.querySelector(".pomarancza");
    pomarancza.style.filter = 'grayscale(100%)';
});

przycisk3.addEventListener("click", () => {
    const owoce = document.querySelector(".owoce");
    let wartoscFiltru = document.querySelector("#przezroczystosc").value;
    owoce.style.filter = 'opacity(' + wartoscFiltru + '%)';

});

przycisk4.addEventListener("click", () => {
    const zolw = document.querySelector(".zolw");
    let wartoscFiltru = document.querySelector("#jasnosc").value;
    zolw.style.filter = 'brightness(' + wartoscFiltru + '%)';
});