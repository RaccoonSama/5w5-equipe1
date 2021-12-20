
const scrollContainer = document.getElementById('cours-vertical');
const scrollPoint = document.getElementById('scrollPoint');
var nb =0;

var newWidth = 16.6;

  

scrollContainer.addEventListener("wheel", (evt) => {
  nb += evt.deltaY;
  console.log(nb);

  if (window.screen.width >= 1016) {
    evt.preventDefault();
    if (nb > 0) {
      nb = 0;
  }
   
        
        if (nb <= 0 && nb >= -2500) {
        newWidth ++;
        scrollContainer.style.transform = "translateX(" + nb/5 + "vw)";
        scrollPoint.style.width = "" + -1*(nb/25) + "vw";
        
    }
  }else {
    if (nb <= 0) {
      nb = 0;
  } else if (nb >= 4600 && (window.screen.width >= 601)) {
    nb = 4600;
  }
  }
});






var coursObj = [];
var textObj = [];

// var coursS1 = document.querySelectorAll('.cours-session-1');
// var textS1 = document.querySelectorAll('.text-session-1');
const sessions = document.querySelectorAll('.sessions');
var index = -1;
var index2 = 0;

const gauche = document.getElementById("<-");
const droite = document.getElementById("->");
var valDebut = 0;
gauche.addEventListener("click", ()=> {
  if (index2 > 0) {
    valDebut += 100;
    scrollContainer.style.transform = "translateX(" + valDebut +"vw)";
    index2--;
    console.log("gauche");
    console.log(valDebut);
  }
});
droite.addEventListener("click", ()=> {
  if (index2 < 5) {
    valDebut -= 100;
    scrollContainer.style.transform = "translateX(" + valDebut +"vw)";
    index2++;
    console.log("droite");
    console.log(valDebut);
  }
});

for(a = 1; a < 7; a++) { 
    window['var_'+a] = document.querySelectorAll('.cours-session-' + a); 
    coursObj.push(window['var_'+a] = document.querySelectorAll('.cours-session-' + a) );
    window['var2_'+a] = document.querySelectorAll('.cours-session-' + a); 
    textObj.push(window['var2_'+a] = document.querySelectorAll('.text-session-' + a) );

    index++;
    
  
       
    for (let i = 0; i < coursObj[index].length; i++) {
     
       textObj[index][0].style.opacity = "1";
        coursObj[index][i].addEventListener("click", (e)=> {
            for (const textCour of textObj[index2]) {
                textCour.style.opacity = "0";
            }
            textObj[index2][i].style.opacity = "1"; 
            if (window.screen.width >= 1016) {
            if ((nb <= -400 && nb > -899)) {
                index2=1;
                console.log('fonctionne');
              }
              else if (nb <= -900 && nb > -1399) {
                index2=2;
                console.log('fonctionne');
              }
              else if (nb <= -1400 && nb > -1899) {
                index2=3;
                console.log('fonctionne');
              }
              else if (nb <= -1900 && nb > -2399) {
                index2=4;
                console.log('fonctionne');
              }
              else if (nb <= -2400) {
                index2=5;
                console.log('fonctionne');
              }
        
            } else if(window.screen.width <= 1017 && window.screen.width >= 601) {
              if ((nb >= 400 && nb < 1099)) {
                index2=1;
                console.log('fonctionne');
              }
              else if (nb >= 1100 && nb < 2099) {
                index2=2;
                console.log('fonctionne');
              }
              else if (nb >= 2100 && nb < 2999) {
                index2=3;
                console.log('fonctionne');
              }
              else if (nb >= 3000 && nb < 3599) {
                index2=4;
                console.log('fonctionne');
              }
              else if (nb >= 3600) {
                index2=5;
                console.log('fonctionne');
              }
            } else {
              if ((nb >= 1400 && nb < 3299)) {
                index2=1;
                console.log('fonctionne');
              }
              else if (nb >= 3300 && nb < 5099) {
                index2=2;
                console.log('fonctionne');
              }
              else if (nb >= 5100 && nb < 6999) {
                index2=3;
                console.log('fonctionne');
              }
              else if (nb >= 7000 && nb < 8899) {
                index2=4;
                console.log('fonctionne');
              }
              else if (nb >= 8900) {
                index2=5;
                console.log('fonctionne');
              }
            }
              console.log(index2);
        });
    }
} 

