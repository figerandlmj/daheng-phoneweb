/**
 * Created by Administrator on 2016/1/14.
 */
$(function(){

    //        banner

    if (window.chrome) {
        $('.banner li').css('background-size', '100% 100%');
    }
    $('.banner').unslider({
        arrows: false,
        fluid: true,
        dots:false
    });
    if (window.chrome) {
        $('.small-banner li').css('background-size', '100% 100%');
    }
    $('.small-banner').unslider({
        arrows: true,
        fluid: true,
        dots:false
    });




    // Ê×Ò³ÆäËûÁ½¸ö°´Å¥¹öÂÖ²¥Í¼
    function scrollnew(a,b,c,d,e,f,g){
        var a=0;
        var length = $(b).length;
        var width = $(b).width()
        $(c).width(length*width);
        function Move2(){
            var width=$(b).width();
            var movewidth=-a*width+"px";
            $(c).stop();
            $(c).animate({left:movewidth});
        }
        function Upindex2(){
            a==(length-1)?a=0:a=a+1;
        }
        function Downindex2(){
            a==0?a=(length-1):a=a-1;
        }
        $(d).click(function(){
            Upindex2();
            Move2();
        })
        $(e).click(function(){
            Downindex2();
            Move2();
        })
        function f(){
            g=setInterval(function(){
                Upindex2();
                Move2();
            },3000);
        }
        $(b).mouseover(function(){
            clearInterval(g);
        })
        $(b).mouseout(function(){
            f();
        })

        f();
    }
    scrollnew('i',".cars-scroll-box-list",
        ".cars-scroll-imgs",".scrollbtn-r-bg",
        ".scrollbtn-l-bg",'scrollnewsiteTime1','time1');
    scrollnew('i',".wooden-scroll-box-list",
        ".wooden-scroll-imgs",".scrollbtn-r-bg2",
        ".scrollbtn-l-bg2",'scrollnewsiteTime2','time2');
    scrollnew('i',".cases-scroll-box-list",
        ".cases-scroll-imgs",".scrollbtn-r-bg3",
        ".scrollbtn-l-bg3",'scrollnewsiteTime3','time3');
})

