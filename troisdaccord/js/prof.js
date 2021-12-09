var profElem = document.querySelectorAll(".prof-wrap");
var imgProf =  document.querySelectorAll(".prof-img-bas");


profElem[0].style.opacity = 1;

for (let i = 0; i < imgProf.length; i++) {
    imgProf[i].addEventListener("click", ()=> {
        for (const prof of profElem) {
            prof.style.opacity = 0;
        }
        profElem[i].style.opacity = 1;

    })
    
}