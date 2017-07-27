<?php
//练习：电脑通过不同的指令，执行不同的任务
//0.关机1.开机2.注销3.重启4.休眠

$n =0;
if(isset($_POST['n'])){
	$n=(int)$_POST['n'];
}
if($n>=0){
	switch($n){
		case 0:{
			echo "关机";
			break;
		}
		case 1:{
			echo "开机";
			break;
		}
		case 2:{
			echo "注销";
			break;
		}case 3:{
			echo "重启";
			break;
		}case 4:{
			echo "休眠";
			break;
		}
		default:
			echo "没快捷键 已到头";
			break;

	}

}

//swith变种：不写break
//计算本周还剩余几天
$week='Wednesday';
switch($week){
	case 'Monday':
	   echo "<br>星期一";

	case 'Tuesday':
	   echo "<br>星期二";

    case  'Wednesday':
       echo "<br>星期三";

    case 'Thursday':
       echo "<br>星期四";

    case 'Friday':
       echo "<br>星期五";

    case 'Saturday':
       echo "<br>星期六";
    default:
        break;

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>电脑</title>
</head>
<body>
<!-- action提交的位置就是你的处理逻辑的php文件名字 -->
<!-- metho http的post请求方法 -->
      <form action='01switch.php' method="post">
      <label>输入数字</label>
<!-- 给输入框的数据，起一个名字，方便在php中根据名字获取数据 -->
      <input type="text" name="n">
<!-- value是提交按钮上的字体 -->
	<!-- 如果不填默认是提交 -->
      <input type="submit" value="提交数字">
	
</form>

	
</body>
</html>
