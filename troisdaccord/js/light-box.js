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
  //passer a travers tout les boutons present et leurs ajouter une fonction lors d'un click
boutonFerme[i].addEventListener("click", function() {
  //changer l'opaciter et le zindex lors de click
    lightbox[i].style.opacity = 0;
    lightbox[i].style.zIndex = -998;

  });
}
for (let i = 0; i < boutonMetier.length; i++) {
  //passer a travers tout les boutons de metiers et leurs ajouter une fonction lors d'un click
        boutonMetier[i].addEventListener("click", function() {
          for (const lightBox of groupLightBox) {
            //changer l'opaciter et le zindex pour toutes les lights box
            lightBox.style.opacity = 0;
            lightBox.style.zIndex = -998;

          }
          //changer l'opaciter et le zindex lors de click
        groupLightBox[i].style.opacity = 1;
        groupLightBox[i].style.zIndex = 1001;

    })  
}

for (let i = 0; i < boutonATE.length; i++) {
    //passer a travers tout les boutons de l'ATE et leurs ajouter une fonction lors d'un click
  boutonATE[i].addEventListener("click", function() {
    //changer l'opaciter et le zindex lors de click
  lightbox[i].style.opacity = 1;
  lightbox[i].style.zIndex = 1001;
})  
}




//accueil woooooooooooooooooooooo
var lightboxAccueil = document.querySelector('.content-section-accueil .wp-block-columns .wp-block-column:last-of-type'); //aller cherche les conteneur html
lightboxAccueil.addEventListener("click",()=> {
  //changer l'opaciter et le zindex lors de click
  lightbox[0].style.opacity = 1;
  lightbox[0].style.zIndex = 1001;
});

var lightboxProjet = document.querySelectorAll('.proj-wrap'); // aller chercher le conteneur pour les lights box des projets

for (let e = 0; e < lightboxProjet.length; e++) {
  //passer a travers tout les boutons de l'ATE et leurs ajouter une fonction lors d'un click
    lightboxProjet[e].addEventListener("click", ()=> {
        //changer l'opaciter et le zindex lors de click
    lightbox[e].style.opacity = 1;
    lightbox[e].style.zIndex = 1001;
  });
  
}