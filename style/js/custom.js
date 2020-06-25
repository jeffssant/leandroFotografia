(function ($) {
  $(document).on('ready', function () {
    $('#menu-principal li a').on('click', function (e) {
      e.preventDefault();

      var link = $(this);
      var selector = link.prop('href').split('#')[1];
      var element = $('#' + selector).offset();

      $('html, body').animate({
        scrollTop: element.top + 'px'
      }, 'slow');
    });

    $('.link-Two').on('click', function () {      
      $("#collapseThree").removeClass("in");
      $("#collapseFour").removeClass("in");     
    });

    $('.link-Three').on('click', function () {     
      $("#collapseTwo").removeClass("in");
      $("#collapseFour").removeClass("in");     
    });

    $('.link-Four').on('click', function () {      
      $("#collapseTwo").removeClass("in");
      $("#collapseThree").removeClass("in");     
    });



  })
})(jQuery);