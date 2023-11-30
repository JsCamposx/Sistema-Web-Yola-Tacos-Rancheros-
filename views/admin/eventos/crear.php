<h2 class="dashboard__head"><?php echo $titulo; ?></h2>



<div class="dashboard__contenedor--boton">
    <a class="dashboard__boton" href="/admin/eventos">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

     

<div class="dashboard__formulario">

<?php 
include_once __DIR__ . '/../../templates/alertas.php'; 
?>

    <form method="POST" action="/admin/eventos/crear" enctype="multipart/form-data" class="formulario formulario--eventos">
        <?php include_once __DIR__ . '/formulario.php'; ?>
      
        <input class="formulario__submit--registrar enviar-formulario" type="submit" value="Registrar Evento">

    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</div>