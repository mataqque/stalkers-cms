$(function(){

    var Accordeon = function(el,multiple){
        this.el = el || {};
        this.multiple = multiple || false;

        var links = this.el.find(".links");
        links.on("click",{el:this.el,multiple:this.multiple},this.dropdown);
    }
    Accordeon.prototype.dropdown = function(e){
        var $el = e.data.el;
            $this = $(this),
            $next = $this.next();
            console.log($next)
        $next.slideToggle();
        $this.parent().toggleClass('open');
        if(!e.data.multiple){
            $el.find(".sublist_wrapper_main").not($next).slideUp().parent().removeClass("open")
        }
    }
    var acordeon = new Accordeon($(".wrapper_contain"),false)
});

$("#pagina").click(function(){
    let contenedor = document.getElementsByClassName("contenedor_admin_page")[0];
    console.log("ingreso")
    $.ajax({
        url:"/dashboardpagina",
        method:"GET",
        success:function(event){
            contenedor.innerHTML = event;
        }
    })
});

function addpaginaweb(){
    let titulopagina = document.getElementById("titulopagina");
    let textopagina = document.getElementById("textopagina");
    let mensaje = document.getElementById("mensaje");
    $.ajax({
        url:"/addpaginaweb",
        method:"POST",
        data:{titulo:titulopagina.value,texto:textopagina.value},
        success:function(event){
            mensaje.textContent = event;
            init_page();
            document.getElementsByClassName("contenido_html")[0].addEventListener("keydown",function(event){
                let cantidad = contenedor[0].innerHTML.indexOf("<p>");
                let etiquetap = contenedor[0].innerHTML.substr(cantidad,3);
                if(etiquetap !== "<p>"){
                let elemento = document.createElement("p");
                elemento.textContent = "﻿";
                document.getElementsByClassName("contenido_html")[0].appendChild(elemento)
            }
        });
        }
    });
}

// $("#pagina").click(function(){
//     let contenedor = document.getElementsByClassName("contenedor_admin_page")[0];
//     console.log("ingreso")
//     $.ajax({
//         url:"/tablero",
//         method:"GET",
//         success:function(event){
//             contenedor.innerHTML = event;
//         }
//     })
// });

function init_page(){
    var mostrar = document.getElementsByClassName("mostrarselect");
    var valorf = false;
    var contenedor = document.getElementsByClassName("contenido_html");
    var contenedorhtml = document.getElementById("textbox");
    var palabra = "";
    var cont = 0;
    var valor = true;
}

    class llamada{
        constructor(valores,contenElement,type){
            this.valorf = true;
            this.valores = valores;
            this.contenElement = contenElement;
            this.type = type;
            this.mostrar();
        }
        mostrar(){
            if(this.valorf == true && !this.contenElement.children[1].children[0]){
                for(let i=0;i<this.valores.length;i++){
                let elemento = document.createElement("button");
                elemento.textContent = this.valores[i];
                elemento.className = "valor"+i;
                elemento.setAttribute("onclick",`enviarthis("${this.type}",this)`);
                this.contenElement.children[1].appendChild(elemento);
                }
                this.valorf = false;
            }
            else{
            if(this.contenElement.children[1].style.display=="block"){
                this.contenElement.children[1].style="display:none";
            }else if(this.contenElement.children[1].style.display=="none"){
                this.contenElement.children[1].style="display:block";
                }
            }
        }
    }

    function enviarthis(type,value){
            	if(type=="undefined"){
                    document.execCommand(value.textContent,false); $("#textbox").focus();
                }else{
                    document.execCommand(type, false, value.textContent); $("#textbox").focus();
                }
    }

    function insertar_enlace(){
        document.getElementById("texto_enlace").value;
        formatDoc("createlink",document.getElementById("texto_enlace").value)
    }

    
// prueba para cargar imagen en el contenedor   
    $("#probando").click(function(){
        formatDoc("insertimage","https://www.tekcrispy.com/wp-content/uploads/2019/09/cube-1963036_960_720.jpg")
    });
function formatDoc(sCmd, sValue) {
        console.log(sValue)
        console.log(sCmd)
        document.execCommand(sCmd, false, sValue); $("#textbox").focus();
    }
    function open_galery(){
        
    }
