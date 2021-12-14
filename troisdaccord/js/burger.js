//Menu burger
var menu = document.getElementById('primary-menu');
var test = document.getElementsByClassName('menu-menu-1-container');
console.log(test);
//Bouton burger
var button = document.getElementsByClassName('menu-toggle');
//Icône du menu burger
button[0].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.66 36.44"><defs><style>.cls-1{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:4px;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="MenuBurger"><line class="cls-1" x1="2" y1="2" x2="50.66" y2="2"/><line class="cls-1" x1="2" y1="18.22" x2="50.66" y2="18.22"/><line class="cls-1" x1="2" y1="34.44" x2="50.66" y2="34.44"/></g></g></svg>';

menu.classList.toggle('show');
test[0].classList.toggle('show');
button[0].addEventListener('click', ()=> {
    menu.classList.toggle('show');
    test[0].classList.toggle('show');
});