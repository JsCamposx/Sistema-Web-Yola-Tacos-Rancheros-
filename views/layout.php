<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yola - <?php echo $titulo; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="description" content="Transforma tus eventos con nuestras taquizas. Ofrecemos servicios de catering auténticos y de calidad. Haz de tu evento un festín de sabores inolvidables. ¡Contáctanos para una experiencia única!">
</head>

<body>

    <?php


    if (!isset($excludeHeader) || !$excludeHeader) {
        echo '<header class="header" id="header">';
        if (!isset($excludeNavBar) || !$excludeNavBar) {
            include_once __DIR__ . '/templates/navbar.php';
        }
        if (!isset($excludeSubHeader) || !$excludeSubHeader) {
            include_once __DIR__ . '/templates/header.php';
        }


        echo '</header>';
        echo '<div id="authID"></div>';
    }
    echo $contenido;
    if (!isset($excludeFooter) || !$excludeFooter) {
        include_once __DIR__ . '/templates/footer.php';
    }
    ?>
    <script src="/build/js/main.min.js" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" ></script>
</body>

</html>