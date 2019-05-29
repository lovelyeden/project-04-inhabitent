(function($){
$('.search-field').hide();  

$('.icon-search').on('click', function(event){
event.preventDefault();
});

$('.icon-search').on('click', function(){
    $('.search-field').toggle().focus(slow);
    // $('.search-field').focus();
});
 
//  on blur on searchfield,preventfunction, searchfield hide//
// $('.fa-search').on('click', function() {
//     $('.search-form').toggle();
//     $('.search-field').focus();
//   });

//   $('.search-field').on('blur', function() {
//     $('.search-form').toggle();
//   });
})(jQuery);

