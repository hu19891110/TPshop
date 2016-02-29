<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />

        <title>购物流程_YONGDA商城 - Powered by YongDa</title>

        <link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            table {border:1px solid #dddddd; border-collapse: collapse; width:99%; margin:auto;}
            td {border:1px solid #dddddd;}
            #consignee_addr {width:450px;}
        </style>

    </head>
    <body>
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo" alt="" src="/Public/Home/images/logo.gif" /></a>
            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                     <font id="ECS_MEMBERZONE">
                        <div id="append_parent"></div>
                        欢迎光临本店&nbsp;
                        <?php if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){?>
                        <a href="javascript:;"> <?php echo $_SESSION['user_name'];?></a>
                        <a href="<?php echo U('User/logout');?>">退出</a>

                        <?php }else{?>
                        

                        <a href="<?php echo U('User/login');?>">登录</a>
                        <a href="<?php echo U('User/register');?>">注册</a>
                    </font>
                    <?php }?>
                    </div>
                <div style="float: right;">
                    <a href="<?php echo U("Cart/CartList");?>">查看购物车</a>
                    |
                    <a href="#">选购中心</a>
                    |
                    <a href="#">标签云</a>
                    |
                    <a href="#">报价单</a>


                </div>
            </div>

            <div id="mainNav" class="clearfix">
                <a href="/index.php" >首页<span></span></a>
                <a href="#">GSM手机<span></span></a>
                <a href="#">双模手机<span></span></a>
                <a href="#">手机配件<span></span></a>
                <a href="#">优惠活动<span></span></a>
                <a href="#">留言板<span></span></a>

            </div>
        </div>

        <div class="header_bg">

            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <form id="searchForm" method="get" action="#">
                <input name="keywords" id="keyword" type="text" />
                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('/Public/Home/images/sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />

            </form>
        </div>
        <div class="blank5"></div>
        
        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="/index.php">首页</a> <code>&gt;</code> 购物流程 
            </div>
        </div>

        <div class="header_bg_b">
            <div class="f_l" style="padding-left: 10px;"></div>

            <div class="f_r" style="padding-right: 10px;">
                <img style="vertical-align: middle;" src="/Public/Home/images/biao3.gif" />

                <span class="cart" id="ECS_CARTINFO">
                    <a href="<?php echo U("Cart/CartList")?>" title="查看购物车">您的购物车中有 2 件商品，总计金额 ￥5010.00元。</a></span>
                <a href="#"><img style="vertical-align: middle;" src="/Public/Home/images/biao7.gif" /></a>
            </div>
        </div>
        <div class="blank"></div>
        <div class="block">
            <form action="<?php echo U('Cart/order2');?>" method="post" name="theForm" id="order_form"  enctype="multipart/form-data">
                <div class="flowBox">

                    <!-- 商品列表 -->
                    <h6><span>商品列表</span></h6>
                    <table cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th>商品名称</th>
                                <th>属性</th>
                                <th>市场价</th>
                                <th>本店价</th>
                                <th>购买数量</th>
                                <th>小计</th>
                            </tr>
                            <?php $tp = 0; foreach ($cartData as $k => $v): ?>
                                
                            <tr>
                                <td>
                                    <a href="#" target="_blank" class="f6"><?php echo $v['info']['goods_name'];?></a>
                                </td>

                                <td><?php echo $v['ga'];?> <br />
                                </td>
                                <td align="right">￥<?php echo $v['info']['market_price'];?>元</td>
                                <td align="right">￥<?php echo $v['info']['shop_price']; $tp += $v['info']['shop_price']*$v['goods_number'];?>元</td>
                                <td align="right"><?php echo $v['goods_number'];?></td>
                                <td align="right">￥<?php echo $v['info']['shop_price'] * $v['goods_number'];?></td>
                            </tr>

                            <?php endforeach ?>
                            
                            <tr>
                                <td colspan="7" align="right">
                                    购物金额小计： ￥ <font color="red"><?php echo $tp;?></font> 元
                                </td>
                            </tr>
                        </tbody></table>
                </div>

                <!-- 收货信息 -->
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>收货人信息</span><a href="javascript:;" class="f6">修改</a></h6>
                    <table cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <td>收货人姓名:</td>
                                <td><input type="text" name="user_name" id="" /></td>
                                <td>电子邮件地址:</td>
                                <td><input type="text" name="user_email" id="" /></td>
                            </tr>
                            <tr>
                                <td>详细地址:</td>
                                <td><input type="text" name="user_address" id="" /></td>
                                <td>电话:</td>
                                <td><input type="text" name="user_iphone" id="" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 配送方式 -->
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>配送方式</span></h6>
                    <table id="shippingTable" cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th width="5%">&nbsp;</th>
                                <th width="25%">名称</th>
                                <th>订购描述</th>
                                <th width="15%">费用</th>
                                <th width="15%">免费额度</th>
                                <th width="15%">保价费用</th>
                            </tr>
                            <tr>
                                <td valign="top"><input name="shipping" value="1"  type="radio" checked="checked" />
                                </td>
                                <td valign="top"><strong>申通快递</strong></td>
                                <td valign="top">江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元</td>
                                <td align="right" valign="top">￥15.00元</td>
                                <td align="right" valign="top">￥0.00元</td>
                                <td align="right" valign="top">不支持保价</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 支付方式 -->
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>支付方式</span></h6>
                    <table id="paymentTable" cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th width="5%">&nbsp;</th>
                                <th width="20%">名称</th>
                                <th>订购描述</th>
                                <th width="15%">手续费</th>
                            </tr>

                            <tr>
                                <td valign="top"><input name="payment" value="1" iscod="0" type="radio" checked="checked" /></td>
                                <td valign="top"><strong>支付宝支付</strong></td>
                                <td valign="top">尊敬的用户！目前暂时只支付支付宝支付，其他支付正在开发中.....</td>
                                <td align="right" valign="top">￥0.00元</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- 费用总计 -->
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>费用总计</span></h6>
                    <div id="ECS_ORDERTOTAL">
                        <table cellpadding="5" cellspacing="1" width="99%">
                            <tbody>
                                <tr>
                                    <td align="right"> 应付款金额: <font class="f4_b">￥5010.00元</font>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>           
                    <div style="margin: 8px auto; position:relative;">
                        <input src="/Public/Home/images/bnt_subOrder.gif" type="submit"  style="display:block;position:absolute;right:2px;" />
                    </div>
                </div>
            </form>
        </div>
        <div class="blank"></div>
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
            <div class="box_1">
                
            </div>
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
    </body>
</html>