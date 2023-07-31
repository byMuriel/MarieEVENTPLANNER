<?php include '../templates/cabecera.php'; ?>

<div class="contenedor row">
    <div class="col-4"></div>
    <div class="col-4 formTarjeta">
        <form name="formulario" method="POST" action="../enviar_correo.php" onsubmit="return validarFormulario();">
            <div class="mb-3">
            <label for="nombre" class="labelFormulario form-label">Nombre</label>
            <input type="text" required
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese nombre" onblur="validarNombre();">
                <small id="nombreError" class="helpTxt ocultar">Ingrese su nombre</small>
            </div>

            <div class="mb-3">
              <label for="correo" class="labelFormulario form-label">Email</label>
              <input type="email" required class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="abc@mail.com" onblur="validarCorreo();">
              <small id="correoError" class="helpTxt ocultar">Ingrese un correo válido</small>
            </div>

            <div class="mb-3">
              <label for="tlf" class="labelFormulario form-label">Telefono</label>
              <input type="text" required
                class="form-control" name="tlf" id="tlf" aria-describedby="helpId" placeholder="Ingrese numero de telefono" onblur="validarTlf();">
                <small id="tlfError" class="helpTxt ocultar">Ingrese un numero de telefono válido</small>
            </div>

            <div class="mb-3">
              <label for="info"  class="labelFormulario form-label">Solicite mas Informacion</label>
              <textarea class="form-control helpTxt" name="info" id="info" rows="8"></textarea>
            </div>

            <a class="linksPie" href="../docs/politica.pdf">Leer Politica de Privacidad</a><br />

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="" required checked>
                Acepto la Politica de Privacidad
              </label>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-success" onClick="validar(thisform);">ENVIAR</button>
                <button type="reset" class="btn btn-outline-secondary">BORRAR</button>
            </div>
        </form>
    </div>
</div>

<?php include '../templates/pie.php'; ?>