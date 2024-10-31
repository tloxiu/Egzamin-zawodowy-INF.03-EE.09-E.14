const przyciskWstecz = document.querySelector(".wstecz");
const przyciskPrzod = document.querySelector(".przod");
const aktywneZdjecie = document.querySelector(".aktywne-zdjecie");

let liczba = 1;

przyciskPrzod.addEventListener("click", () => {
    liczba++;

    if (liczba > 7) {
        liczba = 1;
    }

    aktywneZdjecie.src = liczba + ".jpg";
});

przyciskWstecz.addEventListener("click", () => {
    liczba--;

    if (liczba < 1) {
        liczba = 7;
    }
    
    aktywneZdjecie.src = liczba + ".jpg";
});
