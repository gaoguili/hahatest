<?php
//break 中断
for ($i=0; $i < 100; $i++) { 
	echo $i;
	//在第五次循环的时候结束循环
	if($i==5){
		break;
	}
}

//continue 跳过单次循环
for ($i=0; $i <10; $i++) { 
	if ($i==5) {
		continue;//跳过本次循环
		
	}
	
	echo '<br>'.$i;
}

echo "<hr>";
//练习
//用户随便输入一个 个位数字
//你需要返回0-100内个数和用户输入的个位数组相同的数



$number ='';
// var_dump($_POST);
if(isset($_POST['number'])){
	$number=(int)$_POST['number'];
}
if ($number) {
	for($i=0;$i<100;$i++){
	  if($i%10==$number%10){
		echo "<br>$i";

	}
}
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
      <form action='break.php' method="post">
      <label>输入数字</label>
<!-- 给输入框的数据，起一个名字，方便在php中根据名字获取数据 -->
      <input type="text" name="number">
<!-- value是提交按钮上的字体 -->
	<!-- 如果不填默认是提交 -->
      <input type="submit" value="提交数字">
	
</form>

	
</body>
</html>