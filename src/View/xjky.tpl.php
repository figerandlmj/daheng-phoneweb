<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>芜湖大恒物流有限公司</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
    <link rel="stylesheet" href="web/css/phone_base.css">
    <link rel="stylesheet" href="web/css/dh.css">
    <link rel="stylesheet" href="web/css/swiper.min.css">
    <style type="text/css"> 
        .search{ 
            text-align: center; 
            position:relative; 
        } 
        .autocomplete{ 
            border: 1px solid #9ACCFB; 
            background-color: white; 
            text-align: left; 
            z-index: 999999999;
        } 
        .autocomplete li{ 
            list-style-type: none; 
        } 
        .clickable { 
            cursor: default; 
        } 
        .highlight { 
            background-color: #9ACCFB; 
        } 
    </style> 
</head>
<body>
<div class="container">
    <!-- header-->
    <div class="header">
        <ul class="mui-flex">
            <li class="cell fixed" style="width: 30px;">
                <a href="index.php?catid=12">
                    <span class="back"></span>
                </a>
            </li>
            <li class="cell fixed" style="width: 50%;">
                <a href="index.php">
                    <img src="web/images/logo.png" alt="" width="100%" style="min-width: 160px;">
                </a>
            </li>
        </ul>
    </div>
    <!-- end header-->
    <!-- nav-->
    <div class="nav " style="text-align: center;line-height: 40px;color: #ffffff;font-size: 16px;">

            <?php echo $data['title'] ?>

    </div>
    <!-- end nav-->
    <!-- 内容-->
    <div class="show bg-white">
        <!-- news title-->
        <div class="show-title" style="text-align: center">
            <?php echo $data['title'] ?>
        </div>
<!--        <div class="hit">-->
<!--            浏览次数：80-->
<!--        </div>-->
        <!-- end title-->
        <!-- news content-->
        <div class="show-content">
            <?php echo $data['content'] ?>
        </div>
        <!-- 在线报价-->
        <div class="show-title" style="text-align: center">
            在线报价
        </div>
        <div class="online-price" style="margin-bottom:60px;">
           <!--  <form action="index.php?c=region&a=count" method="post"> -->


            <ul class="mui-flex">
                <li class="cell fixed" style="width: 60px;">
                    <p class="font-305c98">出发地</p>
                    <ul class="mui-flex start">
                        <li class="cell " >
<!--                            <input type="text" value="安徽芜湖" readonly="readonly">-->
                            <select  class="place" name="start_province"  >
                                <option value="">芜湖</option>
                            </select>
                        </li>
<!--                        <li class="cell city " style="display: none">-->
<!--                            <select  class="place CitySelect "  name="start_city"></select>-->
<!--                        </li>-->
<!--                        <li class="cell area " style="display: none">-->
<!--                            <select  class="place DistrictSelect " name="start_area" ></select>-->
<!--                        </li>-->
                    </ul>
                </li>
                <li class="cell fixed change-btn" style="margin-left: 5px;width: 25px;position: relative;">
                    <img src="web/images/change-icon.png" alt="" width="20" style="position: absolute;top: 50%;margin-top: 0px;">
                </li>
                <li class="cell" style="text-align: right">
                    <p class="font-305c98">到达地</p>

                    <ul class="mui-flex end">
                        <!-- <li class="cell">
                            <select  class="place ProvinceSelect" name="end_province_id" >
                                <option value="">请选择</option>
                            </select>
                        </li>
                        <li class="cell city " style="display: none">
                            <select  class="place CitySelect " name="end_city_id" ></select>
                        </li> -->
                        <li class="cell" id = "search-province"> 
                            <input  type="text" value="" id="search-province-text" name="search-text" data-id="" placeholder="请输入省/直辖市"/> 
                        </li>
                        <li class="cell" id = "search-city" style="margin-left:10px;display:none;"> 
                            <input  type="text" value="" id="search-city-text" name="search-text" placeholder="请输入城市/县区/乡镇"/> 
                        </li>
                    </ul>
                </li>
            </ul>
                <ul class="mui-flex mt10">
                    <li class="cell"></li>
                    <li class="cell fixed" style="width: 20px;">
                        <?php if($data['is_self']==0){
                            ?>
                            <input type="radio" name="type" value="1">
                            <?php
                        }else{
                            ?>
                            <input type="radio" name="type" value="1" checked="checked">
                            <?php
                        } ?>
