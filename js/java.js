let clickDescripcion = 0;
const btnAmpliarList = document.querySelectorAll('.btnAmpliar');

btnAmpliarList.forEach(btnAmpliar => {
    btnAmpliar.addEventListener('click', () => {
        const descripcionBoda = btnAmpliar.parentNode.querySelector('.descripcionBoda');
        console.log(clickDescripcion % 2);
        if (clickDescripcion % 2 == 0) {
            descripcionBoda.classList.toggle('ocultar');
            descripcionBoda.classList.toggle('ver');
            btnAmpliar.textContent = "Mostrar menos";
            clickDescripcion++;
        } else if (clickDescripcion % 2 != 0) {
            descripcionBoda.classList.toggle('ver');
            descripcionBoda.classList.toggle('ocultar');
            btnAmpliar.textContent = "Ver";
            clickDescripcion++;
        }
    });
});

function esCorreoValido(correo) {
    var regexCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return regexCorreo.test(correo);
};

function esNumeroValido(tlf) {
    // Validar que el número de teléfono contenga solo dígitos
    var regexNumero = /^\d+$/;
    return regexNumero.test(tlf);
};

function validarNombre() {
    var nombre = document.forms["formulario"]["nombre"].value;
    var nombreError = document.getElementById('nombreError');
    if (nombre.trim() === '') {
        //aqui mostramos
        nombreError.classList.remove('ocultar');
        nombreError.classList.add('mostrar');
        return false;
    } else {
        //aqui ocultamos
        nombreError.classList.add('ocultar');
        nombreError.classList.remove('mostrar');
        return true;
    }
};

function validarCorreo() {
    var correo = document.forms["formulario"]["correo"].value;
    var correoError = document.getElementById('correoError');
    if (correo.trim() === '' || !esCorreoValido(correo)) {
        //aqui mostramos
        correoError.classList.remove('ocultar');
        correoError.classList.add('mostrar');
        return false;
    } else {
        //aqui ocultamos
        correoError.classList.add('ocultar');
        correoError.classList.remove('mostrar');
        return true;
    }
}

function validarTlf() {
    var tlf = document.forms["formulario"]["tlf"].value;
    var tlfError = document.getElementById('tlfError');
    if (tlf.trim() === '' || !esNumeroValido(tlf)) {
        tlfError.classList.remove('ocultar');
        tlfError.classList.add('mostrar');
        return false;
    } else {
        tlfError.classList.add('ocultar');
        tlfError.classList.remove('mostrar');
        return true;
    }
}

function validarFormulario() {
    nombreValido = validarNombre();
    correoValido = validarCorreo();
    tlfValido = validarTlf();

    if (nombreValido == true && correoValido == true && tlfValido == true) {
        // Si todos los campos son válidos, el formulario se envía
        return true;
    } else {
        return false;
    }
};