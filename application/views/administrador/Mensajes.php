<main>
    <table class="centered">
        <thead>
            <tr>
                
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>TIPO CONTACTO</th>
                <th>DESCRIPCIÓN</th>
                <th>FECHA DE ENVIO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($mensajes as $mensaje) { ?>
                <tr>
                   
                    <td><?php echo $mensaje['nombre'] ?></td>
                    <td><?php echo $mensaje['correo'] ?></td>
                    <td><?php echo $mensaje['tipo_mensaje'] ?></td>
                    <td><?php echo $mensaje['descripcion'] ?></td>
                    <td><?php echo $mensaje['fecha_recibido'] ?></td>
                    <td class="row">
                        <div class="col s12">
                            <form action="/Administrador/EliminarMensaje" method="POST">
                                <input type="hidden" value="<?php echo $mensaje['id_mensaje'] ?>" name="id_mensaje">
                                <button class="btn red" type="submit">eliminar</button>
                            </form>
                        </div>
                        <div class="col s12" style="margin-top:15px">
                            <a style="width:100%" href="<?php echo base_url()?>Administrador/Mensaje/<?echo $mensaje['id_mensaje']?>" class="btn blue">VER MENSAJE</a>
                        </div>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>