/* ==========================================================================
   Base Scripts
   ========================================================================== */

/* Slideshow -> Change Slides */
document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';
$(function() {
    $('.slides').slidesjs({
        height: 235,
        navigation: false,
        pagination: false,
        effect: {
            fade: {
                speed: 400
            }
        },
        callback: {
            start: function(number) {
                $("#slider1, #slider2, #slider3").fadeOut(500);
            },
            complete: function(number) {
                $("#slider" + number).delay(500).fadeIn(1000);
            }
        },
        play: {
            active: false,
            auto: true,
            interval: 3000, /*6000*/
            pauseOnHover: false,
            effect: "fade"
        }
    });
});


