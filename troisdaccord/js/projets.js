

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
    scrollContainer2.style.transform = "translateX(" + nb2/10 + "vw)";
    scrollPoint.style.width = "" + -1*(nb2/10) + "vw";

});

const MyNodeList = document.querySelectorAll('.proj-content');

document.addEventListener('mousemove', function (e) {
    for (let i = 0; i < MyNodeList.length; i++) {
        var xAxis = (window.innerWidth / 2 - e.pageX) / -30;
        var yAxis = (window.innerHeight / 2 - e.pageY) / 15;
        MyNodeList[i].style.transform = 'rotateY(' + xAxis + 'deg) rotateX(' + yAxis + 'deg)';
      }
});
