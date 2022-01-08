//$(document).ready( function() {
//});

// Secondary site header
// For single posts
$('#single-post-title').ready( function() {
  var observer = new IntersectionObserver(function(entries) {
    if(entries[0].isIntersecting === true) {
      $('#site-header-secondary').slideUp();
    } else {
      $('#site-header-secondary').slideDown();
    }
  }, { threshold: [0] });
  observer.observe(document.querySelector("#single-post-title"));
});

/*
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
*/
