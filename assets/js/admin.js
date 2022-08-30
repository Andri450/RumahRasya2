$(document).ready(function(){

    var arah_mouse = 'lain';
    var posisi_slider = 0;

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

    $('#carouselExampleIndicators').carousel({
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
        posisi_slider = e.to;
    });

    function hide_all(){
        $('.sub-Judul-form').hide();
        $('.edit-logo-form').hide();
    }

    $('.edit').click(function(){
        var id = this.id;
    
        if(id == "edit-subJudul"){
            hide_all();
            var isi = $('.subJudul h2').html();
            $('.bungkus-mobile2').fadeIn();
            $('.sub-Judul-form').fadeIn();
            $('.isi-sub-judul').text(isi);
        }else if (id == "edit-logo"){
            hide_all();
            $('.bungkus-mobile2').fadeIn();
            $('.edit-logo-form').fadeIn();
        }
    });

    $('#isi-sub-judul').on('input propertychange paste', function(e){
        $('.afterSubJudul h2').html(this.value);
        console.log(this.value);
    });

});

function previewFile(input){
    var file = $("input[type=file]").get(0).files[0];

    if(file){
        var reader = new FileReader();

        reader.onload = function(){
            $("#preview-logo").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
    }
}