const btnInfo = document.querySelector(".bi-info-circle");
const btnReturn = document.querySelector(".bi-arrow-left-circle");

const divExerc = document.getElementById("exerc");
const divDetails = document.getElementById("devDetails");


btnInfo.addEventListener("click", () => {
    divDetails.style.display = 'block';
    divExerc.style.display = 'none';
})

btnReturn.addEventListener("click", () => {
    divDetails.style.display = 'none';
    divExerc.style.display = 'block';
})