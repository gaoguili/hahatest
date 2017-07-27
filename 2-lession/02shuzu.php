<?php
//数组的遍历
$a=['a','b','c','d','e','f'];

//使用h1标签修饰数组内的元素，并逐个打印输出
//建议使用循环结构

for ($i=0; $i <6 ; $i++) { 
	echo $a[$i];
	
}

$a=['18888888','888@888.com'];
$b=['16666666','666@666.com'];

//二维数组的遍历
$c=[$a,$b];
//使用循环逐个遍历数组中的数据

// for ($i=0; $i <count($c) ; $i++) {
// $arr=$c[$i];
// for($j=0;$j<count($arr);$j++){
// 	echo "<br>";
// 	echo $arr[$j];

// } 

foreach ($c as $key ) {
	$arr=$key;
	foreach ($arr as $v ) {
		echo $v;
	}
}


?>