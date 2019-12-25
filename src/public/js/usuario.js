$("#logout").click(function(){
    $.ajax({
        url:"/close",
        method:"GET",
        success:function(valor){
            location.href = "http://localhost:3000/profile";
            // console.log(valor)
        }
    });
})