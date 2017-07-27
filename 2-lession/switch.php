<?php
//需求，商场导购，告诉用户每一层具体卖什么
//用户只需要输入楼层号
//获取表单提交的数据
//1.判断是否有数据

$floor =0;
// var_dump($_POST);
if(isset($_POST['floor'])){
	$floor=(int)$_POST['floor'];
}
if($floor>0){
	//写逻辑：1.珠宝2.电器3.服装4.游乐场5.美食
	//确定一个变量不停变换，可以用switch语句来捕获交换
	switch($floor){
		case 1:{

            echo "珠宝";
			break;//中断-switch语句
		}
		case 2:{


            echo "电器";
			break;
		}
		case 3:{

            echo "服装";
			break;
		}
		case 4:{

            echo "游乐场";
			break;
		}
		case 5:{

            echo "美食";
			break;
		}

	}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商场导购</title>
</head>
<body>
<!-- action提交的位置就是你的处理逻辑的php文件名字 -->
<!-- metho http的post请求方法 -->
      <form action='switch.php' method="post">
      <label>输入楼层</label>
<!-- 给输入框的数据，起一个名字，方便在php中根据名字获取数据 -->
      <input type="text" name="floor">
<!-- value是提交按钮上的字体 -->
	<!-- 如果不填默认是提交 -->
      <input type="submit" value="提交楼层">
	
</form>

	
</body>
</html>
