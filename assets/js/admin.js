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
        $('.sub-legal-form').hide();
        $('.harga-form').hide();
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
        }else if (id == "edit-media2"){
            hide_all();
            $('#mediaProject').val('');
            $('.bungkus-mobile2').fadeIn();
            $('#idMedia').val(2);
            $('.mediaKe').html('2');
            $('.edit-mediaProject-form').fadeIn();
        }else if (id == "edit-media3"){
            hide_all();
            $('#mediaProject').val('');
            $('.bungkus-mobile2').fadeIn();
            $('#idMedia').val(3);
            $('.mediaKe').html('3');
            $('.edit-mediaProject-form').fadeIn();
        }else if (id == "edit-media4"){
            hide_all();
            $('#mediaProject').val('');
            $('.bungkus-mobile2').fadeIn();
            $('#idMedia').val(4);
            $('.mediaKe').html('4');
            $('.edit-mediaProject-form').fadeIn();
        }else if (id == "edit-media5"){
            hide_all();
            $('#mediaProject').val('');
            $('.bungkus-mobile2').fadeIn();
            $('#idMedia').val(5);
            $('.mediaKe').html('5');
            $('.edit-mediaProject-form').fadeIn();
        }else if (id == "edit-media6"){
            hide_all();
            $('#mediaProject').val('');
            $('.bungkus-mobile2').fadeIn();
            $('#idMedia').val(6);
            $('.mediaKe').html('6');
            $('.edit-mediaProject-form').fadeIn();
        }else if (id == "edit-media7"){
            hide_all();
            $('#mediaProject').val('');
            $('.bungkus-mobile2').fadeIn();
            $('#idMedia').val(7);
            $('.mediaKe').html('7');
            $('.edit-mediaProject-form').fadeIn();
        }else if (id == "edit-media8"){
            hide_all();
            $('#mediaProject').val('');
            $('.bungkus-mobile2').fadeIn();
            $('#idMedia').val(8);
            $('.mediaKe').html('8');
            $('.edit-mediaProject-form').fadeIn();
        }else if (id == "edit-subLegal"){
            hide_all();
            $('.bungkus-mobile2').fadeIn();
            $('.sub-legal-form').fadeIn();
            var isi = $('.subLegal-asli').html();
            $('.isi-subLegal').val(isi);
        }else if (id == "edit-harga"){
            hide_all();
            $('.bungkus-mobile2').fadeIn();
            $('.harga-form').fadeIn();
            var isi = $('#harga').val();
            $('#perMeter').val(isi);
            $('.hargaRp').html("Rp. " + rp(isi) + ",-");
        }
    });

    function rp(num){
        var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
        if(str.indexOf(".") > 0) {
          parts = str.split(".");
          str = parts[0];
        }
        str = str.split("").reverse();
        for(var j = 0, len = str.length; j < len; j++) {
          if(str[j] != ",") {
            output.push(str[j]);
            if(i%3 == 0 && j < (len - 1)) {
              output.push(",");
            }
            i++;
          }
        }
        formatted = output.reverse().join("");
        return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
      };

    $('#isi-sub-judul').on('input propertychange paste', function(e){
        $('.afterSubJudul h2').html(this.value);
    });

    $('#isi-header').on('input propertychange paste', function(e){
        $('.afterHeader').html(this.value);
    });

    $('#isi-project').on('input propertychange paste', function(e){
        $('.afterSubProject').html(this.value);
    });

    $('#isi-subLegal').on('input propertychange paste', function(e){
        $('.afterSubLegal').html(this.value);
    });

    $('#perMeter').on('input propertychange paste', function(e){
        $('.hargaRp').html("Rp. " + rp(this.value) + ",-");
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
                
                var validExtensions = ['JPG','jpg','gif','GIF','png','PNG','jpeg','JPEG']; //array of valid extensions
                var fileName = file.name;
                var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
                if ($.inArray(fileNameExt, validExtensions) == -1){
                    $('.foto2').replaceWith('<video class="foto2" id="v2" controls><video/>');
                    $("#v2").attr("src", reader.result);
                }else{
                    // $('.foto').empty();
                    $('.foto2').replaceWith('<img class="foto2" id="v2">');
                    $("#v2").attr("src", reader.result);
                }

            }
            reader.readAsDataURL(file);
        }else if (idh == 3){
            var reader = new FileReader();
        
            reader.onload = function(){
                
                var validExtensions = ['JPG','jpg','gif','GIF','png','PNG','jpeg','JPEG']; //array of valid extensions
                var fileName = file.name;
                var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
                if ($.inArray(fileNameExt, validExtensions) == -1){
                    $('.foto3').replaceWith('<video class="foto3" id="v3" controls><video/>');
                    $("#v3").attr("src", reader.result);
                }else{
                    // $('.foto').empty();
                    $('.foto3').replaceWith('<img class="foto3" id="v3">');
                    $("#v3").attr("src", reader.result);
                }

            }
            reader.readAsDataURL(file);
        }else if (idh == 4){
            var reader = new FileReader();
        
            reader.onload = function(){
                
                var validExtensions = ['JPG','jpg','gif','GIF','png','PNG','jpeg','JPEG']; //array of valid extensions
                var fileName = file.name;
                var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
                if ($.inArray(fileNameExt, validExtensions) == -1){
                    $('.foto4').replaceWith('<video class="foto4" id="v4" controls><video/>');
                    $("#v4").attr("src", reader.result);
                }else{
                    // $('.foto').empty();
                    $('.foto4').replaceWith('<img class="foto4" id="v4">');
                    $("#v4").attr("src", reader.result);
                }

            }
            reader.readAsDataURL(file);
        }else if (idh == 5){
            var reader = new FileReader();
        
            reader.onload = function(){
                
                var validExtensions = ['JPG','jpg','gif','GIF','png','PNG','jpeg','JPEG']; //array of valid extensions
                var fileName = file.name;
                var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
                if ($.inArray(fileNameExt, validExtensions) == -1){
                    $('.foto5').replaceWith('<video class="foto5" id="v5" controls><video/>');
                    $("#v5").attr("src", reader.result);
                }else{
                    // $('.foto').empty();
                    $('.foto5').replaceWith('<img class="foto5" id="v5">');
                    $("#v6").attr("src", reader.result);
                }

            }
            reader.readAsDataURL(file);
        }else if (idh == 7){
            var reader = new FileReader();
        
            reader.onload = function(){
                
                var validExtensions = ['JPG','jpg','gif','GIF','png','PNG','jpeg','JPEG']; //array of valid extensions
                var fileName = file.name;
                var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
                if ($.inArray(fileNameExt, validExtensions) == -1){
                    $('.foto7').replaceWith('<video class="foto7" id="v7" controls><video/>');
                    $("#v7").attr("src", reader.result);
                }else{
                    // $('.foto').empty();
                    $('.foto7').replaceWith('<img class="foto7" id="v7">');
                    $("#v7").attr("src", reader.result);
                }

            }
            reader.readAsDataURL(file);
        }else if (idh == 8){
            var reader = new FileReader();
        
            reader.onload = function(){
                
                var validExtensions = ['JPG','jpg','gif','GIF','png','PNG','jpeg','JPEG']; //array of valid extensions
                var fileName = file.name;
                var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
                if ($.inArray(fileNameExt, validExtensions) == -1){
                    $('.foto8').replaceWith('<video class="foto8" id="v8" controls><video/>');
                    $("#v8").attr("src", reader.result);
                }else{
                    // $('.foto').empty();
                    $('.foto8').replaceWith('<img class="foto8" id="v8">');
                    $("#v8").attr("src", reader.result);
                }

            }
            reader.readAsDataURL(file);
        }
    }
}