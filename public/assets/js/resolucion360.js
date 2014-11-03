if (screen.width >= 800) {
$(document).ready(function($){
$(".subir").hide(); //Esto hace que el div Inicialice Oculto
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 520) { //Esto hace que el Div aparezca de despues de haber bajado 520px con el scroll
                $('.subir').fadeIn(); //Aparece con un efecto Fade
                $('.nombreDelDiv').css("position","fixed");//Este div es cambia a posición Fija
    }
    else {
        $('.subir').fadeOut(); // Desaparece con un efecto Fade
                $('.nombreDelDiv').css("position","relative");  //Vuelve a posición relativa         
            }
        });
        $('.subir a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500); // Todo esto hace que se la pagina se desplace hasta el tope con una lentitud de 500 milisegundos
            return false;
           });
       });
   });
}
