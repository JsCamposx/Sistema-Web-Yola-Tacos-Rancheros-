var currentPage = window.location.pathname;

function cambiarColorByClass(className, color) {
    var iconos = document.querySelectorAll('.' + className);
    iconos.forEach(function (icono) {
        icono.style.color = color;
    });
}

var defaultColor = '#F23545';
cambiarColorByClass('icon-container', defaultColor);

if (currentPage === '/platos') {
    var nuevoColor = '#17330c';
    cambiarColorByClass('icon-container', nuevoColor);
}

if (currentPage === '/about' || currentPage === '/condiciones-de-uso') {
    var nuevoColor = '#383a33';
    cambiarColorByClass('icon-container', nuevoColor);
}
