var currentPage = window.location.pathname;

function cambiarColorByClass(className, color) {
    var iconos = document.querySelectorAll('.' + className);
    iconos.forEach(function (icono) {
        icono.style.color = color;
    });
}

var defaultColor = '#F23545';
cambiarColorByClass('icon-container', defaultColor);

if (currentPage === '/carta') {
    var nuevoColor = '#17330c';
    cambiarColorByClass('icon-container', nuevoColor);
}
<<<<<<< HEAD

if (currentPage === '/about') {
    var nuevoColor = '#383a33';
    cambiarColorByClass('icon-container', nuevoColor);
}
=======
>>>>>>> ffd807bf40211838fd535809e8e26f26991c9ae4
