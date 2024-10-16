let username = document.querySelector("#username");
let surname = document.querySelector("#surname");
let email = document.querySelector("#email");
let textarea = document.querySelector("#textarea");
let checkbox = document.querySelector("#checkbox");
let result = document.querySelector(".result");
let button = document.querySelector(".button");

button.addEventListener("click", () => {
    if(checkbox.checked){
        result.style.color = "navy";
        result.innerHTML = username.value.toUpperCase() + " " + surname.value.toUpperCase() + "<br>" + "Treść twojej sprawy: " + textarea.value;
    } else{
        result.style.color = "red";
        result.innerHTML = "Musisz zapoznać się z regulaminem.";
    }
});

