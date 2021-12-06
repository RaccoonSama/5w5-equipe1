

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
    scrollContainer2.style.transform = "translateX(" + nb2/4.5 + "vw)";
    scrollPoint.style.width = "" + -1*(nb2/20) + "vw";

});

const MyNodeList = document.querySelectorAll('.proj-content');

/* window.addEventListener('resize', function(){
    if(window.innerWidth < 1000){
        document.removeEventListener('mousemove');
    }
    if(window.innerWidth > 1000){
        document.EventListener('mousemove', function (e) {
            for (let i = 0; i < MyNodeList.length; i++) {
                var xAxis = (window.innerWidth / 2 - e.pageX) / -30;
                var yAxis = (window.innerHeight / 2 - e.pageY) / 15;
                MyNodeList[i].style.transform = 'rotateY(' + xAxis + 'deg) rotateX(' + yAxis + 'deg)';
              }
        });
    }
}); */


