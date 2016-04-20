jQuery(document).ready( function($) {
  var slideout = new Slideout({
    'panel': document.getElementById('page'),
    'menu': document.getElementById('site-navigation'),
    'padding': 256,
    'tolerance': 70
  });
  document.querySelector('.toggle-button').addEventListener('click', function() {
    slideout.toggle();
  });
});