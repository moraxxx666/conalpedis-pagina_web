<div class="row ">

    <main class="col m10 s12 ">
        <div class="row">
            <div class="col s12 cuad z-depth-5 animated bounceInDown ">
                <h4 class="center-align">FORMULARIO DE CONTACTO</h4>
                <form action="/Administrador/AgregarMensaje" class="row" method="POST">
                    <div class="input-field col s12">
                        <input id="nombre" type="text" name="nombre">
                        <label for="nombre">Nombre y Apellido</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="correo">
                        <label for="email">Correo Electrónico</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="last_name" type="text" name="descripcion">
                        <label for="last_name">Breve Descripción</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="tipo_mensaje">
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Denuncia">Denuncia</option>
                            <option value="Consulta">Consulta</option>

                        </select>
                        <label>Seleccionar tipo de Consulta</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea name="mensaje" id="" cols="100" rows="10000" style="height:250px"></textarea>
                        <label>Escriba su Consulta/Denuncia</label>
                    </div>
                    <div class="input-field col s12">
                        <button type="submit" style="width:100%" class="btn blue">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </main>