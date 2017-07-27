<?php


//练习:根据不同的分数区间，给考试成绩评级
//0-50 学渣
//60-70 及格
//70-80 中等
//80-90 良好
//90-100 学霸

//$inputSource='';//用户输入0-100之间的数
//写一个逻辑根据用户输入的不同分数，给他返回不同的评级



$inputSource='';

if(isset($_POST['source'])){

	$inputSource=(int)$_POST['source'];
}

if($inputSource){

	if($inputSource >=0 && $inputSource<=59){
		echo "学渣";
    }elseif ($inputSource>=60 && $inputSource<70){
		echo "及格";
    } elseif ($inputSource>=70 && $inputSource<80){
		echo "中等";
    }elseif ($inputSource>=80 && $inputSource<90){
		echo "良好";
    }elseif($inputSource>=90 && $inputSource<=100){
     	echo "学霸";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>考试评分系统</title>
</head>
<body>
	<form action="cj.php" method="post">
		<label >输入考试成绩:</label>
		<input type="text" name="source">
		<input type="submit" value="提交成绩">
	</form>
</body>
</html>


