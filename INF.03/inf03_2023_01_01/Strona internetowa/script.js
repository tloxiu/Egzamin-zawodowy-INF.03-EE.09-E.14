const button = document.querySelector('.count');

function count() {
    let powierzchnia = +document.getElementById('powierzchnia').value;
    let wynik = document.getElementById('wynik');
    wynik.innerHTML = "Liczba potrzebnych puszek: " + Math.abs(Math.ceil(powierzchnia / 4));
}

button.addEventListener('click', count);