<!--                        <input type="radio" name="type" value="1">-->

                    </li>
                    <li class="cell fixed" style="width: 40px;">自提</li>
                    <li class="cell fixed" style="width: 20px;">
                        <?php if($data['is_self']==0){
                            ?>
                            <input type="radio" name="type" value="0" checked="checked">
                            <?php
                        }else{
                            ?>
                            <input type="radio" name="type" value="0" >
                            <?php
                        } ?>
                    </li>
                    <li class="cell fixed" style="width: 40px;">派送</li>
                    <li class="cell"></li>
                </ul>
            <ul class="mui-flex mt10">
                <li class="cell font-305c98 fixed" style="width: 60px;line-height: 32px;">货物重量</li>
                <li class="cell"><input type="text" value="<?php echo $data['weight'] ?>" placeholder="请输入货物重量" name="weight" ></li>
                <li class="cell fixed" style="width: 20px;line-height: 32px;text-align: right">kg</li>
            </ul>
            <ul class="mui-flex mt10">
                <li class="cell font-305c98 fixed" style="width: 60px;line-height: 32px;">货物体积</li>
                <li class="cell"><input type="text" value="<?php echo $data['volume'] ?>" placeholder="请输入货物体积" name="volume"  ></li>
                <li class="cell fixed" style="width: 20px;line-height: 32px;text-align: right">㎥</li>
            </ul>
            <ul class="mui-flex mt10">
                <li class="cell count-button"><input type="submit" class="btn" value="计算" ></li>
            </ul>
           <!--  </form> -->
            <ul class="mui-flex mt10">
                <li class="cell">
                    <p>单价 (元/kg)</p>
                    <input id="unit" type="text" value="<?php echo $data['send_price'] ?>" readonly>
                </li>
                <li class="cell fixed" style="width: 20px;line-height: 69px;text-align: center">
                    <!-- × -->
                </li>
                <li class="cell">
                    <p>计费重量 (kg)</p>
                    <input id="count_weight" type="text" value="<?php echo $data['new_weight'] ?>" readonly>
                </li>
                <li class="cell fixed" style="width: 20px;line-height: 69px;text-align: center">
                    <!-- ＝ -->
                </li>
                <li class="cell">
                    <p>总价 (元)</p>
                    <input id="total_price" type="text" value="<?php echo $data['total_price'] ?>" readonly>
                </li>
            </ul>
            <p style="color: #f59807;display:none;" class="add-tip">* 芜湖到<label class="to_area_name"></label>最低自提费为<label class="lowest_self_price"></label>元,最低派送费为<label class="lowest_price"></label>元</p>
            <div class="intro">
                说明：总价=单价*计费重量，如果单次发货计费重量低于首重，总价直接显示最低收费。
            </div>
        </div>
        <!-- end 在线报价-->
        <!-- end news content-->
    </div>
    <!-- end 内容-->
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
$(function(){
    search("#search-province","#search-province-text",1);
    search("#search-city","#search-city-text",2);
    var to_province_id;
    function search(search,search_text,is){
        //取得div层 
        var $search = $(search); 
        //取得输入框JQuery对象 
        var $searchInput = $search.find($(search_text)); 
        //关闭浏览器提供给输入框的自动完成 
        $searchInput.attr('autocomplete','off'); 
        //创建自动完成的下拉列表，用于显示服务器返回的数据,插入在搜索按钮的后面，等显示的时候再调整位置 
        var $autocomplete = $('<div class="autocomplete"></div>') 
        .hide() 
        .insertAfter($(search_text)); 
        //清空下拉列表的内容并且隐藏下拉列表区 
        var clear = function(){ 
            $autocomplete.empty().hide(); 
        }; 
        //注册事件，当输入框失去焦点的时候清空下拉列表并隐藏 
        $searchInput.blur(function(){ 
            setTimeout(clear,500); 
        }); 
        //下拉列表中高亮的项目的索引，当显示下拉列表项的时候，移动鼠标或者键盘的上下键就会移动高亮的项目，想百度搜索那样 
        var selectedItem = null; 
        //timeout的ID 
        var timeoutid = null; 
        //设置下拉项的高亮背景 
        var setSelectedItem = function(item){ 
            //更新索引变量 
            selectedItem = item ; 
            //按上下键是循环显示的，小于0就置成最大的值，大于最大值就置成0 
            if(selectedItem < 0){ 
                selectedItem = $autocomplete.find('li').length - 1; 
            }else if(selectedItem > $autocomplete.find('li').length-1 ) { 
                selectedItem = 0; 
            }  
            
            //首先移除其他列表项的高亮背景，然后再高亮当前索引的背景 
            $autocomplete.find('li').removeClass('highlight') 
            .eq(selectedItem).addClass('highlight'); 
        };

        var ajax_request = function(){ 
            //ajax服务端通信 
            if(is==1){
                $("#search-city-text").val("");
                $('#search-city').hide();
                $.ajax({
                    'url':'index.php?c=region&a=get_province', //服务器的地址 
                    'data':{
                        'province':$searchInput.val()
                    }, //参数 
                    'dataType':'json', //返回数据类型 
                    'type':'GET', //请求类型 
                    'success':function(data){ 
                        // alert(88);
                        if(data.length) { 
                            //遍历data，添加到自动完成区 
                            $.each(data, function(index,term) { 
                                //创建li标签,添加到下拉列表中 
                                $('<li></li>').text(term.to_province_name).attr("data-id",term.to_province_id).appendTo($autocomplete) 
                                .addClass('clickable') 
                                .hover(function(){ 
                                    //下拉列表每一项的事件，鼠标移进去的操作 
                                    $(this).siblings().removeClass('highlight'); 
                                    $(this).addClass('highlight'); 
                                    selectedItem = index; 
                                },function(){ 
                                    //下拉列表每一项的事件，鼠标离开的操作 
                                    $(this).removeClass('highlight'); 
                                    //当鼠标离开时索引置-1，当作标记 
                                    selectedItem = -1; 
                                }) 
                                .click(function(){ 
                                    //鼠标单击下拉列表的这一项的话，就将这一项的值添加到输入框中 
                                    $searchInput.val(term.to_province_name); 
                                    $searchInput.attr("data-id",term.to_province_id); 
                                    to_province_id=term.to_province_id;
                                    //显示城市选择框
                                    $('#search-city').show();
                                    //清空并隐藏下拉列表 
                                    $autocomplete.empty().hide(); 
                                }); 
                            });//事件注册完毕 
                            //设置下拉列表的位置，然后显示下拉列表 
                            var ypos = $searchInput.position().top; 
                            var xpos = $searchInput.position().left; 
                            $autocomplete.css('width',$searchInput.css('width')); 
                            $autocomplete.css({'position':'relative','left':xpos + "px",'top':ypos +"px"}); 
                            setSelectedItem(0); 
                            //显示下拉列表 
                            $autocomplete.show(); 
                        } 
                    } 
                });
            }else if(is==2){
                // var to_province_id=$("#search-province-text").data("id");
                console.log(to_province_id);
                $.ajax({ 
                    'url':'index.php?c=region&a=get_city', //服务器的地址 
                    'data':{
                        'city':$searchInput.val(),
                        'to_province_id':to_province_id
                    }, //参数 
                    'dataType':'json', //返回数据类型 
                    'type':'GET', //请求类型 
                    'success':function(data){ 
                        if(data.length) { 
                            //遍历data，添加到自动完成区 
                            $.each(data, function(index,term) { 
                                //创建li标签,添加到下拉列表中 
                                $('<li></li>').text(term.to_city_name).appendTo($autocomplete) 
                                .addClass('clickable') 
                                .hover(function(){ 
                                    //下拉列表每一项的事件，鼠标移进去的操作 
                                    $(this).siblings().removeClass('highlight'); 
                                    $(this).addClass('highlight'); 
                                    selectedItem = index; 
                                },function(){ 
                                    //下拉列表每一项的事件，鼠标离开的操作 
                                    $(this).removeClass('highlight'); 
                                    //当鼠标离开时索引置-1，当作标记 
                                    selectedItem = -1; 
                                }) 
                                .click(function(){ 
                                    //鼠标单击下拉列表的这一项的话，就将这一项的值添加到输入框中 
                                    $searchInput.val(term.to_city_name); 
                                    //清空并隐藏下拉列表 
                                    $autocomplete.empty().hide(); 
                                }); 
                            });//事件注册完毕 
                            //设置下拉列表的位置，然后显示下拉列表 
                            var ypos = $searchInput.position().top; 
                            var xpos = $searchInput.position().left; 
                            $autocomplete.css('width',$searchInput.css('width')); 
                            $autocomplete.css({'position':'relative','left':xpos + "px",'top':ypos +"px"}); 
                            setSelectedItem(0); 
                            //显示下拉列表 
                            $autocomplete.show(); 
                        } 
                    } 
                });
            }
             
        }; 
        //对输入框进行事件注册 
        $searchInput

        .bind('input propertychange', function(){
            $autocomplete.empty().hide(); 
            clearTimeout(timeoutid); 
            timeoutid = setTimeout(ajax_request,100);
        })
 
        .keyup(function(event) { 
            //字母数字，退格，空格 
            if(event.keyCode > 40 || event.keyCode == 8 || event.keyCode ==32) { 
                //首先删除下拉列表中的信息 
                $autocomplete.empty().hide(); 
                clearTimeout(timeoutid); 
                timeoutid = setTimeout(ajax_request,100); 
            } 
            else if(event.keyCode == 38){ 
                //上 
                //selectedItem = -1 代表鼠标离开 
                if(selectedItem == -1){ 
                    setSelectedItem($autocomplete.find('li').length-1); 
                } 
                else { 
                    //索引减1 
                    setSelectedItem(selectedItem - 1); 
                } 
                event.preventDefault(); 
            } 
            else if(event.keyCode == 40) { 
                //下 
                //selectedItem = -1 代表鼠标离开 
                if(selectedItem == -1){ 
                    setSelectedItem(0); 
                } 
                else { 
                    //索引加1 
                    setSelectedItem(selectedItem + 1); 
                } 
                event.preventDefault(); 
            } 
        }) 
        .keypress(function(event){ 
            //enter键 
            if(event.keyCode == 13) { 
                //列表为空或者鼠标离开导致当前没有索引值 
                if($autocomplete.find('li').length == 0 || selectedItem == -1) { 
                    return; 
                } 
                $searchInput.val($autocomplete.find('li').eq(selectedItem).text());
                if(is==1){
                    $searchInput.attr("data-id",$autocomplete.find('li').eq(selectedItem).data("id")); 
                    to_province_id=$autocomplete.find('li').eq(selectedItem).data("id");
                    //显示城市选择框
                    $('#search-city').show();
                } 
                $autocomplete.empty().hide(); 
                event.preventDefault(); 
            } 
        }) 
        .keydown(function(event){ 
            //esc键 
            if(event.keyCode == 27 ) { 
                $autocomplete.empty().hide(); 
                event.preventDefault(); 
            } 
        }); 
        //注册窗口大小改变的事件，重新调整下拉列表的位置 
        $(window).resize(function() { 
            var ypos = $searchInput.position().top; 
            var xpos = $searchInput.position().left; 
            $autocomplete.css('width',$searchInput.css('width')); 
            $autocomplete.css({'position':'relative','left':xpos + "px",'top':ypos +"px"}); 
        }); 
    } 


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

    var chosetext = "<option value='0'>-请选择-</option>";
    //加载省
    // $.ajax({
    //    type: "POST",
    //    url: "index.php?c=region&a=province",
    //    dataType: "json",
    //    success:function(data){
    //        var length=data.length;
    //        for(var i=0;i<length;i++){
    //            var html = "<option id='province_id" + data[i].to_province_id + "'value='" + data[i].to_province_id + "' >" + data[i].to_province_name + "</option>";
    //            $(".end .ProvinceSelect").append(html);
    //        }

    //    },
    //    error: function(err) {
    //        alert('Ajax error!');
    //    }
    // });

     //到达地加载
     //加载市
     // $('.end .ProvinceSelect').change(function () {
     //     $('.end .city').show();
     //     $(".end .CitySelect").empty();
     //     $(".end .CitySelect").append(chosetext);
     //     var id = $(".end .ProvinceSelect").val();
     //     $.ajax({
     //         type: "get",
     //         url: "index.php?c=region&a=city&id=" + id,
     //         dataType: "json",
     //         success: function (data) {

     //             var length = data.length;
     //             for (var i = 0; i < length; i++) {

     //                 var html = "<option id='province_id" + data[i].to_province_id + "'value='" + data[i].to_city_name + "' >" + data[i].to_city_name + "</option>";
     //                 $(".end .CitySelect").append(html);
     //             }


     //         },
     //         error: function (err) {
     //             alert('Ajax error!');
     //         }

     //     });

     // });

    //计算价格ajax
    $('.count-button').on("click",function() {

        var to_province=to_province_id;
        var to_city=$("#search-city-text").val();
        // alert(to_province);
        // alert(to_city);

        // var to_province = $('[name="end_province_id"]').val();
        // var to_city = $('[name="end_city_id"]').val();
        var type = $("input[name='type']:checked").val();
        var weight = $('[name="weight"]').val();
        var volume = $('[name="volume"]').val();


        $.ajax({

            type :"POST",
            dataType: "json",
            url: "index.php?c=region&a=count",
            data:{
                end_province_id:to_province,
                end_city_id:to_city,
                type:type,
                weight:weight,
                volume:volume
            },
            success:function(data){
              if(data.errorCode==0){
                $('#unit').val(data.price['send_price']);
                $('#count_weight').val(data.price['new_weight']);
                $('#total_price').val(data.price['total_price']);
                $(".to_area_name").text(data.price['to_province_name']+data.price['to_city_name']);
                $(".lowest_self_price").text(data.price['lowest_self_price']);
                $(".lowest_price").text(data.price['lowest_price']);
                $(".add-tip").show()
              }
            },
            error: function(err){
                alert("Ajax error!");
            }


        });
    });

})

</script>
</html>