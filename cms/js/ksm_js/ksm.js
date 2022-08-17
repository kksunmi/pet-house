$(document).ready(function () {

  //aos 플러그인
  AOS.init();

  //네비슬라이드

  $('.gnb_1da').click(function (e) {
    e.preventDefault();
    $('body, html').animate({ scrollTop: $($(this).attr('href')).offset().top }, 400, function () {

    })



  })

  //서브 슬라이드
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


  //체크박스 동의
  $('#event_form [type=submit]').on('click submit', function () {

    if ($('#chxga').prop("checked") == true) {
      //전송
      return true
    } else {
      //멈춰
      alert("이용약관 동의해주세요.");
      return false

    }

  })

  //popup
  $("#event_form a").click(function () {
    $(".layer-bg").show();
    $(".popup").show();
  });
  $(".popup .button").click(function () {
    $(".layer-bg").hide();
    $(".popup").hide();
  })



})
