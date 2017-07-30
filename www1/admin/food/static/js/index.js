/**
 * Created by think on 2017/5/10.
 */
$(function () {
    $('#main-menu > li > a').click(function(){
        $('#main-menu > li > a').removeClass('active');
        $(this).addClass('active');
        $(this).next().toggleClass('active');
        $(this).children('span').toggleClass('active');
    })
    $('.sidebar-collapse .nav > li > ul a').click(function(){
        $('.sidebar-collapse .nav > li > ul a').removeClass('active');
        $(this).addClass('active');
    })
})
