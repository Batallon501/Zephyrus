/*Juan de la Cruz*/
function validar(){
    let isValid = false;

    const input = document.forms['validationForm']['letras'];

    const message = document.getElementById('message');

    input.willValidate = false;

    const maximo = 35;

    const pattern = new RegExp('^[A-Z]+$', 'i');

    if(!input.value){
        isValid = false;
    } else {

        if (input.value.length > maximo){
            isValid = false;
        } else {
            if(!pattern.test(input.value)){
                isValid = false;
            } else {
                isValid = true;
            }
        }
    }
    if (!isValid){
        input.style.borderColor = 'salmon';
        message.hidden = false;
    } else {
        input.style.borderColor = 'palegreen';
        message.hidden = true;
    }
    return isValid;
}

function verificar (){
    const valido = validar();
    if(!valido){
        alert('El campo no es válido');
    } else {
        alert('El campo es válido');
    }
}

const main_img = document.querySelector('.main_img')
const thumbnails = document.querySelectorAll('.thumbnail')


thumbnails.forEach(thumb => {
    thumb.addEventListener('click', function(){
        const active = document.querySelector('.active')
        active.classList.remove('active')
        this.classList.add('active')
        main_img.src = this.src
    })
})


/*Fin Juan de la Cruz*/
/*Pablo*/
function validateEmail(){
                
	// Get our input reference.
	var emailField = document.getElementById('email');
	
	// Define our regular expression.
	var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

	// Using test we can check if the text match the pattern
	if( validEmail.test(emailField.value) ){
		alert('Su email es valido :)');
		return true;
	}else{
		alert('Error al ingresar el email');
		return false;
	}
}

/*Pablo*/


/*JS de Alan inicio*/

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	telefono: /^\d{7,14}$/, // 7 a 10 numeros.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	comentarios: /^[a-zA-ZÀ-ÿ\s]{1,200}$/, // Letras y espacios, pueden llevar acentos.
}

const campos = {
	nombre: false,
	telefono: false,
	correo: false,
	comentarios: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "comentarios":
			validarCampo(expresiones.comentarios, e.target, 'comentarios');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(campos.nombre && campos.telefono && campos.correo && campos.comentarios && terminos.checked ){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});

/*JS de Alan fin*/

/*Reloj*/
function showTime() {
	let date = new Date();
	let hh = date.getHours();
	let mm = date.getMinutes();
	let ss = date.getSeconds();

	hh = (hh < 10) ? "0" + hh : hh;
	mm = (mm < 10) ? "0" + mm : mm;
	ss = (ss < 10) ? "0" + ss : ss;

	let time = hh + ":" + mm + ":" + ss;
	let watch = document.querySelector('#watch');
	watch.innerHTML = time;
}

setInterval(currentTime, 1000);
 