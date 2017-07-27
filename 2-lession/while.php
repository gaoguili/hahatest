<?php
//循环结构
//只要while表达式的值为true 会循环执行{}内的语句；
//没有办法结束的循环叫做死循环
$a=0;
while ($a<=10) {
	echo "<br>$a";
	$a++;
	
	
}
//输出0到10偶数 使用while

$a=0;
$i=0;
while ($a<=10 ) {
	echo "<br>第".$i."次循环";
	$i++;
	

	echo "<br>---$a";
	$a=$a+2;
}
echo "<hr>";
$a=0;
while ($a<=10) {
	if ($a%2==0) {
		echo "<br>$a";
		$a+=2;
	}
	
}
echo "<hr>";
$a=10;
while ($a>=0) {
	echo "<br>$a";
	$a-=2;
	
}



?>