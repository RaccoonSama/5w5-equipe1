

const scrollContainer2 = document.getElementById('scrollingprojets');
var nb2 = 0;

scrollContainer2.addEventListener("wheel", (evt) => {
     //ajouter un évènement sur la mollette de la souris afin de faire défiler le conteneur horizontalement
    if (window.innerWidth > 1040) {

    nb2 += evt.deltaY;
    if(nb2 >= 0) {
        nb2 = 0;
    }
    if(nb2 <= -2000) {
        nb2 = -2000;
    }
    evt.preventDefault();
    scrollContainer2.style.transform = "translateX(" + nb2/4 + "vw)";
    scrollPoint.style.width = "" + -1*(nb2/20) + "vw";

}
});

const MyNodeList = document.querySelectorAll('.proj-content'); // aller cherchers les projets
        document.addEventListener('mousemove', function (e) {
            //faire que les projets suivent les mouvement de la souris
            for (let i = 0; i < MyNodeList.length; i++) {
                var xAxis = (window.innerWidth / 2 - e.pageX) / -30;
                var yAxis = (window.innerHeight / 2 - e.pageY) / 15;
            if (window.innerWidth > 1040) {
                MyNodeList[i].style.transform = 'rotateY(' + xAxis/1.4 + 'deg) rotateX(' + yAxis/1.4 + 'deg)';
            }

              }
        });

const MyNodeList2 = document.querySelectorAll('.proj-content');
        function AjusterHover3DWindowWidth() {
            if (window.innerWidth < 1040) {
                for (let j = 0; j < MyNodeList2.length; j++) {
                MyNodeList2[j].style.transform = 'rotateX(0) rotateY(0)';
            }
          }
        }
          
          window.addEventListener('resize', AjusterHover3DWindowWidth);
        



