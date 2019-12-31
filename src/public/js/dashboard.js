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

$("#agregarpagina").click(function(){
    
});

function addpaginaweb(){
    console.log("ingresa")
    let titulopagina = document.getElementById("titulopagina");
    let textopagina = document.getElementById("textopagina");
    let mensaje = document.getElementById("mensaje");
    // console.log("ingreso")
    $.ajax({
        url:"/addpaginaweb",
        method:"POST",
        data:{titulo:titulopagina.value,texto:textopagina.value},
        success:function(event){
            mensaje.textContent = event;
        }
    });
}

