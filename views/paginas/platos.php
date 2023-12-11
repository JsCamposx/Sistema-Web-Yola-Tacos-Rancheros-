<?php

use Dotenv\Parser\Value;

$excludeSubHeader = true;
?>

<div class="h padding0" id="h">
    <div class="h__center">
        <div class="h__contenedor flex-column">
            <div class="h__pad-izquierdo">
                <div class="h__pad-izquierdo__titulo">
                    <h1 class="h__pad-izquierdo__titulo__h1 colorGreen">Agenda y Disfruta Tacos Norteños</h1>
                </div>
                <div class="h__pad-izquierdo__subtitulo">
                    <h2 class="h__pad-izquierdo__subtitulo__h2">Los más deliciosos, sabrosos y ricos tacos para toda ocasión</h2>
                </div>

                <div class="h__pad-izquierdo__cboton">
                    <button class="h__pad-izquierdo__cboton__boton backgroundGreen" id="btnHeader">
                        <span>Explora los platos</span>
                    </button>
                </div>

                <div class="h__pad-izquierdo__stars">
                    <span>
                        <i class="fa-solid fa-star stars" style="color: #17330c;"></i>
                        <i class="fa-solid fa-star stars" style="color: #17330c;"></i>
                        <i class="fa-solid fa-star stars" style="color: #17330c;"></i>
                        <i class="fa-solid fa-star stars" style="color: #17330c;"></i>
                        <i class="fa-regular fa-star stars" style="color: #17330c;"></i>
                    </span>
                    <p>4.3 en Google | +1.000 reseñas</p>
                </div>
            </div>
            <div class="h__pad-derecho">
                <picture class="h__pad-derecho__img--picture">
                    <img class="h__pad-derecho__img" src="/img/header/Visual2.avif" alt="Header-VisualPC" width="100%" height="100%">
                </picture>
            </div>
        </div>
    </div>

    <div class="swiper-container">
        <div class="h__contenedor flex-row margin7rem" id="miCarrusel">
            <div class="swiper-wrapper">
                <div class="h__contenedor__card swiper-slide">
                    <div class="h__contenedor__card--img">
                        <img loading="lazy" src="/img/header/Card1.avif" alt="Card img" alt="Card-img" width="100%" height="100%">
                    </div>
                    <div class="h__contenedor__card--tittle fontsize-28px ">
                        <p>Elige los platos que quieras</p>
                    </div>
                    <div class="h__contenedor__card--txt fontsize-16px ">
                        <p>Cada semana disfrutarás de un menú fresco y diverso con una amplia gama de opciones para que elijas tus favoritos.</p>
                    </div>
                </div>

                <div class="h__contenedor__card swiper-slide">
                    <div class="h__contenedor__card--img">
                        <img loading="lazy" src="/img/header/Card2.avif" alt="Card img" alt="Card-img" width="100%" height="100%">
                    </div>
                    <div class="h__contenedor__card--tittle fontsize-28px">
                        <p>Nosotros cocinamos por ti</p>
                    </div>
                    <div class="h__contenedor__card--txt fontsize-16px">
                        <p>Delicias caseras con ingredientes naturales y productos locales de primera calidad.</p>
                    </div>
                </div>

                <div class="h__contenedor__card swiper-slide">
                    <div class="h__contenedor__card--img">
                        <img loading="lazy" src="/img/header/Card3.avif" alt="Card img" alt="Card-img" width="100%" height="100%">
                    </div>
                    <div class="h__contenedor__card--tittle  fontsize-28px">
                        <p>Disfruta de tu comida y gana tiempo</p>
                    </div>
                    <div class="h__contenedor__card--txt fontsize-16px">
                        <p>Te llevamos la experiencia de una auténtica taquiza directamente a tu puerta. ¡Solo reserva y disfruta!</p>
                    </div>
                </div>

                <div class="h__contenedor__card swiper-slide">
                    <div class="h__contenedor__card--img">
                        <img loading="lazy" src="/img/header/Card4.avif" alt="Card img" alt="Card-img" width="100%" height="100%">
                    </div>
                    <div class="h__contenedor__card--tittle fontsize-28px">
                        <p>No solo somos tacos, hay variedad.</p>
                    </div>
                    <div class="h__contenedor__card--txt fontsize-16px">
                        <p>Explora una variedad excepcional de platos deliciosos para todos los gustos en tus eventos, más allá de los tacos.</p>
                    </div>

                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>


    <style>
        .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #17330c;

            opacity: 1;
            background: #FFF;
            border: 1px solid #17330c;

        }

        .swiper-pagination-bullet-active {
            width: 20px;
            height: 20px;
            color: #17330c;
            background: #17330c;
            transition: all 0.5s;

        }

        .swiper-pagination {
            position: static;
        }

        .swiper-container {
            overflow: hidden;
        }

        .swiper-wrapper {
            box-sizing: inherit;
        }
    </style>

    <div class="h__contenedor flex-column margin-8rem">
        <div class="h__tittle ">
        Elige platos para tu evento.
        </div>
        <div class="h__subtittle fontsize-2rem ">
            <p>Próximamente: esta función estará disponible. ¡No te la pierdas!</p>
        </div>
    </div>
</div>

<div class="platos__main">
    <?php if (empty($categorias)) { ?>
        <p class="text-center">Platillos no encontrados :(</p>
    <?php } else { ?>
        <?php foreach ($categorias as $categoria) { ?>
            <?php
            $tienePlatillos = false;
            foreach ($platillos as $platillo) {
                if ($platillo->tipo_platillo == $categoria->nombre) {
                    $tienePlatillos = true;
                    break;
                }
            }
            if ($tienePlatillos) {
            ?>
                <h1 class="fontsize28px"><?php echo $categoria->nombre; ?></h1>
                <p><?php echo $categoria->descripcion; ?></p>
                <div class="platos__contenedor">
                    <?php foreach ($platillos as $platillo) {
                        if ($platillo->tipo_platillo == $categoria->nombre) { ?>
                            <div class="platos__card">
                                <div class="platos__card--cimg">
                                    <img class="platos__card--img" src="/img/platillos/<?php echo $platillo->imagen; ?>.avif" loading="lazy" alt="Platillo-img" width="100%" height="100%">
                                    <span class="platos__card--span"><?php echo $platillo->nombre; ?></span>
                                </div>

                                <div class="platos__card--txt">
                                    <h2 class="platos__card--tittle"><?php echo $platillo->nombre; ?></h2>
                                    <p><?php echo $platillo->descripcion; ?></p>
                                </div>

                                <div class="platos__card--foot">
                                    <p></p>
                                    <button class="platos__card--btn" aria-label="btn-add"><i class="fa-solid fa-circle-plus fa-2x"></i></button>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>
</div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php
$loadSwiperScript = true;
?>
