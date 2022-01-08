//$(document).ready( function() {
//});

// For single posts
$('.site-header-single').ready( function() {

  // as user scrolls
  window.addEventListener('scroll', function() {
    // keep track of the h1 and its shape
    var element = document.querySelector('#site-header-single');
    var position = element.getBoundingClientRect();

    // when it is visible
    if ( position.top >= 0 && position.bottom <= window.innerHeight ) {
      // Hide the secondary fixed header
      $('.site-header-single').slideUp();

    // when it is not visible
    } else {
      // Show the secondary fixed header
      $('.site-header-single').slideDown();
    }

  });

});
