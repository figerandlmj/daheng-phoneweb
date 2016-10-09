<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>大恒物流</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="web/css/phone_base.css">
    <link rel="stylesheet" href="web/css/dh.css">
    <link rel="stylesheet" href="web/css/swiper.min.css">

    <!-- Demo styles -->
    <style>
        .swiper-container {
            width: 100%;
            /*height: 300px;*/
            margin-left: auto;
            margin-right: auto;
        }
        .gallery-thumbs .swiper-slide {
            background-size: cover;
            background-position: center;
            color: #ffffff;
        }
        .gallery-top {
            /*height: 80%;*/
            /*height: auto;*/
            width: 100%;
        }
        .gallery-thumbs {
            /*height: 40px;*/
            height: 20%;
            background-color: #6e7175;
            color: #ffffff;
            line-height: 40px;
            text-align: center;
            /*box-sizing: border-box;*/
            /*padding: 10px 0;*/
        }
        .gallery-thumbs .swiper-slide {
            width: 25%;
            height: 100%;

        }
        .gallery-thumbs .swiper-slide-active {
            opacity: 1;
            border-bottom: 4px solid #193a8e;
        }

    </style>
</head>
<body>
<div class="container">
    <!-- header-->
    <div class="header">
        <form action="index.php?c=index&a=search" method="post" style="width: 100%;height: 100%;position: relative;">
        <ul class="mui-flex">
            <li class="cell">
                <a href="index.php">
                    <img src="web/images/logo.png" alt=""width="159" style="min-width: 160px;">
                </a>
            </li>
            <li class="cell" style="position: relative;">

                    <div style="position: relative;width: 100%;height: 26px;">
                        <input class="search" type="text" name="keyword" placeholder="输入关键词"/>
                        <input class="search-icon" type="submit" value="" style="border: none">
                    </div>

            </li>
        </ul>
        </form>
    </div>
    <!-- end header-->
    <!-- Swiper -->
<!--    导航部分-->
    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper" style="margin-left: -37%;">
            <div class="swiper-slide">首页</div>
            <div class="swiper-slide">关于我们</div>

            <div class="swiper-slide">业务范围</div>
            <div class="swiper-slide">成功案例</div>
            <div class="swiper-slide">新闻动态</div>
            <div class="swiper-slide">车辆展示</div>
            <div class="swiper-slide">订单跟踪</div>
            <div class="swiper-slide">联系我们</div>
        </div>
    </div>
<!--    end 导航-->
<!--    主体部分-->
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">


