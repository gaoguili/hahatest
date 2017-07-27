<?php
//PHP和html的融合
//数据由php提供
//由html显示数据


//练习：新闻列表
// $news=['习近平会见加拿大总督',
//        '李克强：人类的重大科学发现都不是计划出来的',
//        '习近平会见加拿大总督',
//        '习近平会见加拿大总督'];

$header=['姓名','电话','城市','年龄'];
$student_1=['小王','18531234','郑州',23];
$student_2=['小李','18531234','北京',23];
$student_3=['小金','18531234','广州',23];
$student_4=['小豪','18531234','上海',23];
$student_5=['小烈','18531234','东京',23];

$datas=[$header,$student_1,$student_2,$student_3,$student_4,$student_5];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻列表</title>
	<style>
	     table{
	     	width: 800px;
	     	margin: 0 outo;
	     	padding: 0;

	     }


	</style>>


</head>
<body>
<table border='1'>
<?php 
 //第一个循环决定了行
    foreach ($datas as $student) {
    	echo "<tr>";
    	//第二个循环决定了多少个

    	foreach ($student as  $value) {
    		echo "<td> $value </td>";
    	}
    	echo "</tr>";
    	



    	  // echo "<tr><td> $value </td></tr>";
    	
    }

?>
	
</table>
	
</body>
</html>