const scrollVie = document.getElementById('vie-scroll');
var nbVie =0;


scrollVie.addEventListener("wheel", (evt) => {
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

const gauche = document.getElementById("<-");
const droite = document.getElementById("->");
var valDebut = 0;
var index = 0;
gauche.addEventListener("click", ()=> {
  if (index > 0) {
    index--;
    valDebut += 100;
    scrollVie.style.transform = "translateX(" + valDebut +"vw)";
    console.log("gauche");
    console.log(index);
  }
});
droite.addEventListener("click", ()=> {
  if (index < 2) {
    index++;
    valDebut -= 100;
    scrollVie.style.transform = "translateX(" + valDebut +"vw)";
    console.log("droite");
    console.log(index);
  }
});