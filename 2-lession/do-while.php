<?php
//do-while循环
$a=0;
do {
	$a++;
	echo "<br>$a";

	
} while ( $a<10);





//0-10的奇数
$a=1;
do {
	
	echo "<br>$a";
	$a+=2;
} while ($a<=10);

echo "<hr>";

$a=9;
do {
	
	echo "<br>$a";
	$a-=2;
} while ($a>0);


echo "<hr>";


$a=1;

do {
	if ($a%2==1) {
		echo "<br>$a";
		$a+=2;
	}
} while ($a<=10);



echo "<hr>";
$a=0;
do {
	$a++;
	if($a%2!=0){
		echo "<br>$a";
	}
} while ($a<10);

?>