document.getElementById('toggle').addEventListener('click', toggleMenu);

function toggleMenu() {
    var menu = document.querySelector('.menu-mobile');
    menu.classList.toggle('show');
}