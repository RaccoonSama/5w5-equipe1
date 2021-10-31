const scrollContainer = document.getElementById('cours-vertical');
const scrollPoint = document.getElementById('scrollPoint');
var nb =0;
var newWidth = 16.6;

scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    nb += evt.deltaY;
    if (nb > 0) {
        nb = 0;
    }
        
        if (nb <= 0 && nb >= -2500) {
        newWidth ++;
        scrollContainer.style.transform = "translateX(" + nb/5 + "vw)";
        scrollPoint.style.width = "" + -1*(nb/27.3) + "vw";
        console.log(nb);
    }

});



var coursObj = [];
var textObj = [];

// var coursS1 = document.querySelectorAll('.cours-session-1');
// var textS1 = document.querySelectorAll('.text-session-1');
const sessions = document.querySelectorAll('.sessions');
var index = -1;
var index2 = 0;


for(a = 1; a < 7; a++) { 
    window['var_'+a] = document.querySelectorAll('.cours-session-' + a); 
    coursObj.push(window['var_'+a] = document.querySelectorAll('.cours-session-' + a) );
    window['var2_'+a] = document.querySelectorAll('.cours-session-' + a); 
    textObj.push(window['var2_'+a] = document.querySelectorAll('.text-session-' + a) );

    index++;
    

       
    for (let i = 0; i < coursObj[index].length; i++) {
       console.log(coursObj[index])
       textObj[index][0].style.opacity = "1";
        coursObj[index][i].addEventListener("click", (e)=> {
            for (const textCour of textObj[index2]) {
                textCour.style.opacity = "0";
            }
            textObj[index2][i].style.opacity = "1"; 
            if (nb <= -400 && nb > -899) {
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
            else {
                index2=0;
              }    
              console.log(index2);
        });
       
    }
    
   
} 

function effectClic(bidule) {
    console.log(bidule);
  
    //textObj[index2][i].style.opacity = "1";
   
}
  



//    for (let i = 0; i < coursObj[index].length; i++) {
//         console.log(coursObj[index]);
//         coursObj[index][i].addEventListener("click", (e)=> {
//             for (const textCour of textObj[index]) {
//                 textCour.style.opacity = "0";
//             }
//             textObj[index][i].style.opacity = "1";
//         })
// }