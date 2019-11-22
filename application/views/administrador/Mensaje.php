<main class="container">
    <h4 class="center-align">
        <?php echo  strtoupper($mensaje['descripcion']) ?> (<?php echo $mensaje['tipo_mensaje']?>)

    </h4>
    <p>Nombre: <?php echo $mensaje['nombre'] ?></p>
    <p>Correo Electrónico: <?php echo $mensaje['correo']?></p>
    <p>Fecha: <?php echo $mensaje['fecha_recibido']?></p>
    <p>Mensaje:</p>
    <pre><?php echo $mensaje['mensaje']?></pre>
</main>