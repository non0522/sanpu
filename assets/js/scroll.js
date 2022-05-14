// スクロールイベント
$(function(){
  const
    w = $(window);


  /*  Smooth Scroll  */
  $('.moveScroll').find('a').on('click', function(e){
    e.preventDefault();
    var href= $(this).attr("href"),
      target = $(href == "#" || href == "" ? 'html' : href),
      position = target.offset().top;
      $("html, body").animate({scrollTop:position}, 400, "swing");
      $('body').removeClass('isOpen');
    return false;
  });

  w.trigger('scroll');
});