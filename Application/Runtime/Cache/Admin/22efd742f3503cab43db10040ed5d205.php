<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href=" " rel="stylesheet" type="text/css" />
	<script type="text/javascript" src=" "></script>
	<title>事件代理</title>
</head>
<body>
	<h1>事件代理</h1>
	<hr />
	<form action="" name="myform">
		
		<input type="text" name="name1" id="" />
		<input type="text" name="name2" id="" />
	</form>
</body>
<script type="text/javascript" src="/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	
	$("form[name=myform]").click(function(event) {

		var _target = $(event.target);
		var _type = _target.attr('type');
		var _flage = false;
		if(_type == 'text'){
			$(_target).blur(function(event) {
				console.log('1');
			});	
			
		}
	});

</script>
</html>