$(document).ready(function(){


  AOS.init();

    const swiper = new Swiper('#sub_slide .swiper', {
      
     
      loop: true, 
      autoplay: {
        delay: 3000,
      },   
      
    
      // Navigation arrows
      navigation: {
        nextEl: '#sub_slide .swiper-button-next',
        prevEl: '#sub_slide .swiper-button-prev',
      },
    
      
    });

    //카카오 지도 드래그 금지
    
    
    
})
	