<!--            首页-->
            <div class="swiper-slide">

                <!-- banenr-->
                <div class="banner" style="width: 100%;">
                    <ul>
                        <li>
                            <a href="javascript:;" style="width: 100%;height: 100%;display: block;position: relative;">
                                <img src="web/images/banner.jpg" width="100%" height="auto"/>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="javascript:;" style="width: 100%;height: 100%;display: block;position: relative;">
                                <img src="web/images/banner1.jpg" width="100%" height="auto"/>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <!-- end  banner-->

                <!-- 经营范围-->
                <div class="range bg-white">
                    <!-- title-->
                    <div class="title">
                        <span class="ml15">业务范围</span>
                    </div>
                    <!-- end title-->
                    <!-- 内容-->
                    <div class="txt">
                        <ul class="mui-flex">
                            <li class="cell">
                                <a href="index.php?c=page&a=xjky">
                                    <div>
                                        <img src="web/images/xjky-icon.png" alt="" width="24" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>小件快运</span>
                                    </div>
                                </a>
                            </li>
                            <li class="cell">
                                <a href="index.php?c=page&a=ldzx">
                                    <div>
                                        <img src="web/images/ldzx-icon.png" alt="" width="28" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>零担专线</span>
                                    </div>
                                </a>
                            </li>
                            <li class="cell">
                                <a href="index.php?c=page&a=page&catid=21">
                                    <div>
                                        <img src="web/images/dkhqt-icon.png" alt="" width="40" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>航空货运</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <ul class="mui-flex">
                            <li class="cell">
                                <a href="index.php?c=page&a=page&catid=23">
                                    <div>
                                        <img src="web/images/zcdd-icon.png" alt="" width="24" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>整车调度</span>
                                    </div>
                                </a>
                            </li>
                            <li class="cell">
                                <a href="index.php?c=index&a=mxzs">
                                   <div>
                                       <img src="web/images/mxbz-icon.png" alt="" width="24" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                       <span>货物包装</span>
                                   </div>
                                </a>
                            </li>
                            <li class="cell">
                                <a href="index.php?c=page&a=page&catid=24">
                                    <div>
                                        <img src="web/images/mjbz-icon.png" alt="" width="24" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>吊装服务</span>
                                    </div>
                                </a>
                            </li>
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
                            <div class="car-show-banner swiper-car">
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


                <!-- 货物包装-->
                <div class="car-show bg-white mt5">
                    <ul class="mui-flex">

                        <li class="cell">
                            <div class="car-show-banner  swiper-box">
                                <div class="banner" style="width: 100%;">
                                    <ul>
                                        <?php

                                        foreach ($boxbanner as $value) {
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
                                <img src="web/images/box-show.png" alt="" width="100%" style="display: block">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end 货物包装-->
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
                            <div class="car-show-banner swiper-case">
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
                <div class="range bg-white mt10" style="padding-bottom:100px">
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
               <!--  <div class="footer">
                    <ul>
                        <li><a href="index.php" style="color:#fff;"><img src="web/images/first.png" width="18" height="17"/><br>首页</a></li>
                        <li class="box-phone"><img src="web/images/phone.png" width="18" height="17"/><br>电话</li>
                        <li class="box-qq"><img src="web/images/qq.png" width="18" height="17"/><br>扣扣</li>
                        <li><a href="index.php?c=page&a=map" style="color:#fff;"><img src="web/images/map.png" width="18" height="17"/><br>地图</a></li>
                    </ul>
                </div> -->
                <!-- end footer-->
            </div>
<!--            end 首页-->


<!--            关于我们-->
            <div class="swiper-slide">

                <!-- 列表-->
                <div class="list-wrap show-page">
                    <ul class="mui-flex">


                        <li class="cell li-focus">
                            <a href="index.php?c=page&a=page&catid=16"> 公司介绍</a>
                        </li>

                        <li class="cell">
                            <a href="index.php?c=page&a=page&catid=18"> 企业风采</a>
                        </li>

                        <li class="cell">
                            <a href="index.php?c=page&a=page&catid=17"> 招商加盟</a>
                        </li>

                    </ul>
                    <div class="page-detail" style="padding-bottom:100px">
                        <div class="page-title"><?php echo $company['title'] ?></div>
                        <div class="detail-text">
                            <?php echo $company['content'] ?>
                        </div>
                        <!--            <a href="">-->
                        <!--                <div class="look-more" style="background-color: #b8b7b7;color: #ffffff">-->
                        <!--                    点击加载更多-->
                        <!--                </div>-->
                        <!--            </a>-->
                    </div>

                </div>
                <!-- end 列表-->
                <!-- footer-->
               <!--  <div class="footer">
                    <ul>
                        <li><a href="index.php" style="color:#fff;"><img src="web/images/first.png" width="18" height="17"/><br>首页</a></li>
                        <li class="box-phone"><img src="web/images/phone.png" width="18" height="17"/><br>电话</li>
                        <li class="box-qq"><img src="web/images/qq.png" width="18" height="17"/><br>扣扣</li>
                        <li><a href="index.php?c=page&a=map" style="color:#fff;"><img src="web/images/map.png" width="18" height="17"/><br>地图</a></li>
                    </ul>
                </div> -->
                <!-- end footer-->

            </div>
<!--            end 关于我们-->


<!--            业务范围-->
            <div class="swiper-slide" style="min-height:640px;">
                <div class="range bg-white">
                    <!-- 内容-->
                    <div class="txt">
                        <ul class="mui-flex">
                            <li class="cell">
                                <a href="index.php?c=page&a=xjky">
                                    <div>
                                        <img src="web/images/xjky-icon.png" alt="" width="24" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>小件快运</span>
                                    </div>
                                </a>
                            </li>
                            <li class="cell">
                                <a href="index.php?c=page&a=ldzx">
                                    <div>
                                        <img src="web/images/ldzx-icon.png" alt="" width="28" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>零担专线</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <ul class="mui-flex">
                            <li class="cell">
                                <a href="index.php?c=page&a=page&catid=21">
                                    <div>
                                        <img src="web/images/dkhqt-icon.png" alt="" width="40" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>航空货运</span>
                                    </div>
                                </a>
                            </li>
                            <li class="cell">
                                <a href="index.php?c=page&a=page&catid=23">
                                    <div>
                                        <img src="web/images/zcdd-icon.png" alt="" width="24" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>整车调度</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <ul class="mui-flex">
                            <li class="cell">
                                <a href="index.php?c=index&a=mxzs">
                                   <div>
                                       <img src="web/images/mxbz-icon.png" alt="" width="24" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                       <span>货物包装</span>
                                   </div>
                                </a>
                            </li>
                            <li class="cell">
                                <a href="index.php?c=page&a=page&catid=24">
                                    <div>
                                        <img src="web/images/mjbz-icon.png" alt="" width="24" height="27" style="margin-top: 15px;margin-bottom: 10px;">
                                        <span>吊装服务</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer-->
               <!--  <div class="footer" style="position:fixed;bottom:0;">
                   <ul>
                        <li><a href="index.php" style="color:#fff;"><img src="web/images/first.png" width="18" height="17"/><br>首页</a></li>
                        <li class="box-phone"><img src="web/images/phone.png" width="18" height="17"/><br>电话</li>
                        <li class="box-qq"><img src="web/images/qq.png" width="18" height="17"/><br>扣扣</li>
                        <li><a href="index.php?c=page&a=map" style="color:#fff;"><img src="web/images/map.png" width="18" height="17"/><br>地图</a></li>
                    </ul>
                </div> -->
                <!-- end footer-->

            </div>
<!--            end 大恒快运-->


<!--            成功案例-->
            <div class="swiper-slide">

                <!-- 列表-->
                <div class="list-wrap list-case-wrap" style="padding-bottom:100px">

                    <?php

                    foreach ($case as $value) {
                        ?>

                        <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=10" class="newsboxcase">
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

                    <?php } ?>

                    <div class="last-case"></div>
                    <a href="javascript:;">
                        <div class="look-more bg-white news-more-case">
                            点击更多
                        </div>
                    </a>
                </div>
                <!-- end 列表-->
                <!-- footer-->
                <!-- <div class="footer">
                    <ul>
                        <li><a href="index.php" style="color:#fff;"><img src="web/images/first.png" width="18" height="17"/><br>首页</a></li>
                        <li class="box-phone"><img src="web/images/phone.png" width="18" height="17"/><br>电话</li>
                        <li class="box-qq"><img src="web/images/qq.png" width="18" height="17"/><br>扣扣</li>
                        <li><a href="index.php?c=page&a=map" style="color:#fff;"><img src="web/images/map.png" width="18" height="17"/><br>地图</a></li>
                    </ul>
                </div> -->
                <!-- end footer-->


            </div>
<!--            end 成功案例-->


<!--            新闻动态-->
            <div class="swiper-slide">



                <!-- 列表-->
                <div class=" news-list" style="padding-bottom:100px">
                    <?php

                    foreach ($newsall as $value) {
                        ?>

                        <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=7" class="newsbox">
                            <ul class="mui-flex">
                                <li class="cell fixed list-title"><?php echo $value['title'] ?></li>
                                <li class="cell fixed list-date"
                                    style="width: 100%;height: 41px;line-height: 41px;"><?php echo '[' . date('Y-m-d', $value['inputtime']) . ']' ?></li>
                            </ul>
                        </a>

                    <?php } ?>
                    <div class="last-news"></div>

                    <a href="javascript:;">
                        <div class="look-more news-more">
                            点击更多
                        </div>
                    </a>
                </div>
                <!-- end 列表-->
                <!-- footer-->
               <!--  <div class="footer">
                    <ul>
                        <li><a href="index.php" style="color:#fff;"><img src="web/images/first.png" width="18" height="17"/><br>首页</a></li>
                        <li class="box-phone"><img src="web/images/phone.png" width="18" height="17"/><br>电话</li>
                        <li class="box-qq"><img src="web/images/qq.png" width="18" height="17"/><br>扣扣</li>
                        <li><a href="index.php?c=page&a=map" style="color:#fff;"><img src="web/images/map.png" width="18" height="17"/><br>地图</a></li>
                    </ul>
                </div> -->
                <!-- end footer-->


            </div>
<!--            end 新闻动态-->


<!--            车辆展示-->
            <div class="swiper-slide">



                <!-- 列表-->
                <div class="list-wrap" style="padding-bottom:100px">

                        <?php

                        $i=0;
                        echo '<ul class="mui-flex">';

                        foreach ($carall as $value) {

                            $i++;
                            ?>
                            <li class="cell fixed newsboxcar" style="text-align: center;width: 50%;">
                                <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=8">
                                    <img src="<?php echo $value['thumb'] ?>" alt="" width="80%">

                                    <p class="car-name"><?php echo $value['title'] ?></p>
                                </a>
                            </li>

                            <?php
                            if($i==2){

                                echo '</ul>';
                                $i=0;
                                echo '<ul class="mui-flex">';
                            }
                            ?>



                        <?php }
                        echo '</ul>';
                        ?>



                    <div class="last-car"></div>
                    <a href="javascript:;">
                        <div class="look-more news-more-car">
                            点击更多
                        </div>
                    </a>
                </div>
                <!-- end 列表-->
                <!-- footer-->
               <!--  <div class="footer">
                    <ul>
                        <li><a href="index.php" style="color:#fff;"><img src="web/images/first.png" width="18" height="17"/><br>首页</a></li>
                        <li class="box-phone"><img src="web/images/phone.png" width="18" height="17"/><br>电话</li>
                        <li class="box-qq"><img src="web/images/qq.png" width="18" height="17"/><br>扣扣</li>
                        <li><a href="index.php?c=page&a=map" style="color:#fff;"><img src="web/images/map.png" width="18" height="17"/><br>地图</a></li>
                    </ul>
                </div> -->
                <!-- end footer-->



            </div>
<!--            end 车辆展示-->


<!--            木箱展示-->
            <div class="swiper-slide">

                <!-- 列表-->
                <div class="list-wrap" style="padding-bottom:100px">
                    <?php

                    $i=0;
                    echo '<ul class="mui-flex">';

                    foreach ($boxall as $value) {

                        $i++;
                        ?>
                        <li class="cell fixed newsboxbox" style="text-align: center;width: 50%;">
                            <a href="index.php?c=index&a=newsDetail&id=<?php echo $value['id'] ?>&catid=9">
                                <img src="<?php echo $value['thumb'] ?>" alt="" width="80%">

                                <p class="car-name"><?php echo $value['title'] ?></p>
                            </a>
                        </li>

                        <?php
                        if($i==2){

                            echo '</ul>';
                            $i=0;
                            echo '<ul class="mui-flex">';
                        }
                        ?>

                    <?php }
                    echo '</ul>';
                    ?>
                    <div class="last-box"></div>
                    <a href="javascript:;">
                        <div class="look-more news-more-box">
                            点击更多
                        </div>
                    </a>
                </div>
                <!-- end 列表-->
                <!-- footer-->
              <!--   <div class="footer">
                    <ul>
                        <li><a href="index.php" style="color:#fff;"><img src="web/images/first.png" width="18" height="17"/><br>首页</a></li>
                        <li class="box-phone"><img src="web/images/phone.png" width="18" height="17"/><br>电话</li>
                        <li class="box-qq"><img src="web/images/qq.png" width="18" height="17"/><br>扣扣</li>
                        <li><a href="index.php?c=page&a=map" style="color:#fff;"><img src="web/images/map.png" width="18" height="17"/><br>地图</a></li>
                    </ul>
                </div> -->
                <!-- end footer-->



            </div>
<!--            end 木箱展示-->


<!--            联系我们-->
            <div class="swiper-slide">



                <!-- 联系内容-->
                <div class="show" style="padding-bottom:100px">
                    <div class="btn-blue">芜湖公司</div>
                    <p class="mt10">零散业务(电 话)：0553-2960887、2960885 </p>
                    <p class="mt10">大宗业务(电 话)：0553-5860890、13955350890</p>
                    <p class="mt10">Q Q:    420403213</p>
                    <p class="mt10">邮 箱： luojunhai@whdhwl.com</p>
                    <p class="mt10">芜湖公司地址：安徽省芜湖市镜湖区长江南路26号（皖江雅居小区隔壁，钢材市场院内）</p>
                    <div class="btn-blue mt22">铜陵分公司</div>
                    <p class="mt10">电  话：0562-2651890</p>
                    <p class="mt10">手  机：18056211890</p>
                    <p class="mt10">铜陵公司地址：安徽省铜陵市狮子山区皖中南物流园（国际汽车城内）</p>
                    <div class="btn-blue mt22">服务热线</div>
                    <p class="mt10">24小时统一服务热线：<span class="num">400 600 1890</span></p>
                    <br/>
                    <iframe width="304" height="374" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/a1Kh8"></iframe>
                </div>
                <!-- end 联系内容-->
                <!-- footer-->
                <!-- <div class="footer">
                    <ul>
                        <li><a href="index.php" style="color:#fff;"><img src="web/images/first.png" width="18" height="17"/><br>首页</a></li>
                        <li class="box-phone"><img src="web/images/phone.png" width="18" height="17"/><br>电话</li>
                        <li class="box-qq"><img src="web/images/qq.png" width="18" height="17"/><br>扣扣</li>
                        <li><a href="index.php?c=page&a=map" style="color:#fff;"><img src="web/images/map.png" width="18" height="17"/><br>地图</a></li>
                    </ul>
                </div> -->
                <!-- end footer-->


            </div>
<!--            end 联系我们-->








        </div>
    </div>
<!--    end 主体部分-->

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



<!-- Swiper JS -->
<script src="web/js/jquery-2.1.4.min.js"></script>
<script src="web/js/unslider.js"></script>
<script src="web/js/float.js"></script>
<script src="web/js/swiper.js"></script>
<script src="web/js/index.js"></script>

<!-- Initialize Swiper -->
<script>

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

    function GetQueryString(name)
    {
         var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
         var r = window.location.search.substr(1).match(reg);
         if(r!=null)return  unescape(r[2]); return null;
    }
    var catid=GetQueryString("catid");
    var initialSlide=0;
    if(catid==7){
        initialSlide=4;
    }else if(catid==8){
        initialSlide=5;
    }else if(catid==9){
        initialSlide=6;
    }else if(catid==10){
        initialSlide=3;
    }else if(catid==12 ||catid==21||catid==23||catid==24){
        initialSlide=2;
    }

    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
        initialSlide :1,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
//        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        initialSlide :1,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;

    $(function(){
        var ch = $('.car').height();
        var cb = $('.box').height();
        var cs= $('.case').height();
        $('.swiper-car').height(ch);
        $('.swiper-box').height(cb);
        $('.swiper-case').height(cs);

        var containerHeight = $('.swiper-slide').height();
        console.log(containerHeight);
    })

</script>

<script>

    //加载更多成功案例
    $('.news-more-case').click(function(){
        var id = $('.newsboxcase').length;
//            console.log(id);
        $.ajax({
            type:"post",
            url:"index.php?c=category&a=more",
            dataType:"json",
            data:{
                id:id,
                catid:10
            },
            success:function(data){

                var html = '';

                for(var i=0;i<data.length;i++){


                    html += '<a class="newsboxcase" href="index.php?c=index&a=newsDetail&id='+data[i].id+'&catid=10">';
                    html += '<ul class="mui-flex bg-white">';
                    html += '<li class="cell fixed" style="width: 31%;text-align: center">';
                    html += '<div style="padding: 10px;">';
                    html += '<img src="'+data[i].thumb+'" alt="" width="80%" >';
                    html += '</div>';
                    html += '</li>';
                    html += '<li class="cell" >';
                    html += '<div style="padding: 10px;">';
                    html += '<p>'+data[i].title+'</p>';
                    html += '<span class="mt5">'+data[i].description+'</span>';
                    html += '</div></li></ul></a>';



                }
                $(".last-case").before(html);
            }
        });
    });
</script>
<script>

    //加载新闻
    $('.news-more').click(function(){
        var id = $('.newsbox').length;
//            console.log(id);
        $.ajax({
            type:"post",
            url:"index.php?c=index&a=newsmore",
            dataType:"json",
            data:{
                id:id
            },
            success:function(data){

                var html = '';

                for(var i=0;i<data.length;i++){



                    html += '<a class="newsbox" href="index.php?c=index&a=newsDetail&id='+data[i].id+'&catid=7">';
                    html += '<ul class="mui-flex">';
                    html += '<li class="cell fixed list-title" >'+data[i].title+'</li>';
                    html += '<li class="cell fixed list-date" style="width: 100%;height: 41px;line-height: 41px;">['+data[i].inputtime+']</li>';
                    html += '</ul></a>';


                }
                $(".last-news").before(html);
            }
        });
    });

</script>
<script>
    //加载车辆展示

    $('.news-more-car').click(function(){
        var id = $('.newsboxcar').length;
            console.log(id);
        $.ajax({
            type:"post",
            url:"index.php?c=category&a=more",
            dataType:"json",
            data:{
                id:id,
                catid:8
            },
            success:function(data){

                var html = '<ul class="mui-flex">';

                for(var i=0;i<data.length;i++){

                    var j=i+1;
                    html += '<li class="cell fixed newsboxcar" style="text-align: center;width: 50%;">';
                    html += '<a  href="index.php?c=index&a=newsDetail&id='+data[i].id+'&catid=8">';
                    html += '<img src="'+data[i].thumb+'" alt="" width="80%">';
                    html += '<p class="car-name">'+data[i].title+'</p>';
                    html += '</a></li>';
                    if(j%2==0){

                        html += '</ul><ul class="mui-flex">';

                    }






                }
                html += '</ul>';

                $(".last-car").before(html);
                galleryTop.updateContainerSize();
            }
        });
    });
</script>

<script>
    //加载木箱

    $('.news-more-box').click(function(){
        var id = $('.newsboxbox').length;
            console.log(id);
        $.ajax({
            type:"post",
            url:"index.php?c=category&a=more",
            dataType:"json",
            data:{
                id:id,
                catid:9
            },
            success:function(data){

                var html = '<ul class="mui-flex">';

                for(var i=0;i<data.length;i++){

                    var j=i+1;

                    html += '<li class="cell fixed newsboxbox" style="text-align: center;width: 50%;">';
                    html += '<a  href="index.php?c=index&a=newsDetail&id='+data[i].id+'&catid=9">';
                    html += '<img src="'+data[i].thumb+'" alt="" width="80%">';
                    html += '<p class="car-name">'+data[i].title+'</p>';
                    html += '</a></li>';
                    if(j%2==0){

                        html += '</ul><ul class="mui-flex">';

                    }



                }
                html += '</ul>';
                $(".last-box").before(html);
            }
        });
    });
</script>
</body>
</html>
