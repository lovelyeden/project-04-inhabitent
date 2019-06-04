
(function($) { 
  $(function() {
    const iconSearch = ('.icon-search');
    const searchField = ('.search-field');
      iconSearch.on('click', function(event) {
        event.preventDefault();
        searchField.toggle(500).focus();
    });
      searchField.blur(function() {
      searchField.hide(500);
      });
  });
})(jQuery);



