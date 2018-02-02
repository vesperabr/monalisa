$(function() {

   $('ul li').click(function() {
        $('ul li').not(this).find('ul').hide();
        $(this).find('ul').toggle();
    });
   
});