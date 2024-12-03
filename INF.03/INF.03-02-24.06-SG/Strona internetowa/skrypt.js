const przyciskWyslij = document.querySelector(".wyslij");
const przyciskGeneruj = document.querySelector(".generuj");
const blokChatu = document.querySelector(".blok-chatu");

const tablicaOdpowiedzi = 
[
    "Świetnie!",
    "Kto gra główną rolę?",
    "Lubisz filmy Tego reżysera?",
    "Będę 10 minut wcześniej",
    "Może kupimy sobie popcorn?",
    "Ja wolę Colę",
    "Zaproszę jeszcze Grześka",
    "Tydzień temu też byłem w kinie na Diunie",
    "Ja funduję bilety"
]


przyciskWyslij.addEventListener("click", () => {
    let wiadomosc = document.getElementById('wiadomosc');
    let blokChatu = document.querySelector(".blok-chatu");

    const blokWypowiedziJolki = document.createElement('div');
    blokWypowiedziJolki.classList.add('wypowiedz-jolanty');
    blokWypowiedziJolki.classList.add('blok-wypowiedzi');

    const jolkaObraz = document.createElement('img');
    jolkaObraz.src = 'Jolka.jpg';
    jolkaObraz.alt = 'Jolanta Nowak'

    const jolkaWiadomosc = document.createElement('p');
    jolkaWiadomosc.textContent = wiadomosc.value;

    blokWypowiedziJolki.appendChild(jolkaObraz);
    blokWypowiedziJolki.appendChild(jolkaWiadomosc);
    blokChatu.appendChild(blokWypowiedziJolki);
});


przyciskGeneruj.addEventListener("click", () => {
    const blokWypowiedziKrzysztofa = document.createElement("section");
    blokWypowiedziKrzysztofa.classList.add("wypowiedz-krzysztofa");
    blokWypowiedziKrzysztofa.classList.add("blok-wypowiedzi");

    const krzysztofWiadomosc = document.createElement("p");
    let wylosowanyIndex = Math.floor(Math.random() * tablicaOdpowiedzi.length);
    krzysztofWiadomosc.textContent = tablicaOdpowiedzi[wylosowanyIndex]

    const krzysztofObraz = document.createElement("img");
    krzysztofObraz.src = 'Krzysiek.jpg';
    krzysztofObraz.alt = 'Krzysztof Łukasiński';

    blokChatu.appendChild(blokWypowiedziKrzysztofa);
    blokWypowiedziKrzysztofa.appendChild(krzysztofObraz);
    blokWypowiedziKrzysztofa.appendChild(krzysztofWiadomosc);
});