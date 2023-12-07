


<div class="header__contenido icon-container">
   <div >
        <a  href="/login" aria-label="Enlace al inicio de sesión">
            <img >
        </a>
    </div>  

    <nav class="header__nav ">
        <ul>
            <li>
                <a class="header__nav__txt <?php echo pagina_actual('platos') ? 'icon-container hoveredPage' : '';?>" href="/platos">
                    Nuestros platos
                </a>
            </li>
            <li>
                <a class="header__nav__txt <?php echo pagina_actual('about') ? 'icon-container hoveredPage' : '';?>" href="/about">
                    Agenda
                </a>
            </li>
            <li >
                <a class="header__nav__txt <?php echo pagina_actual('como-funciona') ? 'icon-container hoveredPage' : '';?>" href="/como-funciona">
                    Cómo funciona
                </a>
            </li>
        </ul>
    </nav>

    <button class="header__boton" aria-label="Botón de usuario">
        <span class="icon-container"> <i  class="fa-solid fa-circle-user header__boton--size" ></i></span>
    </button>

    <button class="header__boton--opciones" aria-label="Botón de opciones" id="toggle">
        <span class="icon-container"><i  class="fa-solid fa-bars header__boton--size" ></i></span>
    </button>
</div>
