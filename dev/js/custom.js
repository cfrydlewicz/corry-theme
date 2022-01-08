//$(document).ready( function() {
//});

// Secondary site header
// For single posts
$('#single-post-title').ready( function() {
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
  observer.observe(document.querySelector("#single-post-title"));
});
