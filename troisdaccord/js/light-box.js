//Boutons X pour fermer les light-box
const boutonFerme = document.querySelectorAll('.bouton-fermer');
//Boutons X des métiers dans futur
const boutonMetier = document.querySelectorAll(".metier-wrap");
//Bouton X de l'ATE
const boutonATE = document.querySelectorAll(".ate-wrap");
//Groupe de la lightbox
const groupLightBox = document.querySelectorAll(".group-lightbox");
//Lightbox
const lightbox = document.querySelectorAll(".conteneur-light-box");

for (let i = 0; i < boutonFerme.length; i++) {
boutonFerme[i].addEventListener("click", function() {
    lightbox[i].style.opacity = 0;
    lightbox[i].style.zIndex = -998;

  });
}
for (let i = 0; i < boutonMetier.length; i++) {
        boutonMetier[i].addEventListener("click", function() {
          for (const lightBox of groupLightBox) {
            lightBox.style.opacity = 0;
            lightBox.style.zIndex = -998;

          }
        groupLightBox[i].style.opacity = 1;
        groupLightBox[i].style.zIndex = 1001;

    })  
}

for (let i = 0; i < boutonATE.length; i++) {
  boutonATE[i].addEventListener("click", function() {
  lightbox[i].style.opacity = 1;
  lightbox[i].style.zIndex = 1001;
})  
}




//accueil woooooooooooooooooooooo
var lightboxAccueil = document.querySelector('.content-section-accueil .wp-block-columns .wp-block-column:last-of-type');
lightboxAccueil.addEventListener("click",()=> {
  lightbox[0].style.opacity = 1;
  lightbox[0].style.zIndex = 1001;
});

var lightboxProjet = document.querySelectorAll('.proj-wrap');

for (let e = 0; e < lightboxProjet.length; e++) {
  console.log(lightboxProjet[e]);
    lightboxProjet[e].addEventListener("click", ()=> {
    console.log('34234');
    lightbox[e].style.opacity = 1;
    lightbox[e].style.zIndex = 1001;
  });
  
}