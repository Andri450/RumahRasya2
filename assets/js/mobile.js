$(document).ready(function(){
    
    tampil();
    sembunyiin();

    $('#tombol-menu').click(function() {
        tampil();
    });

    $('#menu-bar').click(function() {
        sembunyiin();
    });     

    function tampil(){
        $( '#menu-bar' ).addClass('show-menu');
        $( '#menu-bar' ).removeClass('hide-menu');
        $( '#menu-bar' ).fadeIn();
    }

    function sembunyiin(){
        $( '#menu-bar' ).addClass('hide-menu');
        $( '#menu-bar' ).removeClass('show-menu');
        $( '#menu-bar' ).fadeOut();
    }
});