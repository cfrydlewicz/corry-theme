//$(document).ready( function() {
//});

// For single posts
$('#single-post-title').ready( function() {

  // as user scrolls
  window.addEventListener('scroll', function() {
    // keep track of the h1 and its shape
    var element = document.querySelector('#single-post-title');
    var position = element.getBoundingClientRect();

    // when it is visible
    if ( position.top >= 0 && position.bottom <= window.innerHeight ) {
      // Hide the secondary fixed header
      $('#site-header-secondary').slideUp();

    // when it is not visible
    } else {
      // Show the secondary fixed header
      $('#site-header-secondary').slideDown();
    }

  });

});
