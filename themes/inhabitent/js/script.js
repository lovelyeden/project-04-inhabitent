
(function($) {
    // Hide the form
    // Prevent Default
  $('.icon-search').on('click', function(event) {
    event.preventDefault();
      $('.search-field') .toggle(500).focus();
  });
   $('.search-field').blur(function(){
      $('.search-field').hide(slow);
   });
})(jQuery);



