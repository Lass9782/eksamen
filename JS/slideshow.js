/*Slider*/
$(function () {
    $('.fadein img:gt(0)').hide();
    setInterval(function () {
        $('.fadein img:first-child').fadeOut(3000).next('img').fadeIn(3000).end().appendTo('.fadein');
    }, 5000);
});