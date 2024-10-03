const button = document.querySelector(".button");
const peeling = document.querySelector("#peeling");
const maska = document.querySelector("#maska");
const masaz = document.querySelector("#masaz");
const makijaz = document.querySelector("#makijaz");
const wynik = document.querySelector(".wynik");



button.addEventListener("click", () => {
    let suma = 0;
    if(peeling.checked){
        suma = suma + 45;
    }
    if(maska.checked){
        suma = suma + 30;
    }
    if(masaz.checked){
        suma = suma + 20;
    }
    if(makijaz.checked){
        suma = suma + 50;
    }

    wynik.innerHTML = `Cena zabiegów: ${suma}`;

});