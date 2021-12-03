//Acceder al formulario por su id
const form=document.getElementById('frm-usuario');
const campos=document.querySelectorAll('#frm-usuario input');
//console.long (campos);

//Objeto 
const reglas = {
	textos: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, letras tildadas, diéresis, entre 1 y 40 caracteres.
	password: /^(?=.\d)(?=.[!@#$%^&])(?=.[a-z])(?=.*[A-Z]).{8,}$/, 
	//pasword mínimo de 8 caracteres, con al menos un símbolo, letras mayúsculas y minúsculas y un número
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	numeros: /^\d{7,10}$/ // solo números de 7 a 10 caracteres.
}

const inputs={
    numdoc:false,
    nombre:false,
    apellido:false,
    correo:false,
    password:false
}

const validarInput=(regla,input,grupo)=>{
    if(regla.test(input.value)){
        document.getElementById(`g-${grupo}`).classList.remove('error');
        document.getElementById(`g-${grupo}`).classList.add('success');
        document.querySelector(`#g-${grupo} i`).classList.add('fa-check-circle');
        document.querySelector(`#g-${grupo} i`).classList.remove('fa-exclamation-circle');
        document.querySelector(`#g-${grupo} .msn-error`).classList.remove('msn-error-visible');
        inputs[grupo]=true;
    }
    else{
        document.getElementById(`g-${grupo}`).classList.add('error');
        document.querySelector(`#g-${grupo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#g-${grupo} i`).classList.add('fa-exclamation-circle');
        document.querySelector(`#g-${grupo} .msn-error`).classList.add('msn-error-visible');
        inputs[grupo]=false;
    }
}

const validarPassword=()=>{
    const pass1=document.getElementById('password');
    const pass2=document.getElementById('password2');
    if(pass1.value===pass2.value){
        document.getElementById(`g-password2`).classList.remove('error');
        document.getElementById(`g-password2`).classList.add('success');
        document.querySelector(`#g-password2 i`).classList.add('fa-check-circle');
        document.querySelector(`#g-password2 i`).classList.remove('fa-exclamation-circle');
        document.querySelector(`#g-password2 .msn-error`).classList.remove('msn-error-visible');
        inputs['password']=true;
    }
    else{
        document.getElementById(`g-password2`).classList.add('error');
        document.querySelector(`#g-password2 i`).classList.remove('fa-check-circle');
        document.querySelector(`#g-password2 i`).classList.add('fa-exclamation-circle');
        document.querySelector(`#g-password2 .msn-error`).classList.add('msn-error-visible');
        inputs['password']=false;
    }
}

const validarCampos=(e)=>{
    //console.log("Se genero un evento sobre un campo");
console.log(e.target.name);

        switch(e.target.name){
            case "numdoc":
                   validarInput(reglas.numeros,e.target,e.target.name);
            break;

            case "nombre":
                validarInput(reglas.textos,e.target,e.target.name);
        break;
        case "apellido":
                   validarInput(reglas.textos,e.target,e.target.name);
            break;
        case "correo":
            validarInput(reglas.correo,e.target,e.target.name);
    break;

    case "password":
        validarInput(reglas.password,e.target,e.target.name);
break;
case "password":
    validarPassword();
break;
        }

}

//Eventos keyup y blur
campos.forEach((campo)=>{
	campo.addEventListener('keyup',validarCampos);
	campo.addEventListener('blur',validarCampos);

})

//Evento submit

form.addEventListener('submit',e=>{
    e.preventDefault();//Evitar que el formulario haga el submit
    const condiciones=document.getElementById('terminos');
    if(inputs.numdoc && inputs.apellido && inputs.correo && password && condiciones.checked){
        alert("El usuario ha sido registrado exitosamente");
        form.reset();
        document.querySelectorAll('.success').forEach((icono)=>{
            icono.classList.remove('succes');
        });
    }
    else{
        document.getElementById('form-error').classList.add('frm-error-visible')
    }
})
