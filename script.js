// Click burger menu
$('#burger').click(function(){
    $('aside').css('right','0');
    $('aside').css('transition','0.5s ease');

    $('.opacity').css('display', 'initial');
});

$('.opacity').click(function(){ // sortie burger-menu
    $('aside').css('right', '-250px');
    $(this).css('display', 'none');
});

$('.mobile-link').click(function(){ // sortie burger menu sur lien
    $('aside').css('right', '-250px');
    $('.opacity').css('display', 'none');
});


var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
      invert: false,
    },
    // autoHeight: true,
    pagination: {
      el: '.blog-slider__pagination',
      clickable: true,
    }
  });




