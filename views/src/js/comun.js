function preguntarmenu(){
    var z = $("#navbar-collapse-grid");
    if(!z.hasClass("in")){        
        var w = $("#menuMovil");
        setTimeout(() => {
            var elmnt = document.getElementById("menuMovil");
            var y = elmnt.scrollHeight;            
            $("header").css("marginBottom", y+"px");
        }, 100);
    }else{
        setTimeout(() => {
            var elmnt = document.getElementById("menuMovil");
            var y = elmnt.scrollHeight;
            $("header").css("marginBottom", "0px");
        }, 100);
    }
}

$( window ).resize(function() {
    var bw = $(this).width();
    if(bw>=768){
        $("header").css("marginBottom", "0px");
    }else{
        var z = $("#navbar-collapse-grid").removeClass("in");
    }
});