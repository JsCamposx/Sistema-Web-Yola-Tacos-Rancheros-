<h2 class="dashboard__head"><?php echo $titulo; ?></h2>



<div class="dashboard__contenedor--boton">
    <a class="dashboard__boton" href="/admin/platillos">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

     

<div class="dashboard__formulario">

<?php 
include_once __DIR__ . '/../../templates/alertas.php'; 
?>

    <form method="POST" action="/admin/platillos/crear" enctype="multipart/form-data" class="formulario">
        <?php include_once __DIR__ . '/formulario.php'; ?>
     
        <input class="formulario__submit--registrar " type="submit" value="Registrar Platillo">


      
    </form>
</div>