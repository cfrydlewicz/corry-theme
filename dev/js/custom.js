$(document).ready( function() {

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
  if ( $('body').hasClass('single') || $('body').hasClass('page') ) {

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
