const scrollContainer3 = document.querySelector('.prof-row');
console.log(scrollContainer3);
var nb3 = 0;
scrollContainer3.addEventListener("wheel", (evt) => {
    if (window.innerWidth > 1040) {

    nb3 += evt.deltaY;
    if(nb3 >= 0) {
        nb3 = 0;
    }

    if(nb3 <= -2000) {
        nb3 = -2000;
    }
    evt.preventDefault();
    scrollContainer3.style.transform = "translateX(" + nb3/20 + "vw)";
    scrollPoint.style.width = "" + -1*(nb3/20) + "vw";
}

});