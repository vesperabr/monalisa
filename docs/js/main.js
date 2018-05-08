$(function() {

   $('.menu li').click(function() {
        $('.menu li').not(this).find('ul').hide();
        $(this).find('ul').toggle();
    });
   
});