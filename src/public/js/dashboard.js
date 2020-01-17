$(document).ready(function(){
    $("#login").click(function(){
         $("#mymodal").modal("show");
    })
});
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

function addpaginaweb(){
    let titulopagina = document.getElementById("titulo_pagina");
    let textopagina = document.getElementsByClassName("jodit_wysiwyg")[0];
    let index = document.getElementById("autopista").checked;
    let categoria = document.getElementById("categoria").value
    let resumen = document.querySelectorAll(".jodit_wysiwyg>blockquote")[0].textContent.substr(0,80);
    let imagen = document.querySelectorAll(".jodit_wysiwyg>* img")[0].src;
    console.log(!index)
    $.ajax({
        url:"/addpaginaweb",
        method:"POST",
        data:{
            titulo:titulopagina.value,
            texto:textopagina.innerHTML,
            url:palabra,
            resumen:resumen,
            categoria:categoria,
            index: !index,
            imagen:imagen
        },
        success:function(event){
            alert(event);
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
