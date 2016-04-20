jQuery(document).ready(function ($) {
    $('.front-quote').textillate({
       in: { effect: 'fadeInLeft', shuffle: true, delayScale: 0.7 },
    });
     var donateJiggle = $('.donate-anim').textillate ({
       autoStart: false,
       in: { effect: 'tada', sync: true, delayScale: 0.3},
     });
     
     donateJiggle.on('mouseenter', function () { donateJiggle.textillate('start'); });
})