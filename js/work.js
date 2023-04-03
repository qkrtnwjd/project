$(function(){
  //메뉴 클릭시 토글
  $('.tap span.menu').click(function(event){
    event.stopPropagation();
    $('.menu_show').toggle();
  });

  //메뉴 밖 클릭시 사라짐
  $(document).click(function(){
      $('.menu_show').hide();
  });

  //리스트페이지 탭메뉴
  $('.tap_btn li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('.con_wrap .con').removeClass('on');
    $("#"+tab_id).addClass('on');

    //꾸며주는 요소
    $('.tap_btn li').removeClass('on');
    $(this).addClass('on');
  });


  //상세페이지 js
  window.addEventListener('DOMContentLoaded', fn());
  function fn() {
  gsap.registerPlugin(ScrollTrigger);
  const target = document.querySelector('[data-scroll="target"');
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: target,
      start: 'top top',
      end: '+=150%',
      scrub: true,
      pin: true,
      // markers: true, 시작과 끝 표시
      pinSpacing: true,
    },
  });
  tl.fromTo(
    target,
    {
      scale: 0.75,
    },
    {
      scale: 1,
      ease: 'none',
    }
  );
  }

});
