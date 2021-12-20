const scrollVie = document.getElementById('vie-scroll'); //aller chercher le conteneur de la vie etudiante
var nbVie =0;


scrollVie.addEventListener("wheel", (evt) => {
   //ajouter un évènement sur la mollette de la souris afin de faire défiler le conteneur horizontalement
  nbVie += evt.deltaY;
  console.log(nbVie);

  
  if (window.screen.width >= 1016) {
    evt.preventDefault();
    if (nbVie > 0) {
      nbVie = 0;
  } else if (nbVie < -600) {
      nbVie = -600;
  }
  
  scrollVie.style.transform = "translateX(" + nbVie/3 + "vw)";
  scrollPoint.style.width = "" + -1*(nbVie/6) + "vw";
}

  
  
  
});

const gauche = document.getElementById("<-"); //aller chercher la fleche gauche
const droite = document.getElementById("->");//aller chercher la fleche droite
var valDebut = 0; //definir la valeur de debut
var index = 0; //definir l'index
gauche.addEventListener("click", ()=> {
  if (index > 0) { //definir les limites du scrolls
    index--;
    valDebut += 100;
    scrollVie.style.transform = "translateX(" + valDebut +"vw)";
    console.log("gauche");
    console.log(index);
  }
});
droite.addEventListener("click", ()=> {
  if (index < 2) { //definir les limites du scolls
    index++;
    valDebut -= 100;
    scrollVie.style.transform = "translateX(" + valDebut +"vw)";
    console.log("droite");
    console.log(index);
  }
});