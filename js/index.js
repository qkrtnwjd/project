$(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $("#header").addClass("scroll");
      } else {
        $("#header").removeClass("scroll");
      };
  });

  AOS.init();

});

// 스크롤 애니메이션
function the_top(){
  $('html, body').animate( { scrollTop : 0 }, 1000 );
}

// 모바일 메뉴
// $(function(){
//   $('.m_menu').click(function(){
//     $('.m_back').show();
//   });
// });
$(function(){
  $('.m_menu img').click(function(){
    $('.m_list').css('right', '0');
    $('.m_back').fadeIn();
    $("body").addClass("hidden");
  });
  $('.close_menu').click(function(){
    $('.m_list').css('right', '-100%');
    $('.m_back').fadeOut();
    $("body").removeClass("hidden");
  });
  $('.m_back').click(function(){
    $('.m_list').css('right', '-100%');
    $('.m_back').fadeOut();
    $("body").removeClass("hidden");
  });

})
