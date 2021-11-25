

const scrollContainer2 = document.getElementById('scrollingprojets');
var nb2 = 0;

scrollContainer2.addEventListener("wheel", (evt) => {

    nb2 += evt.deltaY;
    if(nb2 >= 0) {
        nb2 = 0;
    }
    if(nb2 <= -1000) {
        nb2 = -1000;
    }
    evt.preventDefault();
    scrollContainer2.style.transform = "translateX(" + nb2/5 + "vw)";

});