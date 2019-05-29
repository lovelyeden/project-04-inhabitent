(function($) {
    // Hide the form
  $('.search-field').hide();
    // Prevent Default
  $('.icon-search').on('click', function(event) {
    event.preventDefault();
      $('.search-field') .toggle().focus();
  });
   $('.search-field').blur(function(){
      $('.search-field').hide();
   });
})(jQuery);



