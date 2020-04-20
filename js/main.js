
$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            $('.img123').addClass('go-top');
            $('#back-top').fadeIn(500);
        } else {
            $('.img123').removeClass('go-top');
            $('#back-top').fadeOut(500);
        }
    });
})

