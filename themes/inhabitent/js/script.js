(function($) { 
  $(function() {
    const iconSearch = $('.site-header .icon-search');
    const searchField = $('.site-header .search-field');
      iconSearch.on('click', function(event) {
        event.preventDefault();
        searchField.toggle(500).focus();
    });
    
      searchField.blur(function() {
        if (searchField.val() === ''){
           searchField.hide(500);
        }
      });
  });
})(jQuery);



