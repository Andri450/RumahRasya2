$(document).ready(function(){

    var visTombolMenu = true;
    
    tampil();
    sembunyiin();

    $('#tombol-menu').click(function() {
        tampil();
    });

    $('#tombol-menu2').click(function() {
        tampil();
    });

    $('.close-menu').click(function() {
        sembunyiin();
    });     

    function tampil(){
        $('#tombol-menu').hide();
        $('#tombol-menu2').hide();
        $( '#menu-bar' ).addClass('show-menu');
        $( '#menu-bar' ).removeClass('hide-menu');
        $( '#menu-bar' ).fadeIn();
        $('.list-menu').delay(800).fadeIn();
    }

    function sembunyiin(){
        $('.list-menu').hide();
        $( '#menu-bar' ).addClass('hide-menu');
        $( '#menu-bar' ).removeClass('show-menu');
        $( '#menu-bar' ).fadeOut();
        
        if( visTombolMenu ){
            $('#tombol-menu').show();
        }else{
            $('#tombol-menu2').show();
        }
    }

    $('#home').click(function(e) {
        e.preventDefault();
        resetAktif();
        $(this).addClass('aktif');
        $('html, body').animate({
            scrollTop: $("#menu-home").offset().top
        }, 1000);
    });

    $('#project').click(function(e) {
        e.preventDefault();
        resetAktif();
        $(this).addClass('aktif');
        $('html, body').animate({
            scrollTop: $("#menu-project").offset().top
        }, 1000);
    });

    $('#legal').click(function(e) {
        e.preventDefault();
        resetAktif();
        $(this).addClass('aktif');
    });

    $('#kontak').click(function(e) {
        e.preventDefault();
        resetAktif();
        $(this).addClass('aktif');
    });

    function resetAktif(){
        $('#home').removeClass('aktif');
        $('#project').removeClass('aktif');
        $('#legal').removeClass('aktif');
        $('#kontak').removeClass('aktif');
    }

    // $("#carouselExampleIndicators").click( function() {
    //     this.requestFullscreen();
    // });

    $.fn.isInViewport = function() {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
      
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
      
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    $(window).on('resize scroll', function() {
        $('#tombol-menu').each(function(){
            if($(this).isInViewport()){
                visTombolMenu = true;
                $('#tombol-menu2').hide();
                sembunyiin();
            }else{
                visTombolMenu = false;
                $('#tombol-menu2').show();
                sembunyiin();
            }
        });
    });

});