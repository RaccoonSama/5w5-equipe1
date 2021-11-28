

const scrollContainer2 = document.getElementById('scrollingprojets');
var nb2 = 0;

scrollContainer2.addEventListener("wheel", (evt) => {

    nb2 += evt.deltaY;
    if(nb2 >= 0) {
        nb2 = 0;
    }
    if(nb2 <= -2000) {
        nb2 = -2000;
    }
    evt.preventDefault();
    scrollContainer2.style.transform = "translateX(" + nb2/10 + "vw)";
    scrollPoint.style.width = "" + -1*(nb2/20) + "vw";

});