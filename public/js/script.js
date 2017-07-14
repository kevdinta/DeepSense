/**
 * Created by DINTANAVONG on 02/07/2017.
 */
$('.container').hide();
$('.container-fluid').hide();
$('.footer').hide();


$(document).ready(function(){
    $(".load").delay(400).fadeOut(300);

    $(window).on('load', function() {
        $('.flexslider').flexslider({
            animation: "slide"
        })
        $('.flexslider').ready(function(){
            $('#home').delay(900).fadeIn(300);
        })
    });

    $(".footer").delay(1200).fadeIn(300);
    $(".container").delay(1200).fadeIn(300);
    $(".container-fluid").delay(1200).fadeIn(300);
});

