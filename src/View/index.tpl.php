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
    <div class="header">
        <ul class="mui-flex">
            <li class="cell">
                <a href="index.php">
                    <img src="web/images/logo.png" alt="" width="100%" style="min-width: 160px;">
                </a>
            </li>
            <li class="cell">
                <form action="index.php?c=index&a=search" method="post">
                    <input class="search" type="text" name="keyword" placeholder="输入关键词"/>
                    <input class="search-icon" type="submit" value="" style="border: none">
<!--                    <span class="search-icon"></span>-->
                </form>
            </li>
        </ul>
    </div>
    <!-- end header-->
    <!-- nav-->
    <div class="nav swiper-container">
        <ul class=" swiper-wrapper">
            <li class=" swiper-slide nav-focus">
                <a href="index.php"> 首页</a>
            </li>

            <li class=" swiper-slide">
                <a href="index.php?c=page&a=page&catid=16">
                    关于我们
                </a>
            </li>
            <li class=" swiper-slide">
                <a href="">
                    大恒快运
                </a>
            </li>
            <li class=" swiper-slide">
                <a href="index.php?c=category&a=caseList">
                    成功案例
                </a>
            </li>
            <li class=" swiper-slide">
                <a href="index.php?c=index&a=newsList">
                    新闻动态
                </a>
            </li>
            <li class=" swiper-slide">
                <a href="index.php?c=category&a=carList">
                    车辆展示
                </a>
            </li>
            <li class=" swiper-slide">
                <a href="index.php?c=category&a=boxList">
                    订单跟踪
                </a>
            </li>
            <li class=" swiper-slide">
                <a href="index.php?c=page&a=contact">
                    联系我们
                </a>
            </li>
        </ul>
    </div>
    <!-- end nav-->
    <!-- banenr-->
    <div class="banner" style="width: 100%;">
        <ul>
            <li>
                <a href="javascript:;" style="width: 100%;height: 100%;display: block;position: relative;">
                    <img src="web/images/banner.jpg" width="100%" height="auto"/>
                </a>
            </li>
            <li>
                <a href="javascript:;" style="width: 100%;height: 100%;display: block;position: relative;">
                    <img src="web/images/banner1.jpg" width="100%" height="auto"/>
                </a>
            </li>
        </ul>
    </div>
    <!-- end  banner-->

    <!-- 经营范围-->
    <div class="range bg-white">
        <!-- title-->
        <div class="title">
            <span class="ml15">经营范围</span>
        </div>
        <!-- end title-->
        <!-- 内容-->
        <div class="txt">
            <ul class="mui-flex">
                <li class="cell"><a href="index.php?c=page&a=xjky"><span>小件快运</span></a></li>
                <li class="cell"><a href="index.php?c=page&a=page&catid=22" class="two"><span>零担专线</span></a></li>
                <li class="cell"><a href="index.php?c=page&a=page&catid=21" class="three"><span>大客户洽谈</span></a></li>
            </ul>
            <ul class="mui-flex">
                <li class="cell"><a href="index.php?c=page&a=page&catid=23" class="four"><span>整车调度</span></a></li>
                <li class="cell"><a href="index.php?c=page&a=page&catid=24" class="five"><span>木箱包装</span></a></li>
                <li class="cell"><a href="index.php?c=page&a=page&catid=25" class="six"><span>木架包装</span></a></li>
            </ul>
        </div>
    </div>

    <!-- end 经营范围-->

    <!-- 车辆展示-->
    <div class="car-show mt5 bg-white">
        <ul class="mui-flex">
            <li class="cell fixed" style="width: 30%;">
                <a href="">
                    <img src="web/images/car-show.png" class="car" alt="" width="100%" style="display: block">
                </a>
            </li>
            <li class="cell">
                <div class="car-show-banner swiper-container swiper-car">
                    <div class="banner" style="width: 100%;">
                        <ul>

                            <?php

                            foreach ($carbanner as $value) {
                                ?>
                                <li>
                                    <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=8" style="width: 100%;height: 100%;display: block;position: relative;text-align: center">
                                        <img src="<?php echo $value['thumb'] ?>" width="68%" height="auto"/>
                                    </a>
                                </li>


                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- end 车辆展示-->
    <!-- 木箱展示-->
    <div class="car-show bg-white mt5">
        <ul class="mui-flex">

            <li class="cell">
                <div class="car-show-banner swiper-container swiper-box">
                    <div class="banner" style="width: 100%;">
                        <ul>
                            <?php

                            foreach ($boxbanner as $key=>$value) {
                                if ($key>0) break;
                                ?>
                                <li>
                                    <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=9" style="width: 100%;height: 100%;display: block;position: relative;text-align: center">
                                        <img src="<?php echo $value['thumb'] ?>" width="68%" height="auto"/>
                                    </a>
                                </li>


                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="cell fixed" style="width: 30%;">
                <a href="">
                    <img src="web/images/box-show.png" class="box" alt="" width="100%" style="display: block">
                </a>
            </li>
        </ul>
    </div>
    <!-- end 木箱展示-->
    <!-- 大恒新闻-->
    <div class="range bg-white mt10">
        <!-- title-->
        <a href="index.php?c=index&a=newsList">
            <div class="title ">
                <span class="ml15">大恒新闻</span>
            </div>
        </a>
        <!-- end title-->
        <!-- 内容-->
        <div class="news-txt">
            <ul>

                <?php

                foreach ($news as $value) {
                    ?>
                        <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=7">
                            <li>
                                <span class="news-list-icon"></span>
                                <span class="ml15 news-title"><?php echo $value['title'] ?></span>
                                <span class="date"><?php echo date('Y-m-d',$value['inputtime']); ?></span>
                            </li>
                        </a>
                <?php } ?>

            </ul>

        </div>
    </div>
    <!-- end 大恒新闻-->
    <!-- 成功案例-->
    <div class="car-show mt10">
        <ul class="mui-flex">
            <li class="cell fixed" style="width: 30%;">
                <a href="">
                    <img src="web/images/case-show.jpg" class="case" alt="" width="100%" style="display: block">
                </a>
            </li>
            <li class="cell"></li>
            <li class="cell fixed" style="width: 68%">
                <div class="car-show-banner swiper-container swiper-case">
                    <div class="banner" style="width: 100%;">
                        <ul>
                            <?php

                            foreach ($casebanner as $value) {
                                ?>
                                <li>
                                    <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=10" style="width: 100%;height: 100%;display: block;position: relative;text-align: center">
                                        <img src="<?php echo $value['thumb'] ?>" width="68%" height="auto"/>
                                    </a>
                                </li>


                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- end 成功案例-->
    <!-- 关于我们-->
    <div class="range bg-white mt10">
        <!-- title-->
        <div class="title ">
            <span class="ml15">关于我们</span>
        </div>
        <!-- end title-->
        <!-- 内容-->
        <div class="content-txt">
            <div class="content-title">芜湖大恒物流有限公司（铜陵分公司）</div>
            <div class="content">
                芜湖大恒物流有限公司成立于2006年元月，注册资本500万元人民币。本着一切为了客户，为了客户一切的服务理念为宗旨，奉行“诚实守信、安全准时”为准则，竭诚为广大客户提供安全、方便、快捷的物流服务。 芜湖大恒物流有限公司铜陵分公司为芜湖大恒物流有限公司全资子公司，于2014年8月...
            </div>
        </div>
        <a href="index.php?c=page&a=page&catid=16">
            <div class="look-more">
                查看更多》
            </div>
        </a>
    </div>
    <!-- end 关于我们-->
    <!-- footer-->
    <div class="footer">
        Copyright © <?php echo date('Y'); ?> 芜湖大恒物流有限公司   All Right Reserved
    </div>
    <!-- end footer-->
</div>
</body>
<script src="web/js/jquery-2.1.4.min.js"></script>
<script src="web/js/unslider.js"></script>
<script src="web/js/swiper.js"></script>
<script src="web/js/index.js"></script>
<script>
    var swiper = new Swiper('.nav', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 30
    });
</script>
<script>
    $(function(){
        var ch = $('.car').height();
        var cb = $('.box').height();
        var cs= $('.case').height();
        $('.swiper-car').height(ch);
        $('.swiper-box').height(cb);
        $('.swiper-case').height(cs);
    })
</script>
</html>