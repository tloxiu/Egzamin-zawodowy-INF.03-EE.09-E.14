let imie = document.querySelector("#imie");
let nazwisko = document.querySelector("#nazwisko");
let email = document.querySelector("#email");
let lista = document.querySelector("#lista");
let wynik = document.querySelector(".wynik");

function formularz(){
    wynik.innerHTML = imie.value + " " + nazwisko.value + " " + email.value.toLowerCase() + " " + "Usługa: " + lista.value;
}