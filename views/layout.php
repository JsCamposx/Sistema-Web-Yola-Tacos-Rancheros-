<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yola - <?php echo $titulo; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--  smooth-scroll -->
    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1" defer></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" defer></script>

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
</body>

</html>