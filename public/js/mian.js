//Slider//
function bannerSwitcher() {
    next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
    if (next.length) next.prop('checked', true);
    else $('.sec-1-input').first().prop('checked', true);
  }

  var bannerTimer = setInterval(bannerSwitcher, 9000);

  $('nav .controls label').click(function() {
    clearInterval(bannerTimer);
    bannerTimer = setInterval(bannerSwitcher, 5000)
  });

  //Header//
 $(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 60) {
            $(".menu").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".menu").removeClass("active");
        }
    });
});
