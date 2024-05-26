const submitButton = document.querySelector(".submit-btn");
const result = document.querySelector(".result");


submitButton.addEventListener("click", function(){
    const short = document.querySelector("#short").checked;
    const medium = document.querySelector("#medium").checked;
    const mediumLong = document.querySelector("#medium-long").checked;
    const long = document.querySelector("#long").checked;

    let price = 0;
    if(short){
        price = 15;
    }
    else if(medium){
        price = 20;
    }
    else if(mediumLong){
        price = 30;
    }
    else if (long){
        price = 40;
    }

    result.innerHTML = `cena promocyjna: ${price}`;
});