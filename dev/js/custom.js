$(document).ready( function() {

  // Nav Menu
  function openNav() {
    $('.header-nav').attr("aria-expanded","true").addClass("open").focus();
    $('body').addClass("shadow-on");

    $('#site-header-secondary').attr("inert","");
    $('main#a_skip-to-content').attr("inert","");
    $('aside.sidebar').attr("inert","");
    $('footer#a_footer').attr("inert","");
    $('#wpadminbar').attr("inert","");

  }

  function closeNav() {
    $('.header-nav').attr("aria-expanded","false").removeClass("open");
    $('body').removeClass("shadow-on");

    $('#site-header-secondary').removeAttr("inert");
    $('main#a_skip-to-content').removeAttr("inert");
    $('aside.sidebar').removeAttr("inert");
    $('footer#a_footer').removeAttr("inert");
    $('#wpadminbar').removeAttr("inert");

  }

  $(".nav-trigger").click(function(){

    if ( $('.header-nav').hasClass("open") ) {
      closeNav();
    } else {
      openNav();
    }

  });

  // Escape Key Detection
  $(document).keyup(function(e) {
   if (e.key === "Escape") {

      // Close Primary Nav
      if ( $('.header-nav').hasClass("open") ) {
        closeNav();
      }

    }
  });

  // Secondary site header
  // For single posts
  if( $("#sticky-title").length > 0 ) {

    // Watch the h1
    var observer = new IntersectionObserver(function(entries) {
      if(entries[0].isIntersecting === true) {
        // hide the secondary header when h1 is visible
        $('#site-header-secondary').slideUp();
      } else {
        // show the secondary header when h1 isn't visible
        $('#site-header-secondary').slideDown();
      }
    }, { threshold: [0] });
    observer.observe(document.querySelector("#sticky-title"));

  }

  // Article Progress Bar
  // Only on Posts & Pages
  if ( $('body').hasClass('wp-singular') ) {

    // Detect article height
    var postEndPosition = $('#a_end-of-article').offset().top;
    var progressBarWidth;

    // Detect scrolling (up or down)
    $(window).on("scroll", function() {
      postEndPosition = $('#a_end-of-article').offset().top;  // update article height for any late pop-in elements

      // Set Width of Progress Bar
      progressBarWidth = jQuery(window).scrollTop() / postEndPosition * 100;
      $('#article-progress-bar').css('width', progressBarWidth + '%');

      if (progressBarWidth >= 95) {
        $('#jump-to-footer').fadeOut();
      } else {
        $('#jump-to-footer').fadeIn();
      }

    });

  }

});
