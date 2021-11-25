const boutonFerme = document.querySelectorAll('.bouton-fermer');
const lightbox = document.querySelectorAll(".conteneur-light-box");
const boutonMetier = document.querySelectorAll(".metier-wrap");
const boutonATE = document.querySelectorAll(".ate-wrap");
const groupLightBox = document.querySelectorAll(".group-lightbox");
<<<<<<< HEAD
  console.log('wooo');
=======
>>>>>>> 07fe07ef7869766c5754e4c53c220923cc358b16
console.log(groupLightBox);
for (let i = 0; i < boutonFerme.length; i++) {
boutonFerme[i].addEventListener("click", function() {
    lightbox[i].style.opacity = 0;
    lightbox[i].style.zIndex = 998;
<<<<<<< HEAD
  console.log('wooo');
  });
}
for (let i = 0; i < boutonMetier.length; i++) {
    console.log('wooo');
=======

  });
}
for (let i = 0; i < boutonMetier.length; i++) {
>>>>>>> 07fe07ef7869766c5754e4c53c220923cc358b16
        boutonMetier[i].addEventListener("click", function() {
          for (const lightBox of groupLightBox) {
            lightBox.style.opacity = 0;
            lightBox.style.zIndex = 998;

          }
        groupLightBox[i].style.opacity = 1;
        groupLightBox[i].style.zIndex = 1001;

    })  
}

for (let i = 0; i < boutonATE.length; i++) {
<<<<<<< HEAD

=======
>>>>>>> 07fe07ef7869766c5754e4c53c220923cc358b16
  boutonATE[i].addEventListener("click", function() {
  lightbox[i].style.opacity = 1;
  lightbox[i].style.zIndex = 1001;
})  
}