/**
 * Created by DINTANAVONG on 02/07/2017.
 */
$('.container').hide();
$('.footer').hide();

$(window).on('load', function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    })
    $('.flexslider').ready(function(){
        $('#home').show();

    })
    $('.footer').show();
    $(document).ready(function () {
        $('.load').hide();
    })
});

