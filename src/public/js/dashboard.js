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