<?php
//for循环
//0-10输出
//for(循环的开始；循环的结束；循环的动力)
for ($i=0; $i <=10 ; $i++) { 

	echo "<br>$i";
	
}
//循环也是可以嵌套使用的
//echo "*";
//第一个循环决定有几行
for ($i=0; $i <5; $i++) { 
	echo "<br>";
	//第二个循环决定每行有几个
	for ($j=0; $j<=$i; $j++) { 
		echo "*";
	}
	
	
}
for ($i=1; $i<=9 ; $i++) { 
	echo "<br>";


	for ($j=1; $j<=$i; $j++) { 
		$s=$i*$j;
		echo "&nbsp";
		echo "$i*$j=$s";
		
	}
}



echo "<hr>";
for ($i=9; $i>=1; $i--) { 
	echo "<br>";


	for ($j=1; $j<=$i; $j++) { 
		$s=$i*$j;
		echo "&nbsp";
		echo "$i*$j=$s";
		
	}
}



?>