<?php

$n ='';
if(isset($_POST['n'])){
	$n=(int)$_POST['n'];
}
  $a=0;
	if ($a<10) {
		$a++;
		
	
	echo "n=a+a*10";
	# code...
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
      <form action='01for.php' method="post">
      <label>输入数字</label>
<!-- 给输入框的数据，起一个名字，方便在php中根据名字获取数据 -->
      <input type="text" name="n">
<!-- value是提交按钮上的字体 -->
	<!-- 如果不填默认是提交 -->
      <input type="submit" value="提交数字">
	
</form>

	
</body>
</html>