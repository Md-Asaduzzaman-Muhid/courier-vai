$(window).scroll(function () {
    console.log($(window).scrollTop())
    if ($(window).scrollTop() > 50) {
      $('.navbar').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 51) {
      $('.navbar').removeClass('navbar-fixed');
    }
  });