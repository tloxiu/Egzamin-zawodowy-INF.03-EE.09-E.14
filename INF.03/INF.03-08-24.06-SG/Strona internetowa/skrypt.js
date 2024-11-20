const przyciskKlient = document.querySelector(".przycisk-klient");
const przyciskAdres = document.querySelector(".przycisk-adres");
const przyciskKontakt = document.querySelector(".przycisk-kontakt");
const pierwszyKontrolki = document.querySelector(".pierwszy-kontrolki");
const drugiKontrolki = document.querySelector(".drugi-kontrolki");
const trzeciKontrolki = document.querySelector(".trzeci-kontrolki");
const pustyBlok = document.querySelector(".pusty-blok");

let postep = 4;

przyciskKlient.addEventListener("click", () => {
    pierwszyKontrolki.style.display = "block";
    drugiKontrolki.style.display = "none";
    trzeciKontrolki.style.display = "none";
});

przyciskAdres.addEventListener("click", () => {
    pierwszyKontrolki.style.display = "none";
    drugiKontrolki.style.display = "block";
    trzeciKontrolki.style.display = "none";
});

przyciskKontakt.addEventListener("click", () => {
    pierwszyKontrolki.style.display = "none";
    drugiKontrolki.style.display = "none";
    trzeciKontrolki.style.display = "block";
});

function utrataFocusa(){
    if(postep >= 100){
        return;
    }
    else postep = postep + 12;

    pustyBlok.style.width = postep + '%';
}; 

function wyswietlDane(){
    let imie = document.querySelector("#imie");
    let nazwisko = document.querySelector("#nazwisko");
    let dataUrodzenia = document.querySelector("#data-urodzenia");
    let ulica = document.querySelector("#ulica");
    let numer = document.querySelector("#numer");
    let miasto = document.querySelector("#miasto");
    let numerTelefonu = document.querySelector("#numer-telefonu");
    let checkbox = document.querySelector("#checkbox").checked;
    if(checkbox){
        console.log(imie.value, nazwisko.value, dataUrodzenia.value, ulica.value, numer.value, miasto.value, numerTelefonu.value, 'on');
    } else console.log(imie.value, nazwisko.value, dataUrodzenia.value, ulica.value, numer.value, miasto.value, numerTelefonu.value, 'off');
}