var profElem = document.querySelectorAll(".prof-wrap"); // aller chercher le wrapper des profs
var imgProf =  document.querySelectorAll(".prof-img-bas"); // aller chercher la partie bas de la secion image


profElem[0].style.opacity = 1;// mettre le premier prof en opacite 1

for (let i = 0; i < imgProf.length; i++) {
    //passer a travers tout les elements du groupe des profs
    imgProf[i].addEventListener("click", ()=> {
        //lorsque l'on click
        for (const prof of profElem) {
            //on change l'opacite pout tout les profs
            prof.style.opacity = 0;
        }
        //on change l'opacite du profs selectionne
        profElem[i].style.opacity = 1;
        if (window.innerWidth < 1040) {
        window.location.assign('https://eddym15.sg-host.com/professeurs/#masthead');
        }
    })
    
}