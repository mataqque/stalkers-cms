// firebase.initializeApp(firebaseConfig);
//
let usuario = document.getElementById("usuario_login");
let clave = document.getElementById("password_login")
var animation;
document.getElementsByClassName("button_session")[1].addEventListener("click",(event)=>{
    event.preventDefault();
    let objeto = {usuario:usuario.value,clave:clave.value}
    $.post({
        url: '/contactos',
        data:objeto,
        beforeSend: function () {
           animation = setInterval(animacionSend,300);
        },
        success: function(respuesta) {
            clearInterval(animation);
            if(respuesta == "profile"){
                location.href="http://localhost:3000/profile";
            }else{
                document.getElementById("error_al_ingresar").textContent = respuesta;
            }

        }
    });
})
var cont = 0;
var point = ".";
let session = document.getElementsByClassName("button_session")[1].textContent;
let cambiar = document.getElementsByClassName("button_session")[1];
function animacionSend(){
    if(cont<3){
        cambiar.textContent = session + point;
        point = point+point;
        cont++;
        console.log(cont)
    }else{
        point=".";
        cambiar.textContent = session + point;
        cont = 0;
    }
    console.log("hola mundo")
}