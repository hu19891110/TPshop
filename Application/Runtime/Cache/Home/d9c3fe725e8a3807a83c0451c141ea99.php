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

        <div class="blank5"></div>
        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
              当前位置: <a href="/index.php ">首页</a> <code>&gt;</code> 
                <?php foreach ($breadNav as $k => $v): ?>
                             <a href="<?php echo U('category', array('id'=>$v['id']), false);?>"><?php echo $v['cate_name'];?></a> <code>&gt;</code>
                 <?php endforeach ?>
            </div>
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
                <div class="blank5"></div>
            </div>
            <div class="AreaR">

                <div class="box">
                    <div class="box_1"></div>
                </div>
                <div class="blank"></div>


                <div class="itemTit" id="itemBest">

                    <div class="tit">精品推荐</div>
                </div>
                <div id="show_best_area" class="clearfix">

                <?php foreach ($recomentGoodsData as $k => $v): ?>
                    <div class="goodsItem">
                        <a href="<?php echo U('detail', array('id'=>$v['id']), false);?>"><img src="<?php echo $viewPath . $v['goods_img'];?>" alt="<?php echo $v['goods_name'];?>" class="goodsimg"></a><br />
                        <p class="f1"><a href="<?php echo U('detail', array('id'=>$v['id']), false);?>" title="<?php echo $v['goods_name'];?>"><?php echo $v['goods_name'];?></a></p>
                        <font class="market">￥<?php echo $v['goods_price'] * 1.5;?>元</font><br />
                        <font class="f1">
                                ￥<?php echo $v['goods_price'];?>元                     
                        </font>
                    </div>
            <?php endforeach ?>
                </div>
                <div class="blank"></div>
                <div class="box">
                    <div class="box_1">
                        <h3>
                            <span>商品列表</span>
                            <form method="GET" class="sort" name="listform">
                                显示方式：
                                <a href="#"><img src="/Public/Home/images/display_mode_list.gif" alt=""></a>
                                <a href="#"><img src="/Public/Home/images/display_mode_grid_act.gif" alt=""></a>
                                <a href="#"><img src="/Public/Home/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;

                                <a href="#"><img src="/Public/Home/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
                                <a href="#"><img src="/Public/Home/images/shop_price_default.gif" alt="按价格排序"></a>
                                <a href="#"><img src="/Public/Home/images/last_update_default.gif" alt="按更新时间排序"></a>
                                <input name="category" value="3" type="hidden" />
                                <input name="display" value="grid" id="display" type="hidden" />
                                <input name="brand" value="0" type="hidden" />
                                <input name="price_min" value="0" type="hidden" />
                                <input name="price_max" value="0" type="hidden" />
                                <input name="filter_attr" value="0" type="hidden" />
                                <input name="page" value="1" type="hidden" />
                                <input name="sort" value="goods_id" type="hidden" />
                                <input name="order" value="DESC" type="hidden" />
                            </form>
                        </h3>
                        <form name="compareForm" action="compare.php" method="post" onsubmit="return compareGoods(this);">
                            <div class="clearfix goodsBox" style="border: medium none; padding: 11px 0pt 10px 5px;">


                            <?php foreach ($goodsData as $k => $v): ?>
                                
                            
                                <div class="goodsItem">
                                    <a href="<?php echo U('detail', array('id'=>$v['id']), false);?>"><img src="<?php echo $viewPath . $v['goods_thumb'];?>" alt="<?php echo $v['goods_name'];?>" class="goodsimg"></a><br />
                                    <p><a href="<?php echo U('detail', array('id'=>$v['id']), false);?>" title="<?php echo $v['goods_name'];?>"><?php echo $v['goods_name'];?></a></p>
                                    <font class="market_s">￥<?php echo $v['goods_price'] * 1.4;?>元</font><br />
                                    <font class="shop_s">￥<?php echo $v['goods_price'];?>元</font><br />
                                    <a href="#"><img src="/Public/Home/images/goumai.gif"></a> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#"><img src="/Public/Home/images/shoucang.gif"></a>
                                </div>
                            <?php endforeach ?>

                            </div>
                        </form>

                    </div>
                </div>
                <div class="blank5"></div>
                <form name="selectPageForm" action="/category.php" method="get">
                   
                       <?php echo $page;?>
                </form>
            </div>  

        </div>

        </div>

        <div class="blank"></div>
        <div class="block">
            <div class="blank"></div>
        </div>
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
                <a href="#">公司简介</a>
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
        <div style="display: none; top: 200px;" id="compareBox" align="center">
            <ul id="compareList"></ul>
            <input value="" type="button" />
        </div>
    </body>
</html>