<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href=" " rel="stylesheet" type="text/css" />
	<script type="text/javascript" src=" "></script>
	<title>属性展示页</title>
</head>
<body>
	<h1>属性展示页</h1>
	<hr />
	<?php foreach ($attributeData as $k => $v): ?>
		属性ID：<?php echo $v['id'];?> <br />
		商品类型：<?php if($v['attr_type'] == 1) echo '单选属性'; else echo '唯一属性';?> <br />
		属性名称：<?php echo $v['attr_name'];?> <br />
		属性录入方式：<?php if($v['attr_input_type'] == 1) echo '列表选择'; else echo '输入框';?> <br />
		属性可选值：<?php echo $v['attr_value'];?> <hr />
	<?php endforeach ?>
</body>
</html>