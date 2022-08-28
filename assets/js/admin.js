$(document).ready(function(){

    var arah_mouse = 'lain';

    $(document).mousemove(function(){
        if($(".bungkus-mobile:hover").length != 0){
            arah_mouse = 'before';
        } else if($(".bungkus-mobile2:hover").length != 0){
            arah_mouse = 'after';
        } else{
            arah_mouse = 'lain';
        }
    });

    $('.bungkus-mobile').on('resize scroll', function() {
        if(arah_mouse == 'before'){
            var posisi = $(this).scrollTop();
            $('.bungkus-mobile2').scrollTop(posisi);
        }     
    });

    $('.bungkus-mobile2').on('resize scroll', function() {
        if(arah_mouse == 'after'){
            var posisi = $(this).scrollTop();
            $('.bungkus-mobile').scrollTop(posisi);
        }
    });

    $('#carouselExampleIndicators2').carousel({
        interval: false,
    });

    $('#carouselExampleIndicators').on('slide.bs.carousel', function (e) {
        if(e.direction == 'left' && e.from == '2'){
            $('#carouselExampleIndicators2').carousel('next');
        }else if(e.direction == 'right' && e.from == '0'){
            $('#carouselExampleIndicators2').carousel('prev');
        } else {
            $('#carouselExampleIndicators2').carousel(e.to);
        }
    });

});