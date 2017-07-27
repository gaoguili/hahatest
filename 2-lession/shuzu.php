<?php
$name='小王';
$age=23;
$company='taobao';
$tel='1234567891';
$email='aaa@sin.com';

//数组-容器类数据类型
//将数据打包成一个变量，进行传递 
//如何创建一个数组
//1.使用[]修饰来创建一个数组
$arr=[$name,$age,$company,$tel,$email];
//只要是数组，用var_dump来输出
var_dump($arr);
echo "<br>";

//2.array()方式来创建数组
$arr=array($name,$age,$company,$tel,$email);
var_dump($arr);


//3.索引数组，往数组中添加数据时，会自动给数据添加索引
//索引的值从0开始，按照数据添加的顺序自动递增

//索引可以干什么
//提取数组中数据
$str=$arr[3];
echo "<br>";
var_dump($str);
//修改数组中数据
echo "<br>";
$arr[0]='小明';
var_dump($arr);

$arr[0]='';
echo "<br>";
var_dump($arr);

echo "<hr>";
//unset 释放变量 isset检测变量是否为空
echo "<br>";
isset($arr[0]);
echo "<br>";
var_dump($arr);

echo "<hr>";
 unset($arr[0]);
 echo "<br>";
 var_dump($arr);


//练习：写一个数组用来存放学生是基本信息
//基本信息包括：姓名 学号 年龄 专业
//要求：至少包含10名同学的信息

echo "<hr>";

for ($i=0; $i <10 ; $i++) { 
	$name='aa'.$i;
	$age=$i;
	$zy='计算机'.$i;

	// $sarr[]=$name;
	// $sarr[]=$age;
	// $sarr[]=$zy;

 	//单个学生的信息
	$sarr=[$name,$age,$zy];
	//将单个学生的信息放到总的数组中
	$all_arr[]=$sarr;
	
}
echo "<br>";
var_dump($all_arr);
//二维数组的取值方式
echo "<br>".$all_arr[8][0];

//新的赋值方式
// $a=[];
// $a[]='a';
// $a[]='b';
// $a[]='c';
// $a[]='d';
// $a[]='e';
// $a[]='f';
// $a[]='g';

// var_dump($a);


//关联数组
//关联数组他的索引可以是任意类型的值，有程序员自定义添加
//索引数组：他的索引是int，由系统自动添加

$student_arr=['name'=>'小王',
				'age'=>22,
				'zy'=>'计算机'];
				var_dump($student_arr);
				

//问题，如何获得数组中名字这个数据
				var_dump($student_arr['age']);
				// $a=$student_arr['name'];
				// var_dump($a);


?>