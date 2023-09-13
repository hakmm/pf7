$(document).ready(function(){
    $('.toggle-menu').click (function(){
        $(this).toggleClass('active');
        $('#menu').toggleClass('open');
    });

    $(".menu > li > a").clone().appendTo("#menu .main-nav");

    $(".main-nav").contents().wrapAll("<div></div>");
    
    $(".main-nav div a").wrap("<li></li>");

    $(".main-nav div li").wrapAll("<ul></ul>");

    $(".main-nav div li").contents().wrap("<div></div>");

    for(let i=1;i<6;i++) {
        $(".main-nav ul li:eq("+i+") a").after("<i class='ion-chevron-down'></i>");
    }

    var a=0;
    var n;
    var n2;
    $(".main-nav ul li").mouseenter(function(){
        n = $(this).index()+1;
    });

    $(".main-nav ul li i").click(function(){
        $("#menu.open > .main-nav > div > ul > li > div.sub-menu").remove();
        var clone = $(".menu li:nth-child("+n+") .sub-menu").clone();
        var appendTo = clone.appendTo(".main-nav > div > ul > li:nth-child("+n+")");
        appendTo.slideToggle();
        if (a==0) {
            $(this).attr("class","ion-chevron-up");
            a=1;
            n2=n;
        } else {
            if (n==n2) {
                $(this).attr("class","ion-chevron-down");
                $(this).parents("li").find("div.sub-menu").css("display","none");
                a=0;
            } else {
                $(this).attr("class","ion-chevron-up");
                n2=n;
            }
        }
        $(this).parents("li").siblings().find("div.sub-menu").slideUp();
        $(this).parents("li").siblings().find("i").attr("class","ion-chevron-down"); 
    });
});