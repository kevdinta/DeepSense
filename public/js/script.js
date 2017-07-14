/**
 * Created by DINTANAVONG on 02/07/2017.
 */
$('.container').hide();
$('.footer').hide();

$(function () {
    if($('.flexslider').length > 0) {
        $(window).on('load', function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            })
            $('.flexslider').ready(function(){
                $('#home').delay(1000).fadeIn(300);
            })
        });
    }
})
$(document).ready(function(){
    $(".load").delay(600).fadeOut(300);
    $(".footer").delay(1000).fadeIn(300);
    $(".container").delay(1000).fadeIn(300);
});

