<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="YONGDA商城" />
        <meta name="Description" content="YONGDA商城" />
        
        <title>YONGDA商城 - Powered by YongDa</title>
        
        <link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/Public/Home/css/magiczoomplus.css" />
        
         <style type="text/css">
            table {border:1px solid #dddddd; border-collapse: collapse; width:99%; margin:auto;}
            td {border:1px solid #dddddd;}
            #consignee_addr {width:450px;}
        </style>
        
    </head>
    <body class="index_body">
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo" src="/Public/Home/images/logo.gif"></a>

            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font id="ECS_MEMBERZONE">
                        <div id="append_parent"></div>
                        欢迎光临本店&nbsp;
                        <?php if(!empty($_SESSION['user_id'])) echo $_SESSION['user_name'] . "&nbsp; &nbsp;<a href='".U('User/logout')."'>退出</a>" ; else echo "<a href='".U('User/login')."'>登录</a>&nbsp;&nbsp;<a href='".U('User/register')."'>注册</a>";?>
                    </font>
                </div>
                <div style="float: right;">
                    <a href="<?php echo U('Cart/cartList');?>">查看购物车</a>
                    |
                    <a href="/index.php">选购中心</a>
                    |
                    <a href="#">标签云</a>
                    |
                    <a href="#">报价单</a>
                </div>
            </div>
            <div id="mainNav" class="clearfix">
                <a href="/index.php" class="cur">首页<span></span></a>
               <?php foreach ($navData as $k => $v): ?>
                    <a href="<?php echo U('Index/category', array('cate_id'=>$v['id']), false);?>"><?php echo $v['cate_name'];?><span></span></a>
               <?php endforeach ?>

                
            </div>
        </div>

        <div class="header_bg">
            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <form id="searchForm" method="get" action="#">
                <input name="keywords" id="keyword" type="text" />
                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('./images/sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />

            </form>
        </div>
        <div class="blank"></div>
        <div class="block box">

        <div class="block clearfix">

            <div class="AreaL">

                <h3><span>商品分类</span></h3> 
                <div id="category_tree" class="box_1">
                    <?php foreach ($cateData as $k => $v): ?>
                        <?php if($v['pid'] == 0) {?>
                        <dl>
                            <dt><a href="<?php echo U('category', array('cate_id'=>$v['id']), false);?>" target="_blank"><?php echo $v['cate_name']?></a></dt>
                            <dd>
                                <?php foreach ($cateData as $k1 => $v1): ?>
                                    
                                        <?php if($v1['pid'] == $v['id']) {?>
                                    <a href="<?php echo U('category', array('cate_id'=>$v['id']), false);?>"  target="_self"><?php echo $v1['cate_name'];?></a>
                                    <?php };?>
                                <?php endforeach ?>
                            </dd>
                        </dl>
                        <?php }?>
                    <?php endforeach ?>

                </div>
                <div class="blank"></div>
                <div class="box">
                    <h3><span>销售排行榜</span></h3> 
                    <div class="box_1">
                        <div class="top10List clearfix">
                            <ul class="clearfix">
                                <img src="/Public/Home/images/top_1.gif" class="iteration">
                                    <li class="topimg">
                                        <a href="#"><img src="/Public/Home/images/3_thumb_G_1241422082679.jpg" alt="" class="samllimg"></a>
                                    </li>

                                    <li class="iteration1">
                                        <a href="#" title="">诺基亚原装58...</a><br />
                                        本店售价：<font class="f1">￥68元</font><br />
                                    </li>
                            </ul>
                            <ul class="clearfix">
                                <img src="/Public/Home/images/top_2.gif" class="iteration">
                                    <li class="topimg">
                                        <a href="#"><img src="/Public/Home/images/24_thumb_G_1241971981429.jpg" alt="" class="samllimg"></a>
                                    </li>

                                    <li class="iteration1">
                                        <a href="#" title="">P806</a><br />
                                        本店售价：<font class="f1">￥2000元</font><br />
                                    </li>
                            </ul>
                            <ul class="clearfix">
                                <img src="/Public/Home/images/top_3.gif" class="iteration">
                                    <li class="topimg">
                                        <a href="#"><img src="/Public/Home/images/12_thumb_G_1241965978410.jpg" alt="" class="samllimg"></a>
                                    </li>

                                    <li class="iteration1">
                                        <a href="#" title="">摩托罗拉A81...</a><br />
                                        本店售价：<font class="f1">￥983元</font><br />
                                    </li>
                            </ul>
                            <ul class="clearfix">
                                <img src="/Public/Home/images/top_4.gif" class="iteration">

                                    <li>
                                        <a href="#" title="">诺基亚E66</a><br />
                                        本店售价：<font class="f1">￥2298元</font><br />
                                    </li>
                            </ul>
                            <ul class="clearfix">
                                <img src="/Public/Home/images/top_5.gif" class="iteration">

                                    <li>
                                        <a href="#" title="">多普达Touc...</a><br />
                                        本店售价：<font class="f1">￥5999元</font><br />
                                    </li>
                            </ul>
                            <ul class="clearfix">
                                <img src="/Public/Home/images/top_6.gif" class="iteration">

                                    <li>
                                        <a href="#" title="">三星BC01</a><br />
                                        本店售价：<font class="f1">￥280元</font><br />
                                    </li>
                            </ul>
                            <ul class="clearfix">
                                <img src="/Public/Home/images/top_7.gif" class="iteration">

                                    <li>
                                        <a href="#" title="">飞利浦9@9v</a><br />
                                        本店售价：<font class="f1">￥399元</font><br />
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
       
            </div>

            <div class="AreaM">
                <div class="box clearfix">
                    <div id="focus">
                        <img src="/Public/Home/images/111.jpg" width="515" height="160" alt="" />
                    </div>       
                </div>

                <!-- 热卖商品 -->
                <div class="blank"></div>
                <div class="itemTit" id="itemHot">
                    <div class="tit">热卖商品</div>
                    <h2 class="h2bg"><a href="#" >GSM手机</a></h2>
                    <h2 class="h2bg"><a href="#" >双模手机</a></h2>
                    <h2 class="h2bg"><a href="#" >充值卡</a></h2>
                </div>
                <div id="show_hot_area" class="clearfix">
                    
                    <?php foreach ($hotData as $k => $v): ?>
                        <div class="goodsItem">
                            <a href="<?php echo U('detail', array('id'=>$v['id']), false)?>"><img src="<?php echo $viewPath. $v['goods_thumb'];?>" alt="<?php echo $v['goods_name'];?>" class="goodsimg"></a><br />
                            <p class="f1"><a href="<?php echo U('detail', array('id'=>$v['id']), false)?>" title="<?php echo $v['goods_name'];?>"><?php echo $v['goods_name'];?></a></p>
                            <font class="market">￥<?php echo $v['goods_price'] * 1.3;?>元</font><br />
                            <font class="f1">
                                ￥<?php echo $v['goods_price'];?>元                     
                            </font>
                        </div>
                    <?php endforeach ?>
                </div>

                <!-- 精品推荐 -->
                <div class="blank"></div>
                <div class="itemTit" id="itemBest">
                    <div class="tit">精品推荐</div>
                    <h2 class="h2bg"><a href="#" >GSM手机</a></h2>
                    <h2 class="h2bg"><a href="#" >双模手机</a></h2>
                    <h2 class="h2bg"><a href="#" >充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >联通手机充值卡</a></h2>
                </div>
                <div id="show_best_area" class="clearfix">
                    <?php foreach ($bestData as $k => $v): ?>
                        
                    
                        <div class="goodsItem">
                            <a href="<?php echo U('detail', array('id'=>$v['id']), false)?>"><img src="<?php echo $viewPath. $v['goods_thumb'];?>" alt="<?php echo $v['goods_name'];?>" class="goodsimg"></a><br />
                            <p class="f1"><a href="<?php echo U('detail', array('id'=>$v['id']), false)?>" title="<?php echo $v['goods_name'];?>"><?php echo $v['goods_name'];?></a></p>
                            <font class="market">￥<?php echo $v['goods_price'] * 1.3 ;?>元</font><br />
                            <font class="f1">
                                ￥<?php echo $v['goods_price'];?>元                     
                            </font>
                        </div>

                    <?php endforeach ?>

                </div>

                <!-- 新品上架 -->
                <div class="blank"></div>
                <div class="itemTit" id="itemNew">
                    <div class="tit">新品上架</div>
                    <h2 class="h2bg"><a href="#" >双模手机</a></h2>
                    <h2 class="h2bg"><a href="#" >充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >移动手机充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >联通手机充值卡</a></h2>
                </div>
                <div id="show_new_area" class="clearfix">
                    
                    <?php foreach ($newData as $k => $v): ?>
                        
                 
                        <div class="goodsItem">
                            <a href="<?php echo U('detail', array('id'=>$v['id']), false)?>"><img src="<?php echo $viewPath. $v['goods_thumb'];?>" alt="<?php echo $v['goods_name'];?>" class="goodsimg"></a><br />
                            <p class="f1"><a href="<?php echo U('detail', array('id'=>$v['id']), false)?>" title="<?php echo $v['goods_name'];?>"><?php echo $v['goods_name'];?></a></p>
                            <font class="market">￥<?php echo $v['goods_price'] * 1.4;?>元</font><br />
                            <font class="f1">
                                ￥<?php echo $v['goods_price'];?>元                     
                            </font>
                        </div>
                <?php endforeach ?>

                </div>

            </div>


            <div class="AreaL" style="float: right;">

                <h3><span>新闻快讯</span></h3> 
                <div class="NewsList tc box_1" style="border-top: medium none;">
                    <ul>
                        <li>
                            <a href="#" title="三星SGHU308说明书下载">三星SGHU308说明书下载</a>
                        </li>
                        <li>
                            <a href="#" title="手机游戏下载">手机游戏下载</a>
                        </li>
                        <li>
                            <a href="#" title="促销诺基亚N96">促销诺基亚N96</a>
                        </li>
                        <li>
                            <a href="#" title="诺基亚5320 促销">诺基亚5320 促销</a>
                        </li>
                        <li>
                            <a href="#" title="3G知识普及">3G知识普及</a>
                        </li>
                        <li>
                            <a href="#" title="诺基亚6681手机广告欣赏">诺基亚6681手机广告欣赏</a>
                        </li>
                        <li>
                            <a href="#" title="飞利浦9@9促销">飞利浦9@9促销</a>
                        </li>
                        <li>
                            <a href="#" title="800万像素超强拍照机 LG Viewty Smart再曝光">800万像素超强拍照机 LG V...</a>
                        </li>
                    </ul>
                </div>

                <div class="blank"></div>
                <div class="box">  
                    <h3><span>订单查询</span></h3>
                    <div class="box_1">
                        <div class="boxCenterList">
                            <form name="ecsOrderQuery">
                                <input name="order_sn" class="inputBg" type="text" /><br />
                                <div class="blank5"></div>
                                <input value="查询该订单号" class="bnt_blue_2"  type="button" />
                            </form>
                            <div id="ECS_ORDER_QUERY" style="margin-top: 8px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blank"></div>
                <div class="blank"></div><div class="box">
                    <h3><span>邮件订阅</span></h3>
                    <div class="box_1">

                        <div class="boxCenterList RelaArticle">
                            <input id="user_email" class="inputBg" type="text" /><br />
                            <div class="blank5"></div>
                            <input class="bnt_blue" value="订阅"  type="button" />
                            <input class="bnt_bonus" value="退订"  type="button" />
                        </div>
                    </div>
                </div>
                <div class="blank"></div>
                <div class="blank5"></div><style type="text/css">
                    .boxCenterList form{display:inline;}
                    .boxCenterList form a{color:#404040; text-decoration:underline;}
                </style>
                <div class="box" style="display:none">  
                    <h3><span>发货查询</span></h3>
                    <div class="box_1">
                        <div class="boxCenterList">
                            订单号 2009061909851<br />
                            发货单 232421   <div class="blank"></div>
                            订单号 2009052224892<br />
                            发货单 1123344   <div class="blank"></div>
                        </div>
                    </div>
                </div>
                <div class="blank"></div>
            </div>
        </div>
        </div>

        <div class="blank"></div>
        <div class="box_1"></div>

        <div class="block">
            <div class="box">
                <div class="helpTitBg" style="clear: both;">
                    <dl>
                        <dt><a href="#" title="新手上路 ">新手上路 </a></dt>
                        <dd><a href="#" title="售后流程">售后流程</a></dd>
                        <dd><a href="#" title="购物流程">购物流程</a></dd>
                        <dd><a href="#" title="订购方式">订购方式</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="手机常识 ">手机常识 </a></dt>
                        <dd><a href="#" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                        <dd><a href="#" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                        <dd><a href="#" title="如何享受全国联保">如何享受全国联保</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="配送与支付 ">配送与支付 </a></dt>
                        <dd><a href="#" title="货到付款区域">货到付款区域</a></dd>
                        <dd><a href="#" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                        <dd><a href="#" title="支付方式说明">支付方式说明</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="会员中心">会员中心</a></dt>
                        <dd><a href="#" title="资金管理">资金管理</a></dd>
                        <dd><a href="#" title="我的收藏">我的收藏</a></dd>
                        <dd><a href="#" title="我的订单">我的订单</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="服务保证 ">服务保证 </a></dt>
                        <dd><a href="#" title="退换货原则">退换货原则</a></dd>
                        <dd><a href="#" title="售后服务保证 ">售后服务保证</a></dd>
                        <dd><a href="#" title="产品质量保证 ">产品质量保证</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="联系我们 ">联系我们 </a></dt>
                        <dd><a href="#" title="网站故障报告">网站故障报告</a></dd>
                        <dd><a href="#" title="选机咨询 ">选机咨询</a></dd>
                        <dd><a href="#" title="投诉与建议 ">投诉与建议</a></dd>
                    </dl>
                </div>
            </div>


        </div>
        <div class="blank"></div>
        <div id="bottomNav" class="box block">
            <div class="box_1"></div>
        </div>
        <div class="blank"></div>
        <div id="bottomNav" class="box block">
            <div class="bNavList clearfix">
                <a href="#">免责条款</a>
                |
                <a href="#">隐私保护</a>
                |
                <a href="#">咨询热点</a>
                |
                <a href="#">联系我们</a>
                |
                <a href="#">Powered&nbsp;by&nbsp;<strong><span style="color: rgb(51, 102, 255);">YongDa</span></strong></a>
                |
                <a href="#">批发方案</a>
                |
                <a href="#">配送方式</a>

            </div>
        </div>

        <div id="footer">
            <div class="text">
                © 2005-2012 YONGDA 版权所有，并保留所有权利。<br />
            </div>
        </div>
    </body>
</html>