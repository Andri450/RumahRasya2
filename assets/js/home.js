$(document).ready(function(){
    $('.navbar-toggler').click(function() {
        if($( '#CsAtas' ).is(":visible")){
            $( '#CsAtas' ).hide();
       } else{
            $( '#CsAtas' ).delay(800).fadeIn();
       }
    });
});