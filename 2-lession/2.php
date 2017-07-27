<?php
//学府串类型
//编码
//asc编码 英文 
//gbk gb2312 中文编码
//unicode 支持所有的语言
//utf-8

//字符串，使用"" 或者 '' 修饰的字符就是字符串
//代码的解析顺序是自上而下
//$age="11";
$age='11';
var_dump($age);
echo "<br>";
$age =11;
var_dump($age);


//字符串 单引号 '' 双引号 "" 的区别

$a="PHP";
$b="学习 $a";
var_dump($b);//string(10) "学习 php"

$b='学习 $a';
var_dump($b);//string(9) "学习$a"
//2.想在输出的内容显示"" 可以用''
$b='学习"php",真简单，马上成大神';
echo "<br>";
echo $b;

//3.想在呼出内容中显示'' 可以用""
$b="学习'php',真简单，马上成大神";
echo "<br>";
echo $b;

//4.如何在""中显示""和一些特殊符号$
//使用转义\ 符号(转义符号的作用，让特殊符号变成特殊符号)
$b="你好\"php\"大神";
echo "<br>";
echo $b; 

//5.字符串的拼接   使用. 进行字符串的拼接
$name = "小明";
$age = 10;
$sex = "男";

$msg = $name.$age.$sex;

// echo "<br>";
echo "<br>".$msg;
?>