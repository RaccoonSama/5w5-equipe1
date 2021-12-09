var menu = document.getElementById('primary-menu');
var button = document.getElementsByClassName('menu-toggle');
menu.classList.toggle('show');
console.log(menu, button);
button[0].addEventListener('click', ()=> {
    menu.classList.toggle('show');
});

button[0].innerText = "";

