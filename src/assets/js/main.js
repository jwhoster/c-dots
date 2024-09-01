let lastInnerWidth = window.innerWidth;
let firstTime = true;
$(window).on('load resize', function() {
  let windowWidth = window.innerWidth;
  if(lastInnerWidth != window.innerWidth || firstTime) {
    firstTime = false;
    lastInnerWidth = window.innerWidth;

    if(windowWidth < 768) {
      $('.l-header__menuBtn').off('click').on('click', function() {
        $('.l-header__list').toggleClass('--active');
        $('.l-header__menuBtn').toggleClass('--active');
        $('.l-header__menuBtn--text').text(function(i, text) {
          return text === 'CLOSE' ? 'MENU' : 'CLOSE';
        });
        $('html').toggleClass('no-scroll');
      });
    }
    else{
      $('.l-header__menuBtn').removeClass('--active');
    }
  }
});

$(window).bind('load', function() {
  AOS.init({
      offset: 200,
      delay: 100,
      duration: 1600,
      once: true,
  });
});

$('.globalHeader__nav [data-current]').each(function() {
  if($('body').attr('id') == `page_${$(this).data('current')}`) {
    $(this).addClass('is-current');
    return false;
  }
});




// $('.ul-link [data-current]').each(function() {
//   if($('body').attr('id') == `page_${$(this).data('current')}`) {
//     $(this).addClass('is-current');
//     return false;
//   }
// });


