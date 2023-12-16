
var currentPath = window.location.pathname;

if (currentPath.indexOf('/admin') !== 0) {
    console.log('Script toggle navbar loaded')
    document.getElementById('toggle').addEventListener('touchstart', function(event) {
        toggleMenu();
        event.preventDefault();
    }, { passive: true });
}

function toggleMenu() {
    var menu = document.querySelector('.menu-mobile');
    var icon = document.querySelector('.icon-cancel');
    var iconmain = document.querySelector('.icon-menu')
    var isVisible = menu.classList.contains('show');
    
    if (!isVisible) {
        menu.classList.add('show');
        icon.classList.add('show');
        iconmain.classList.add('show');
    } else {
        menu.classList.remove('show');
        icon.classList.remove('show');
        iconmain.classList.remove('show');
    }
}