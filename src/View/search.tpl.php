<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>芜湖大恒物流有限公司</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
    <link rel="stylesheet" href="web/css/phone_base.css">
    <link rel="stylesheet" href="web/css/dh.css">
    <link rel="stylesheet" href="web/css/swiper.min.css">
</head>
<body>
<div class="container">
    <!-- header-->
    <div class="header" style="background-color: #757474">
        <form action="index.php?c=index&a=search" method="post">
            <ul class="mui-flex">
                <li class="cell fixed " style="width: 10%;position: relative;bottom:6px;">
                    <a href="index.php"><span class="arrow"><</span></a>
                </li>

                <li class="cell" style="position:relative;bottom:6px;">
                    <div style="padding: 0px 0 ;">

                        <input class="search-box" type="text" name="keyword" placeholder="输入关键词"/>
<!--                        <span class="search-icon" style="margin-top: -7px;left: 2%;"></span>-->
                        <input class="search-icon" style="margin-top: -7px;left: 2%;border: none" type="submit" value="">


                    </div>
                </li>


            </ul>
        </form>
    </div>
    <!-- end header-->
    <!-- 鍒楄〃-->
    <div class="list-wrap list-case-wrap" style="margin-bottom:100px;">

        <?php
        foreach ($data as $value) {
            ?>
           <?php if(!empty($value['title'])){

                ?>

                <?php if(!empty($value['thumb'])){

                    ?>
                    <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=<?php echo $value['catid'] ?>">
                        <ul class="mui-flex bg-white">
                            <li class="cell fixed" style="width: 31%;text-align: center">
                                <div style="padding: 10px;">
                                    <img src="<?php echo $value['thumb'] ?>" alt="" width="80%">
                                </div>
                            </li>
                            <li class="cell" >
                                <div style="padding: 10px;">
                                    <p><?php echo $value['title'] ?></p>
                                    <span class="mt5"><?php echo $value['description'] ?></span>
                                </div>
                            </li>
                        </ul>
                    </a>
                    <?php
                }else{

                    ?>
                    <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=<?php echo $value['catid'] ?>">
                        <ul class="mui-flex bg-white">
                            <li class="cell">
                                <div style="padding: 10px;">
                                    <p><?php echo $value['title'] ?></p>
                                    <span class="mt5"><?php echo '[' . date('Y-m-d', $value['inputtime']) . ']' ?></span>
                                </div>
                            </li>
                        </ul>
                    </a>


                    <?php

                } ?>
                <?php


            } ?>

        <?php } ?>

    </div>
    <!-- end 鍒楄〃-->
    <!-- footer-->
    <div class="footer" style="position:fixed;bottom:0;z-index:999999999999999;max-width:750px;">
        <ul class="mui-flex">
            <li class="cell"><a href="index.php" style="color:#fff;"><img src="web/images/first.png" width="18" height="17"/><br>首页</a></li>
            <li class="box-phone cell"><img src="web/images/phone.png" width="18" height="17"/><br>电话</li>
            <li class="box-qq cell"><img src="web/images/qq.png" width="18" height="17"/><br>QQ</li>
            <li class="cell"><a href="index.php?c=page&a=map" style="color:#fff;"><img src="web/images/map.png" width="18" height="17"/><br>地图</a></li>
        </ul>
        <!-- Copyright © <?php echo date('Y'); ?> 芜湖大恒物流有限公司   All Right Reserved -->
    </div>
    <!-- end footer-->
    <!-- float tel-->
    <!-- <div class="float-tel" style="z-index:999999;"></div> -->
    <!-- end float tel-->
    <!-- 联系我们弹框 -->
    <div id="mask"></div>
    <div class="box phone-box">
        <div class="title">
            <label>联系我们</label>
            <span class="close"></span>
        </div>
        <div class="part">电话：<a href="tel:05532960887">0553-2960887</a></div>
        <div style="padding-left:76px;padding-bottom:10px;"><a href="tel:05532960885">0553-2960885</a></div>
    </div>

    <div class="box qq-box">
        <div class="title">
            <label>联系我们</label>
            <span class="close"></span>
        </div>
        <div class="part">QQ：420403213</div>
        <div><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=420403213&site=qq&menu=yes" style="border-bottom:none;">
            <img border="0" src="http://wpa.qq.com/pa?p=2:420403213:51" alt="点击这里给我发消息" title="在线客服"  style="margin-left:70px;margin-bottom:10px;"/>
        </a></div>
    </div>
</div>
</body>
<script src="web/js/jquery-2.1.4.min.js"></script>
<script src="web/js/float.js"></script>
<script src="web/js/swiper.js"></script>
<script>
    var swiper = new Swiper('.nav', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 30
    });

    // $(".float-tel").float({offset : {right : 12}});
    $(".phone-box").float({offset : {right : 12}});
    $(".qq-box").float({offset : {right : 12}});
    // 遮罩层的高度
    $("#mask").css({
        "height":$("body").height()
    }) 
    // 弹框的位置
    var windowWidth = ($(".container").width()-$(".box").width())*0.5;
    var windowHeight = $(window).height(),      //获取当前窗口高度
    scrollHeight = $(document).scrollTop(),    //相对滚动条上侧的偏移值
    dialogBoxHeight = $(".box").height() + 2,
    dialogBoxTop = windowHeight * 0.5,      //动态top值
    dialogBoxMarTOP = 0 - (dialogBoxHeight/2) + scrollHeight;   //动态margin-top值
    $(".box").css({"left" : windowWidth + "px","top" : dialogBoxTop + "px", "margin-top":dialogBoxMarTOP + "px"  });
    // 联系我们弹框
    $(".float-tel,.box-phone").on("click",function(){
        $("#mask").show();
        $(".phone-box").show();
    })
     $(".box-qq").on("click",function(){
        $("#mask").show();
        $(".qq-box").show();
    })
    // 关闭弹框
    $(".close").on("click",function(){
        $("#mask").hide();
        $(".box").hide();
    })
</script>
</html>