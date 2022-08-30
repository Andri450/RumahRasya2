$(document).ready(function(){

    var arah_mouse = 'lain';
    var posisi_slider = 0;
    var posisi_scroll = 0;

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
            posisi_scroll = posisi;
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

        var tmpH1 = $("#tmp-header1").attr("src");
        $("#img-header1").attr("src", tmpH1);
        
        var tmpH2 = $("#tmp-header2").attr("src");
        $("#img-header2").attr("src", tmpH2);
        
        var tmpH3 = $("#tmp-header3").attr("src");
        $("#img-header3").attr("src", tmpH3);

        $('#input-header').val('');

        posisi_slider = e.to;
        $('#idheading').val(e.to+1);
        $('.headingKe').html(e.to+1);
    });

    function hide_all(){
        $('.sub-Judul-form').hide();
        $('.edit-logo-form').hide();
        $('.edit-fotoHeader-form').hide();
        $('.isi-header-form').hide();
        $('.sub-project-form').hide();
        $('.edit-mediaProject-form').hide();
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
        }else if (id == "edit-carousel"){
            hide_all();
            $('.bungkus-mobile2').fadeIn();
            $('#idheading').val(posisi_slider+1);
            $('.headingKe').html(posisi_slider+1);
            $('.edit-fotoHeader-form').fadeIn();
        }else if (id == "edit-bawah-carousel"){
            hide_all();
            var isi = $('.isi-header-prev').html();
            $('.bungkus-mobile2').fadeIn();
            $('.isi-header-form').fadeIn();
            $('.isi-header').text(isi);
        }else if (id == "edit-subProject"){
            hide_all();
            var isi = $('.isi-sub-project').html();
            $('.bungkus-mobile2').fadeIn();
            $('.sub-project-form').fadeIn();
            $('.isi-project').text(isi);
        }else if (id == "edit-media1"){
            hide_all();
            $('#mediaProject').val('');
            $('.bungkus-mobile2').fadeIn();
            $('#idMedia').val(1);
            $('.mediaKe').html('1');
            $('.edit-mediaProject-form').fadeIn();
        }
    });

    $('#isi-sub-judul').on('input propertychange paste', function(e){
        $('.afterSubJudul h2').html(this.value);
    });

    $('#isi-header').on('input propertychange paste', function(e){
        $('.afterHeader').html(this.value);
    });

    $('#isi-project').on('input propertychange paste', function(e){
        $('.afterSubProject').html(this.value);
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

function previewHeading(input){
    var file = $(input).get(0).files[0];
    
    if(file){
        var idh = document.getElementById('idheading').value;
        
        if(idh == 1){
            var reader = new FileReader();
        
            reader.onload = function(){
                $("#img-header1").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }else if (idh == 2){
            var reader = new FileReader();
        
            reader.onload = function(){
                $("#img-header2").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }else if (idh == 3){
            var reader = new FileReader();
        
            reader.onload = function(){
                $("#img-header3").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
}

function previewMedia(input){
    var file = $(input).get(0).files[0];
    
    if(file){
        var idh = document.getElementById('idMedia').value;
        
        if(idh == 1){
            var reader = new FileReader();
        
            reader.onload = function(){
                // $("#img-header1").attr("src", reader.result);
                
                var validExtensions = ['JPG','jpg','gif','GIF','png','PNG','jpeg','JPEG']; //array of valid extensions
                var fileName = file.name;
                var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
                if ($.inArray(fileNameExt, validExtensions) == -1){
                    $('.foto1').replaceWith('<video class="foto1" id="v1" controls><video/>');
                    $("#v1").attr("src", reader.result);
                }else{
                    // $('.foto').empty();
                    $('.foto1').replaceWith('<img class="foto1" id="v1">');
                    $("#v1").attr("src", reader.result);
                }

            }
            reader.readAsDataURL(file);
        }else if (idh == 2){
            var reader = new FileReader();
        
            reader.onload = function(){
                $("#img-header2").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }else if (idh == 3){
            var reader = new FileReader();
        
            reader.onload = function(){
                $("#img-header3").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
}