$(document).ready(function(){
    $('#allMenu').click(function(){
        $(this).toggleClass('open');
    })

    $('#gnb a').click(function(e){
        e.preventDefault();
        var clicka = $(this);
        $('body, html').animate({
            scrollTop : $(clicka.attr('href')).offset().top
        },400,function(){
            $('#gnb a').removeClass('act')
            clicka.addClass('act');
        })
    })
 
})

// window.onload= function(){} 제이쿼리 작동 x 실행하기



$(document).ready(function(){
    const swiper = new Swiper('#portfolio .swiper', {
        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
        loop: true,
      
        // If we need pagination
        pagination: {
          el: '#portfolio .swiper-pagination',
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '#portfolio .swiper-button-next',
          prevEl: '#portfolio .swiper-button-prev',
        },
      
        // And if we need scrollbar
        scrollbar: {
          el: '#portfolio .swiper-scrollbar',
        },
      });
      AOS.init();
})