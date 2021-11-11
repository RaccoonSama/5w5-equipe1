const boutonFerme = document.getElementById('bouton-fermer');
const lightbox = document.getElementById("conteneur-light-box");
const boutonMetier = document.querySelectorAll(".metier-wrap");
console.log(boutonMetier);

boutonFerme.addEventListener("click", function() {
    lightbox.style.display = "none";

  });

for (let i = 0; i < boutonMetier.length; i++) {
        boutonMetier[i].addEventListener("click", function() {
        lightbox.style.display = "flex";
    })  
}