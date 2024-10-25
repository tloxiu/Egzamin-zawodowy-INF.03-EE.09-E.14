const cytat1 = document.querySelector(".cytat1");
const cytat2 = document.querySelector(".cytat2");
const cytat3 = document.querySelector(".cytat3");


cytat1.addEventListener("click", () => {
    cytat1.style.display = "none";
    cytat2.style.display = "block";
});

cytat2.addEventListener("click", () => {
    cytat2.style.display = "none";
    cytat3.style.display = "block";
});

cytat3.addEventListener("click", () => {
    cytat3.style.display = "none";
    cytat1.style.display = "block";
});