$(document).ready(function(){
	$(".gnb_1dli").eq(0).click(function(){
        $('html, body').animate({scrollTop: ($('#sctionB').offset().top-80)}, 500);
        });
        $(".gnb_1dli").eq(1).click(function(){
            $('html, body').animate({scrollTop: ($('#sctionA').offset().top-80)}, 500);
            });
    });

    $(document).ready(function(){
        setInterval(function(){
            $('#sud_ul').animate({
                "marginLeft" : "-=1280"
            },400,function(){
                $('#sud_ul li').eq(0).appendTo($('#sud_ul'))
                $('#sud_ul').css('margin-left',0)
            })
        },3000)
    
    })
	