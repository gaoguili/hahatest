<?php
//关联数组的遍历
$a=['name'=>'小王','age'=>25,'phone'=>'18888888'];
//关联数组使用 foreach 语句遍历
//$variable:需要遍历的关联数组
//$key=>$value: 遍历的基本结构，以什么样的方式来遍历数组
//foreach ($variblle as $key=>$value)｛
//}

echo "<hr>";
foreach ($a as $key => $value) {
	echo "key: $key &nbsp;";
	echo "value: $value";
	echo "<br>";

}
echo "<hr>";
foreach($a as $key){
	echo $key;
	echo "<br>";
}




?>