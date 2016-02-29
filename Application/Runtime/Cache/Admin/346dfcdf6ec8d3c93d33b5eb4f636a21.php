<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心 - 添加新商品 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
<style>
    label.error{
      border: 1px solid red;
      margin-left: 2px;
      padding: 2px;
    }
    #attr{
      list-style: none;
    }
    #attr li{
      margin: 3px;
    }
  </style>

</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo U('lst');?>">商品列表</a></span>
<span class="action-span1">
    <a href="">管理中心</a>
    </span><span id="/search_id" class="action-span1">- 添加新商品</span>
<div style="clear:both"></div>
</h1>

<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">商品基本信息</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="/admin.php/Admin/Goods/add.html" method="POST" name="goods_form" >
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">商品名称：</td>
            <td><input type="text" name="goods_name" value="" style="float:left;color:;" size="30" /></td>
          </tr>
          <tr>
            <td class="label">商品分类：</td>
            <td>
              <select name="cat_id" id="">
                  <option value="">请选择商品分类...</option>
                  <?php foreach ($cateData as $k => $v): ?>
                      <option value="<?php echo $v['id'];?>">
                          <?php echo str_repeat('++', $v['level']).$v['cate_name'];?>
                      </option>
                  <?php endforeach ?>
              </select>
             </td>
          </tr>
          <tr>
            <td class="label">市场售价：</td>
            <td><input type="text" name="goods_price" value="" size="30" /></td>
          </tr>
          
           <tr>
            <td class="label">商品库存量：</td>
            <td>
              <input type="text" name="goods_number" size="30" />
            </td>
          </tr>

          <tr>
            <td class="label">上传商品图片：</td>
            <td>
              <input type="file" name="goods_img" size="30" />
            </td>
          </tr>

           <tr>
            <td class="label">商品是否上架：</td>
            <td>
                  <input type="radio" name="is_sale" value="1" checked="checked"  id=""/>是
              <input type="radio" name="is_sale" value="0"  id="" />否
            </td>
          </tr>

            <tr>
            <td class="label">商品是否新品：</td>
            <td>
                  <input type="radio" name="is_new" value="1" checked="checked"  id=""/>是
              <input type="radio" name="is_new" value="0"  id="" />否
            </td>
          </tr>

            <tr>
            <td class="label">商品是否精品：</td>
            <td>
                  <input type="radio" name="is_best" value="1" checked="checked"  id=""/>是
              <input type="radio" name="is_best" value="0"  id="" />否
            </td>
          </tr>
            <tr>
            <td class="label">商品是否热销：</td>
            <td>
                  <input type="radio" name="is_hot" value="1" checked="checked"  id=""/>是
              <input type="radio" name="is_hot" value="0"  id="" />否
            </td>
          </tr>

           <tr>
            <td class="label">商品详细描述：</td>
            <td>
                  <textarea name="goods_descp" id="container"></textarea>
            </td>
          </tr>
          <tr>
            <td class="label"> 商品类型：</td>
            <td>
                <select  id="" name="type_id">
                <option value="">请选择类型...</option>
                <?php foreach ($typeData as $k => $v): ?>
                  <option value="<?php echo $v['id'];?>"><?php echo $v['type_name'] ;?> </option>
                <?php endforeach ?>
              </select>
            </td>
          </tr>
    
        </table>

          <!-- 商品属性  -->
          <table width="90%"  align="center" id="attr">
           
          </table>
       

        <div class="button-div">
          <input type="hidden" name="goods_id" value="0" />
                    <input type="submit" value=" 确定 " class="button" />
          <input type="reset" value=" 重置 " class="button" />
        </div>
        <input type="hidden" name="act" value="insert" />
      </form>
    </div>
</div>
<!-- end goods form -->

</body>
<script type="text/javascript" src="/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/Js/validate_zh_cn.js"></script>
<script type="text/javascript" src="/Public/Js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Js/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/Public/Js/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">

/**
 * 商品表单信息提交前验证
 */
$("form[name=goods_form]").validate({
  // 验证规则，每个json对应一个表单字段
  rules:{
    goods_name:{
      required:true,
    },
    goods_number:{
      required:true,
      number:true,
    },
    shop_price:{
      required:true,
      number:true,
    },
    market_price:{
      required:true,
      number:true,
    },
    cat_id:{
      required:true,
    }
  }
});

 
/**
 * 在线编辑器使用，注意将textarea设置一个ID属性，且需要注意js顺序问题
 */
UE.getEditor('container',{
  initialFrameWidth:600,
});

/**
 * 给商品类型增加一个onchange事件，获取对应类型下的属性
 */
$("select[name=type_id]").change(function(event) {
  
var _val = $(this).val(); //当前选择的类型ID
$.ajax({
  url: '/admin.php/Admin/Goods/showattr/type_id/'+_val, // 后台请求地址？ /admin.php/Admin/Goods /admin.php/Admin/Goods/add
  type: 'GET', // GET方式提交
  dataType: 'json', // 后台返回给前台的数据类型 后台返回的是json_encode() 原生ajajx只能返回 text xml
  error:function(data){
    console.log(data);
  },
  success:function(json){

    var _html =""; // 起始字符串
    $(json).each(function(index, el) {
      // console.log(el);
      _html +="<tr><td class='label'>";
      // 1 属性类型需要考虑， 如果 0 是代表是唯一属性 如果是1代表单选属性
      // 2 attr_input_type 属性录入方式 如果是 0 代表手工输入【input】 1 代表下拉框【select】
      if(el.attr_type == 1){

        _html += "<a href='javascript:;' onclick=rowthis(this)>[+]</a>";
      }

      _html += el.attr_name+"：</td>";

      if(el.attr_input_type == 0){

        _html +="<td><input type='text' name = 'goodsattr["+el.id+"]'/>";
        
      }else{

        var _arr_option = el.attr_value.split(',');
        _html +="<td><select name=goodsattr["+el.id+"][]>";
        $(_arr_option).each(function(i, e) {
          
          _html +="<option value='"+e+"'>"+ e +"</option>";

        });
        _html +="</select></td>";
      }
      _html +="</td></tr>";
    });

    $("#attr").html(_html);
      
    }
  });
});

/**
 * 复制单选一行，事件点击单选属性增加一行或者删除一行
 * @param  {HTMLobject} obj 当前被点击的HTML元素
 * @return {无}     无
 */
function rowthis(obj){
  
  var _oldLi = $(obj).parent().parent(); // 当前被选择的tr

  var _newLi = _oldLi.clone();// 创建一个减选tr
  _newLi.find('a').html('[-]');
  
  if(_oldLi.find('a').html() == '[+]'){

    _oldLi.after(_newLi); // 将新行插入到旧行下面
    
  }else{
    _oldLi.remove();// 点击减选，移除当前行
  }

}
</script>

</html>