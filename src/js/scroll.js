const currentPage = window.location.pathname;
const targetPages = ['/login', '/olvide', '/registro', '/restablecer', '/confirmar', '/mensaje'];
if (targetPages.includes(currentPage)) {
    console.log('Script scroll loaded!');
    const targetElement = document.getElementById('authID');
    if (targetElement) {
        const windowHeight = window.innerHeight;
        const targetPosition = targetElement.getBoundingClientRect().top - (windowHeight / 8);
        anime({
            targets: document.documentElement,
            scrollTop: targetPosition,
            duration: 300,
            easing: 'easeInOutQuad', 
        });
    }
}
